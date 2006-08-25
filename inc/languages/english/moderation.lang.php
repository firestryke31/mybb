<?php
/**
 * MyBB 1.2 English Language Pack
 * Copyright © 2006 MyBB Group, All Rights Reserved
 * 
 * $Id$
 */

$l['nav_deletethread'] = "Delete Thread";
$l['nav_deletepoll'] = "Delete Poll";
$l['nav_deleteposts'] = "Delete Selective Posts";
$l['nav_mergeposts'] = "Merge Selective Posts";
$l['nav_move'] = "Move or Copy Thread";
$l['nav_threadnotes'] = "Thread Notes and Moderator Log";
$l['nav_getip'] = "View Post IP Address";
$l['nav_merge'] = "Merge Threads";
$l['nav_split'] = "Split Thread";
$l['nav_multi_deletethreads'] = "Inline Thread Deletion";
$l['nav_multi_deleteposts'] = "Inline Post Deletion";
$l['nav_multi_splitposts'] = "Split Selected Posts";
$l['nav_multi_mergeposts'] = "Merge Selected Posts";
$l['nav_multi_movethreads'] = "Move Threads";

$l['no_mod_options'] = "No moderation options have yet been performed on this thread.";
$l['delete_poll'] = "Delete Poll";
$l['delete_posts'] = "Delete Posts";
$l['delete_selected_posts'] = "Delete Selected Posts";
$l['posted_by'] = "Posted by";
$l['delete_thread'] = "Delete Thread";
$l['get_post_ip'] = "Get Post IP Address";
$l['ip_address'] = "IP Address:";
$l['hostname'] = "Hostname:";
$l['if_resolvable'] = "(if resolvable)";
$l['admin_options'] = "Admin Options:";
$l['search_regip_users'] = "Search for users who have registered with this IP";
$l['search_postip_users'] = "Search for users who have posted with this IP";
$l['merge_threads'] = "Merge Threads";
$l['new_subject'] = "New Subject:";
$l['thread_to_merge_with'] = "Thread to merge with:";
$l['merge_with_note'] = "Copy the URL of the thread to be merged into this one into the textbox on the right.<br />The thread on the right will be deleted and all posts will be merged in to this one.";
$l['merge_posts'] = "Merge Posts";
$l['merge_posts_note'] ="All selected posts will be merged in to the first selected post.";
$l['move_copy_thread'] = "Move / Copy Thread";
$l['new_forum'] = "New Forum:";
$l['method'] = "Method";
$l['method_move'] = "Move thread";
$l['method_move_redirect'] = "Move thread and leave redirect in existing forum for days:";
$l['redirect_expire_note'] = "(leave blank for 'infinite')";
$l['method_copy'] = "Copy thread to the new forum";
$l['split_thread'] = "Split Thread";
$l['new_thread_info'] = "New Thread Information";
$l['posts_to_split'] = "Posts to Split";
$l['thread_notes_editor'] = "Thread Notes Editor";
$l['below_notes'] = "Below you can edit the notes for this thread.";
$l['update_notes'] = "Update Thread Notes";
$l['mod_logs'] = "Moderator Logs (showing last 20 actions)";
$l['mod_username'] = "Username";
$l['mod_date'] = "Date";
$l['mod_actions'] = "Action";
$l['mod_information'] = "Information";
$l['read'] = "Read:";
$l['thread'] = "Thread:";
$l['post'] = "Post:";
$l['forum'] = "Forum:";
$l['delete_threads'] = "Delete Threads";
$l['confirm_delete_threads'] = "Are you sure you wish to delete the selected threads? Once a thread has been deleted it cannot be restored and any posts, attachments or polls within that thread are also deleted.";
$l['move_threads'] = "Move Threads";
$l['confirm_delete_posts'] = "Are you sure you wish to delete the selected posts from the thread? Once they have been deleted they cannot be restored. If there are no posts left in the thread, the thread will also be deleted.";
$l['post_separator'] = "Post Separator";
$l['new_line'] = "New Line";
$l['horizontal_rule'] = "Horizontal Rule";
$l['view_all_reported_posts'] = "View all Reported Posts";
$l['all_reported_posts'] = "All Reported Posts";
$l['reported_posts'] = "Reported Posts";
$l['post_id'] = "Post ID:";
$l['poster'] = "Poster:";
$l['reporter'] = "Reporter:";
$l['report_reason'] = "Reason:";
$l['report_time'] = "Reported:";
$l['mark_read'] = "Mark Selected as Read";
$l['no_reports'] = "There are currently no unread reported posts.";
$l['unread_reports_key'] = "<strong>Note:</strong><br />Unread reports are highlighted.";
$l['resolve_fail'] = "N/A (Unable to resolve)";

$l['opened'] = "Opened";
$l['closed'] = "Closed";
$l['stuck'] = "Stuck";
$l['unstuck'] = "Unstuck";
$l['mod_process'] = "Thread {1}";
$l['redirects_removed'] = "Thread Redirects Removed";
$l['thread_deleted'] = "Thread Deleted: {1}";
$l['poll_deleted'] = "Poll Deleted: {1}";
$l['thread_approved'] = "Thread Approved: {1}";
$l['thread_unapproved'] = "Thread Unapproved: {1}";
$l['deleted_selective_posts'] = "Deleted Selective Posts ({1})";
$l['merged_selective_posts'] = "Merged Selective Posts";
$l['split_selective_posts'] = "Split posts (PIDs: {1}) to thread (TID: {2})";
$l['thread_moved'] = "Thread Moved";
$l['thread_copied'] = "Thread Copied";
$l['thread_merged'] = "Threads Merged";
$l['thread_split'] = "Thread Split";
$l['thread_notes_edited'] = "Thread Notes Edited";
$l['multi_deleted_threads'] = "Threads Deleted";
$l['multi_opened_threads'] = "Threads Opened";
$l['multi_closed_threads'] = "Threads Closed";
$l['multi_approved_threads'] = "Threads Approved";
$l['multi_unapproved_threads'] = "Threads Unapproved";
$l['multi_approve_posts'] = "Selected Posts Approved";
$l['multi_unapprove_posts'] = "Selected Posts Unapproved";
$l['multi_stuck_threads'] = "Threads Stuck";
$l['multi_unstuck_threads'] = "Threads Unstuck";
$l['multi_moved_threads'] = "Threads Moved";
$l['multi_copied_threads'] = "Threads Copied";
$l['custom_tool'] = "Custom Moderator Tool: {1}";


$l['error_nomergeposts'] = "You need to select one or more posts from the thread to be able to merge posts together.";
$l['error_cantsplitonepost'] = "You cannot split a thread that contains only one post.";
$l['error_badmergeurl'] = "The URL for the thread to be merged seems to be invalid or empty. Please copy the exact URL into the textbox.<br />Please go back and try again.";
$l['error_inline_nothreadsselected'] = "Sorry, but you did not select any threads to perform inline moderation on, or your previous moderation session has expired (Automatically after 1 hour of inactivity). Please select some threads and try again.";
$l['error_inline_nopostsselected'] = "Sorry, but you did not select any posts to perform inline moderation on, or your previous moderation session has expired (Automatically after 1 hour of inactivity). Please select some posts and try again.";
$l['error_cantsplitall'] = "You cannot split all of the posts out of this thread! If you did, what would be left in the thread?";
$l['error_nosplitposts'] = "You cannot split this thread as you did not select any posts to split from this thread.";
$l['error_noselected_reports'] = "Sorry, but you did not select any reported posts to mark as read. Either that or the selected posts have already been marked read by another user.";
$l['error_movetosameforum'] = "You cannot move this thread into the forum it is currently situated in. Please select a different forum.";
$l['error_mergewithself'] = "Threads cannot be merged with themselves.<br />Please go back and enter a valid URL.";

$l['redirect_pollnotdeleted'] = "The poll was not deleted because you did not check the \"Delete\" checkbox.<br />You will now be redirected back to the thread.";
$l['redirect_mergeposts'] = "The selected posts have now been merged together. You will now be taken back to the thread.";
$l['redirect_openthread'] = "Thank you, the thread has successfully been opened.<br />You will now be taken back to the thread.";
$l['redirect_closethread'] = "Thank you, the thread has successfully been closed.<br />You will now be taken back to the thread.";
$l['redirect_stickthread']  = "Thank you, the thread has successfully been stuck.<br />You will now be taken back to the thread.";
$l['redirect_unstickthread'] = "Thank you, the thread has successfully been unstuck.<br />You will now be taken back to the thread.";
$l['redirect_threaddeleted'] = "Thank you, the thread has been deleted. <br />You will now be returned to the forum.";
$l['redirect_threadmoved'] = "The thread has been moved or copied to the selected forum successfully.<br />You will now be returned to it.";
$l['redirect_redirectsremoved'] = "All move redirects to this thread have now been removed.<br />You will now be taken back to the thread.";
$l['redirect_threadapproved'] = "The thread has been approved successfully.";
$l['redirect_threadunapproved'] = "The thread has been unapproved successfully.";
$l['redirect_threadsplit'] = "The thread has been split successfully.<br />You will now be taken to the new thread.";
$l['redirect_threadnotesupdated'] = "Thank you, the notes for this thread have successfully been updated.<br />You will now be returned to the thread.";
$l['redirect_threadsmerged'] = "Thank you, the two threads have successfully been merged together.<br />You will now be taken to the new thread.";
$l['redirect_inline_threadsdeleted'] = "The selected threads have been deleted.<br />You will now be returned to the forum.";
$l['redirect_inline_threadsopened'] = "The selected threads have been opened.<br />You will now be returned to the forum.";
$l['redirect_inline_threadsclosed'] = "The selected threads have been closed.<br />You will now be returned to the forum.";
$l['redirect_inline_threadsstuck'] = "The selected threads have been stuck.<br />You will now be returned to the forum.";
$l['redirect_inline_threadsunstuck'] = "The selected threads have been unstuck.<br />You will now be returned to the forum.";
$l['redirect_inline_threadsmoved'] = "The selected threads have been moved.<br />You will now be taken to the new forum the threads are in.";
$l['redirect_inline_threadsapproved'] = "The selected threads have been approved.<br />You will now be returned to the forum.";
$l['redirect_inline_threadsunapproved'] = "The selected threads have been unapproved.<br />You will now be returned to the forum.";
$l['redirect_inline_postsmerged'] = "The selected posts have been merged together.<br />You will now be taken back to the thread.";
$l['redirect_inline_postsapproved'] = "The selected posts have been approved.<br />You will now be returned to the thread.";
$l['redirect_inline_postsunapproved'] = "The selected posts have been unapproved.<br />You will now be returned to the thread.";
$l['redirect_reportsmarked'] = "The selected reported posts have been marked as read.";
$l['redirect_postsdeleted'] = "The selected posts have been deleted successfully.";
$l['redirect_customtool_thread'] = "\"{1}\" moderation tool executed successfully.<br />You will now be returned to the thread.";
$l['redirect_customtool_forum'] = "\"{1}\" moderation tool executed successfully.<br />You will now be returned to the forum.";

?>
