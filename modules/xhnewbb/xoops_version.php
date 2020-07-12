<?php

if( ! defined( 'XOOPS_ROOT_PATH' ) ) exit ;

$modversion['name'] = _MI_XHNEWBB_NAME;
$modversion['version'] = 1.31;
$modversion['description'] = _MI_XHNEWBB_DESC;
$modversion['credits'] = "Kazumi Ono<br />( http://www.myweb.ne.jp/ )";
$modversion['author'] = "Original admin section (phpBB 1.4.4) by<br />The phpBB Group<br />( http://www.phpbb.com/ )<br />";
$modversion['help'] = "newbb.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/xhnewbb_slogo.png";
$modversion['dirname'] = "xhnewbb";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "xhnewbb_categories";
$modversion['tables'][1] = "xhnewbb_forum_access";
$modversion['tables'][2] = "xhnewbb_forum_mods";
$modversion['tables'][3] = "xhnewbb_forums";
$modversion['tables'][4] = "xhnewbb_posts";
$modversion['tables'][5] = "xhnewbb_posts_text";
$modversion['tables'][6] = "xhnewbb_topics";
$modversion['tables'][7] = "xhnewbb_users2topics";


// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'xhnewbb_index.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'xhnewbb_search.html';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file'] = 'xhnewbb_searchresults.html';
$modversion['templates'][3]['description'] = '';
$modversion['templates'][4]['file'] = 'xhnewbb_thread.html';
$modversion['templates'][4]['description'] = '';
$modversion['templates'][5]['file'] = 'xhnewbb_viewforum.html';
$modversion['templates'][5]['description'] = '';
$modversion['templates'][6]['file'] = 'xhnewbb_viewtopic_flat.html';
$modversion['templates'][6]['description'] = '';
$modversion['templates'][7]['file'] = 'xhnewbb_viewtopic_thread.html';
$modversion['templates'][7]['description'] = '';
$modversion['templates'][8]['file'] = 'xhnewbb_viewallforum.html';
$modversion['templates'][8]['description'] = '';
$modversion['templates'][9]['file'] = 'xhnewbb_post_form.html';
$modversion['templates'][9]['description'] = '';
$modversion['templates'][10]['file'] = 'xhnewbb_cutpasteposts.html';
$modversion['templates'][10]['description'] = '';
$modversion['templates'][11]['file'] = 'xhnewbb_delete.html';
$modversion['templates'][11]['description'] = '';

// Blocks
$modversion['blocks'][1] = array(
	'file' => "xhnewbb_blocks.php" ,
	'name' => _MI_XHNEWBB_BNAME1 ,
	'description' => '' , // _MI_XHNEWBB_BDESC1 deprecated
	'show_func' => "b_xhnewbb_main_show" ,
	'options' => "10|1|time|public|1|0|0" ,
	'edit_func' => "b_xhnewbb_main_edit" ,
	'template' => 'xhnewbb_main_block.html' ,
	'can_clone' => true
	) ;

$modversion['blocks'][2] = array(
	'file' => "xhnewbb_blocks.php" ,
	'name' => _MI_XHNEWBB_BNAME1 ,
	'description' => '' , // _MI_XHNEWBB_BDESC1 deprecated
	'show_func' => "b_xhnewbb_main_show" ,
	'options' => "10|1|time|public|1|0|0" ,
	'edit_func' => "b_xhnewbb_main_edit" ,
	'template' => 'xhnewbb_main_block2.html' ,
	'can_clone' => true
	) ;

// Configurations
$modversion['config'][1] = array(
	'name'			=> 'xhnewbb_allow_textimg' ,
	'title'			=> '_MI_XHNEWBB_ALLOW_TEXTIMG' ,
	'description'	=> '_MI_XHNEWBB_ALLOW_TEXTIMGDSC' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> "0" ,
	'options'		=> array()
) ;

$modversion['config'][2] = array(
	'name'			=> 'xhnewbb_allow_sigimg' ,
	'title'			=> '_MI_XHNEWBB_ALLOW_SIGIMG' ,
	'description'	=> '_MI_XHNEWBB_ALLOW_SIGIMGDSC' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> "0" ,
	'options'		=> array()
) ;

$modversion['config'][3] = array(
	'name'			=> 'xhnewbb_use_solved' ,
	'title'			=> '_MI_XHNEWBB_USE_SOLVED' ,
	'description'	=> '_MI_XHNEWBB_USE_SOLVEDDSC' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> "0" ,
	'options'		=> array()
) ;

$modversion['config'][4] = array(
	'name'			=> 'xhnewbb_allow_mark' ,
	'title'			=> '_MI_XHNEWBB_ALLOW_MARK' ,
	'description'	=> '' ,
	'formtype'		=> 'yesno' ,
	'valuetype'		=> 'int' ,
	'default'		=> "0" ,
	'options'		=> array()
) ;

$modversion['config'][5] = array(
	'name'			=> 'xhnewbb_viewallbreak' ,
	'title'			=> '_MI_XHNEWBB_VIEWALLBREAK' ,
	'description'	=> '_MI_XHNEWBB_VIEWALLBREAKDSC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'int' ,
	'default'		=> "10" ,
	'options'		=> array()
) ;

$modversion['config'][6] = array(
	'name'			=> 'xhnewbb_selfeditlimit' ,
	'title'			=> '_MI_XHNEWBB_SELFEDITLIMIT' ,
	'description'	=> '_MI_XHNEWBB_SELFEDITLIMITDSC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'int' ,
	'default'		=> "31536000" ,
	'options'		=> array()
) ;

$modversion['config'][7] = array(
	'name'			=> 'xhnewbb_selfdellimit' ,
	'title'			=> '_MI_XHNEWBB_SELFDELLIMIT' ,
	'description'	=> '_MI_XHNEWBB_SELFDELLIMITDSC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'int' ,
	'default'		=> "0" ,
	'options'		=> array()
) ;

$modversion['config'][8] = array(
	'name'			=> 'xhnewbb_css_uri' ,
	'title'			=> '_MI_XHNEWBB_CSS_URI' ,
	'description'	=> '_MI_XHNEWBB_CSS_URIDSC' ,
	'formtype'		=> 'textbox' ,
	'valuetype'		=> 'text' ,
	'default'		=> 'index.css' ,
	'options'		=> array()
) ;

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "xhnewbb_search";

// Smarty
$modversion['use_smarty'] = 1;

// Notification

$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'xhnewbb_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'thread';
$modversion['notification']['category'][1]['title'] = _MI_XHNEWBB_THREAD_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_XHNEWBB_THREAD_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = 'viewtopic.php';
$modversion['notification']['category'][1]['item_name'] = 'topic_id';
$modversion['notification']['category'][1]['allow_bookmark'] = 1;

$modversion['notification']['category'][2]['name'] = 'forum';
$modversion['notification']['category'][2]['title'] = _MI_XHNEWBB_FORUM_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_XHNEWBB_FORUM_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('viewtopic.php', 'viewforum.php');
$modversion['notification']['category'][2]['item_name'] = 'forum';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'global';
$modversion['notification']['category'][3]['title'] = _MI_XHNEWBB_GLOBAL_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_XHNEWBB_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = array('index.php', 'viewtopic.php', 'viewforum.php');

$modversion['notification']['event'][1]['name'] = 'new_post';
$modversion['notification']['event'][1]['category'] = 'thread';
$modversion['notification']['event'][1]['title'] = _MI_XHNEWBB_THREAD_NEWPOST_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_XHNEWBB_THREAD_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_XHNEWBB_THREAD_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'xh_thread_newpost_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_XHNEWBB_THREAD_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'new_thread';
$modversion['notification']['event'][2]['category'] = 'forum';
$modversion['notification']['event'][2]['title'] = _MI_XHNEWBB_FORUM_NEWTHREAD_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_XHNEWBB_FORUM_NEWTHREAD_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_XHNEWBB_FORUM_NEWTHREAD_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'xh_forum_newthread_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_XHNEWBB_FORUM_NEWTHREAD_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'new_forum';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['title'] = _MI_XHNEWBB_GLOBAL_NEWFORUM_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_XHNEWBB_GLOBAL_NEWFORUM_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_XHNEWBB_GLOBAL_NEWFORUM_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'xh_global_newforum_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_XHNEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ;

$modversion['notification']['event'][4]['name'] = 'new_post';
$modversion['notification']['event'][4]['category'] = 'global';
$modversion['notification']['event'][4]['title'] = _MI_XHNEWBB_GLOBAL_NEWPOST_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_XHNEWBB_GLOBAL_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_XHNEWBB_GLOBAL_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'xh_global_newpost_notify';
$modversion['notification']['event'][4]['mail_subject'] = _MI_XHNEWBB_GLOBAL_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][5]['name'] = 'new_post';
$modversion['notification']['event'][5]['category'] = 'forum';
$modversion['notification']['event'][5]['title'] = _MI_XHNEWBB_FORUM_NEWPOST_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_XHNEWBB_FORUM_NEWPOST_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_XHNEWBB_FORUM_NEWPOST_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'xh_forum_newpost_notify';
$modversion['notification']['event'][5]['mail_subject'] = _MI_XHNEWBB_FORUM_NEWPOST_NOTIFYSBJ;

$modversion['notification']['event'][6]['name'] = 'new_fullpost';
$modversion['notification']['event'][6]['category'] = 'global';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_XHNEWBB_GLOBAL_NEWFULLPOST_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_XHNEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_XHNEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'xh_global_newfullpost_notify';
$modversion['notification']['event'][6]['mail_subject'] = _MI_XHNEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ;

// onUpdate
if( ! empty( $_POST['fct'] ) && ! empty( $_POST['op'] ) && $_POST['fct'] == 'modulesadmin' && $_POST['op'] == 'update_ok' && $_POST['dirname'] == $modversion['dirname'] ) {
	include dirname( __FILE__ ) . "/include/onupdate.inc.php" ;
}

?>