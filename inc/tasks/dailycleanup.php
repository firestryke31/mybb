<?php
/**
 * MyBB 1.2
 * Copyright � 2007 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybboard.net
 * License: http://www.mybboard.net/about/license
 *
 * $Id$
 */

function task_dailycleanup($task)
{
	global $mybb, $db, $cache;

	// Clear out sessions older than 24h
	$cut = TIME_NOW-60*60*24;
	$db->delete_query("sessions", "uid='0' AND time < '{$cut}'");

	// Delete old read topics
	if($mybb->settings['threadreadcut'] > 0)
	{
		$cut = TIME_NOW-($mybb->settings['threadreadcut']*60*60*24);
		$db->delete_query("threadsread", "dateline < '{$cut}'");
		$db->delete_query("forumsread", "dateline < '{$cut}'");
	}
	
	// Check PMs moved to trash over a week ago & delete them
	$timecut = time()-(60*60*24*7);
	$query = $db->simple_select("privatemessages", "pmid, uid, folder", "deletetime<='{$timecut}' AND folder='4'");
	while($pm = $db->fetch_field($query))
	{
		$user_update[$pm['uid']] = $uid;
		$pm_update[] = $pm['pmid'];
	}
	
	if(!empty($pm_update))
	{
		$db->delete_query("privatemessages", "pmid IN(".implode(',', $pm_update).")");
	}
	
	foreach($user_update as $uid)
	{
		update_pm_count($uid);
	}
	
	$cache->update_stats_most_replied_threads();
	$cache->update_stats_most_viewed_threads();
}
?>