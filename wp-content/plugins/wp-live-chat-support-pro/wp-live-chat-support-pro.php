<?php
/*
  Plugin Name: WP Live Chat Support Pro
  Plugin URI: http://wp-livechat.com
  Description: The Pro version of the easiest to use website live chat plugin. Let your visitors chat with you and increase sales conversion rates with WP Live Chat. No third party connection required!
  Version: 5.0.5
  Author: WP Live Chat
  Author URI: http://wp-livechat.com
 */


/* 
 * 5.0.5 - 2015-09-17 - Low priority
 * You can now choose to disable the sound that is played when a new live chat message is received
 * Fixed a bug that caused some live chat settings to revert back to default when updating the plugin
 * 
 * 5.0.4 - 2015-09-09 - Low Priority
 * Fixed a bug that displayed an error message to update plugin while using the latest version (Pro)
 * Alert message removed when a user was made an agent on the settings page (Pro)
 * Fixed a bug that would prevent the user from typing if they had a previous chat session (Pro)
 * 
 * 5.0.3 - 2015-08-20 - Low priority
 * Fixed a bug that caused a long delay for the user after the agent accepted the chat
 * Fixed a bug that stopped showing the chat box when using the cloud server on the new pro version
 * 
 * 5.0.2 - 2015-08-20 - Medium priority
 * Major performance improvements (300% reduction on local resource usage)
 * The plugin is now compatible with caching plugins
 * Fixed a bug that caused the chat window to not show when you opted to show the chat box on certain pages only
 * 
 * 5.0.1 - 2015-08-03 - Medium priority
 * Refactored the code so that the live chat box will show up even if there is a JS error from another plugin or theme
 * Fixed a bug that caused a WP_Error fatal error on the settings page when the server was down
 * Fixed a bug that stopped you from adding an agent
 * Fixed a bug that forced chat agents other than admins to refresh the page to see their chats
 * Live chat box styling fixes: top image padding; centered the "conneting, please be patient" message and added padding
 * The live chat long poll connection will not automatically reinitialize if the connection times out or returns a 5xx error.
 * Hardened the security of the connection to the Cloud API
 * 
 * 5.0.0 - 2015-07-29 - Medium priority
 * New, modern chat dashboard
 * Better user handling (chat long polling)
 * Added a welcome page to the live chat dashboard
 * The live chat dashboard is now fully responsive
 * You are now able to see who is a new visitor and who is a returning visitor
 * Bug fixes in the javascript that handles the live chat controls
 * Fixed the bug that stopped the chats from timing out after a certain amount of time
 * 
 * 4.5.6 - 2015-07-15 - Low Priority
 * Improvements: Improvements made to Ajax file
 * 
 * 4.5.5 - 2015-07-13 - Low Priority
 * Improvement: Styling improvements on the live chat dashboard
 * 
 * 4.5.4 Espresso - 2015-07-03 - Low Priority
 * New Feature: You can now encrypt all of your live chat conversations
 * Improvement: Checks put in place for certain elements in admin JS file
 * 
 * 4.5.3 Ristretto - 2015-06-26 - Low Priority
 * Security Enhancements
 * API key functionality introduced
 * External server capability introduced
 * 
 * 4.5.2 2015-05-28 Low Priority
 * Bug Fix: Exclude Functionality (Pro)
 * 
 * 4.5.1 
 * Bug Fix: Error fixed on Settings page
 * Bug Fix: Warning fixed on settings page
 * 
 * 4.5.0 2015-04-10 Low Priority
 * Enhancement: Animations settings have been moved to the 'Styling' tab.
 * New Feature: Blocked User functionality has been moved to the Free version
 * Enhancement: All descriptions have been put into tooltips for a cleaner page
 * New Feature: Functionality added in to handle Chat Experience Ratings (Premium Add-on)
 * 
 * 4.4.10 2015-03-23 Low Priority
 * Bug Fix: Bug in the banned user functionality
 * Enhancement: Stying improvement on the Live Chat dashboard
 * Enhancement: Strings are handled better for localization plugins (Pro)
 * Updated Translation Files:
 *  Spanish (Thank you Ana Ayelen Martinez)
 * 
 * 4.4.9 2015-03-17 - Low Priority
 * Bug Fix: Warnings for animations showing erroneously 
 * Bug Fix: Including and Excluding pages intermittent when using more than one page
 * 
 * 4.4.8 2015-03-16 - Low Priority
 * Bug Fix: Mobile Detect class caused Fatal error on some websites
 * Bug Fix: PHP Errors when editing user page
 * Bug Fix: Including and Excluding the chat window caused issues on some websites
 * Bug Fix: Online/Offline Toggle Switch did not work in some browsers (Pro)
 * New Feature: You can now Ban visitors from chatting with you based on IP Address (Pro)
 * New Feature: You can now choose if you want users to make themselves an agent (Pro) 
 * Bug Fix: Chat window would not hide when selecting the option to not accept offline messages (Pro) 
 * Enhancement: Support page added 
 * Updated Translations:
 *  French (Thank you Marcello Cavallucci)
 * New Translation added:
 *  Norwegian (Thank you Robert Nilsen)
 *  Hungarian (Thank you GInception)
 *  Indonesian (Thank you Andrie Willyanta)
 * 
 * 4.4.7 2015-02-18 - Low Priority
 * New Feature: You can now send an offline message to more than one email address (Pro)
 * New Feature: You can now specify if you want to be online or not (Pro)
 * New Feature: You can now choose to record your visitors IP address or not
 * 
 * 
 * 4.4.6 2015-02-13 - Medium Priority
 * Bug Fix: Styling Issues Related to Animations/Transitions
 * 
 * 4.4.5 2015-02-12 - Low Priority
 * New Feature: You can now apply an animation to the chat window on page load
 * New Feature: You can now choose from 5 colour schemes for the chat window
 * Enhancement: Aesthetic Improvement to list of agents (Pro)
 * Code Improvement: PHP error fixed
 * Updated Translations:
 *  German (Thank you Dennis Klinger)  
 * 
 * 4.4.4 2015-01-29 - Low Priority
 * New feature: Live Chat dashboard has a new layout and design
 * Code Improvement: jQuery Cookie updated to the latest version
 * Code Improvement: More Live Chat strings are now translatable 
 * New Live Chat Translation added:
 *  Spanish (Thank you Ana Ayelï¿½n Martï¿½nez)
 * 
 * 4.4.3 2015-01-21 - Low Priority
 * New Basic Feature: You can now view any live chats you have missed
 * New Pro Feature: You can record offline messages when live chat is not online
 * Code Improvements: Labels added to buttons
 * Code Improvements: PHP Errors fixed
 * 
 * Updated Translations:
 *  Italian (Thank You Angelo Giammarresi)
 * 
 * 4.4.2 2014-12-17 - Low Priority
 * New feature: The chat window can be hidden when offline (Pro only)
 * New feature: Desktop notifications added
 * Bug fix: Email address gave false validation error when not required.
 * 
 * Translations Added:
 *  Dutch (Thank you Elsy Aelvoet)
 * 
 * 
 * 4.4.1 2014-12-10 - Low Priority
 * New feature: You can now toggle between displaying or hiding the users name in your Live Chat messages
 * New feature: You can now choose to display the Live Chat window to all or only registered users
 * New feature: A user image will now display in the Live Chat message
 * Code Improvement: jQuery UI CSS is loaded from a local source as using an external source caused issues on some sites using SSL
 * Bug Fix: Only Admin users can make users Live Chat agents
 * 
 * New WP Live Chat Support Translations added:
 * Mongolian (Thank you Monica Batuskh)
 * Romanian (Thank you Sergiu Balaes)
 * Czech (Thank you Pavel Cvejn)
 * Danish (Thank you Mikkel Jeppesen Juhl)
 * 
 * WP Live Chat Support Translations that have been updated:
 * German (Thank you Dennis Klinger)
 * 
 * 4.4.0 2014-11-20
 * Chat UI Improvements
 * Small bug fixes
 * 
 * 4.3.3
 * New Feature: You can now include or exclude the chat window on certain pages
 * Code Improvements: (Checks for DONOTCACHE)
 * 
 * 4.3.2
 * It is not required to enter your name and email address anymore. 
 * Logged In users wont have to enter their details in.
 * Turn the chat on/off on a mobile device.
 * 
 * 4.3.1
 * Bug fix: sound was not played when user received a message from the admin
 *   
 * 4.3.0
 * Added "Quick Response" functionality
 * Small bug fixes
 * Internationalization update
 * New WP Live Chat Support Translation added:
 *  * Swedish (Thank You Tobias Sernhede)
 *  * French (Thank You Marcello Cavallucci)
 * 
 * 4.2.1
 * Code improvements (Errors fixed in IE)
 * Chat performance improvements
 * 
 * 4.2.0
 * High priority update
 * Significant performance improvements
 * Small bug fixes
 * 
 * 4.1.3
 * Code improvements (PHP warnings)
 * 
 * 4.1.2
 * Performance improvements:
 *  - Significant performence improvements
 *  - Visitor list is only updated once every 3 seconds
 *  - Introduced new constants to control the delay between long polling requests and requests within the long poll call
 *  - Chat window will now only show in one window (if user has multiple tabs open on your site)
 * Various bug fixes
 *  - Minor bugs fixed
 *  - Image bug (front end) fixed
 * 
 * 4.1.1
 * Major bug fix - in some instances admin couldnt chat (answered by other agent message)
 * Backend UI Improvements
 * 
 * 4.1.0
 * Vulnerability fix (JS injections). Thank you Patrik @ www.it-securityguard.com
 * New feature: You can now show the chat box on the left or right
 * Fixed bug in menu where mutli agent user could not access it
 * Fixed 403 bug when saving settings
 * Fixed Ajax Time out error (Lowered From 90 to 28)
 * Multi Agents is now standard in pro
 * Fixed PHP Notices (settings page)
 * Added option to auto pop up chat window
 * Added Italian language files. Thanks to Davide PantÃ¨
 * 
 * 4.0.3
 * Initiate chat bug fix
 * 
 * 4.0.2
 * Backwards compatibility checks
 * 
 * 4.0.1
 * Small bug fix
 * 
 * 4.0.0
 * Overhauled all ajax requests to server to to be less resource intensive
 * Added more localization to strings that weren't been localized
 * Added Feedback Menu
 * Added Welcome Page
 * Added Support For Multiple Agents (Add On)
 * Fixed "Chat Pending" Forever showing to user - Chat now displays admin is away message
 * Completed chats - Vistors are returned to browsing
 * Fixed Many Bugs
 * 
 * 
 * 3.08
 * 
 * Added more strings to po file
 * Fixed select boxes in settings to show selected option
 * Fixed table headers changing back to english on alternative launguage installs
 * 
 * 3.07
 * 
 * Fixed bug showing all errors
 * Fixed bug of function not found - wplc_get_home_path
 * 
 * 3.06
 * 
 * Fixed no validation on offline email send bug
 * Fixed Languages Bug
 * Fixed 500 error from ajax when wp-content had different name
 * 
 * 3.05
 * 
 * Fixed input height issues
 * Fixed input overlapping bottom of chat
 * Fixed Endless Connecting
 * Testing chat is now easier (No Crossing over to other browser) 
 * 
 * 3.04
 * 
 * Fixed Bug SHowing undefined variables
 * Fixed minimmize bug that starts ringing again
 * 
 * 3.03
 * 
 * Fixed Placeholder text not displaying in IE 
 * 
 * 3.02
 * 
 * Email bug fix
 * 
 * 3.01
 * 
 * Fixed Close & Minimixe Button Styling Issues
 * Fixed bug where text was not hidden when offline message was sent
 * Fixed bug that would hide text behind image if text was 2 lines
 * Fixed bug that continuesly scrolled chat down
 * Fixed styling of inputs on some themes (overlaps chat box)
 * Set CSS color for inputs
 * Fixed bug that wasn't alerting admin in wp-admin to chat if Alert via email was set (Pro)
 * Fixed Double opening bug if chat was moved
 * Fixed Bug to inform admin and user either or has ended the chat
 * Fixed other small bugs
 * 
 * 3.0
 * 
 * Updated Styling of plugin
 * Chat window is now draggable
 * fixed bug generating characters on activation
 * 
 * 2.9
 * 
 * Fix Update Plugin Bug
 * 
 * 2.8
 * 
 * Added Support For WP-Mail Now
 * Fixed bug not saving Alignment 
 * Fixed bug not saving if Enabled or not
 * 
 * 2.7
 * 
 * Chat Delay Value Shows Up Now
 * Added remove image button
 * Fixed image not showing on fresh install
 * Fixed image been lost on settings save
 * 
 * 2.6
 * 
 * Added support to email for proper smtp (phpMailer)
 * changed .live to .on
 * Fixed cookie bugs
 * Add delete history option
 * Set minimize bar to correct color
 * fixed bug where refresh page would make chat dissapear
 * Chat Initiation Bug fix
 * Set Datbase charset from Latin to UTF-8
 * Added error reporting
 * 
 * 2.5
 * Fixed a bug that was causing "page not found error"
 * Better UI for the settings page
 * Added the ability to end live chats 
 * 
 * 2.4
 * Fixed offline message email bug
 * 
 * 2.3
 * Major performance improvements
 * Plugin now uses the new media manager to upload your profile pic and logo
 * A sound now plays every time a visitor replies to one of your chat sessions
 *
 *
 * 2.2
 * You now have full control of the fill and font color of your live chat box
 * Enabled the ability to turn live chat on or off
 * Better notification of incoming live chats.
 * Added more localization support
 * Plugin should now be compatible with caching plugins.
 * Plugin now uses the normal WordPress update functionality
 *
 * 2.1
 * More precise functionality to handle if you are online or offline
 * Fixed a bug that recorded visitors when offline
 * Neatened up some code
 * Fixed some small bugs
 * 
 * 2.0
 * Added "not available" functionality. Allows the visitor to leave a message when the admin is offline.
 * You can now get notified via email if someone is trying to start a chat with you.
 * Better front-end UI.
 *
 *
 */
//error_reporting(E_ERROR);
global $wpdb;
global $wplc_pro_version;
global $wplc_tblname_offline_msgs;

$wplc_tblname_offline_msgs = $wpdb->prefix . "wplc_offline_messages";

$wplc_pro_version = "5.0.5";

//add_action('admin_menu', 'wplc_error_menu');

require_once (plugin_dir_path(__FILE__) . "ajax-pro.php");
require_once (plugin_dir_path(__FILE__) . "functions-pro.php");
require_once (plugin_dir_path(__FILE__) . "functions-external.php");

register_activation_hook(__FILE__, 'wplc_pro_activate');
add_action('admin_head', 'wplc_register_pro_version');
add_action('admin_head', 'wplc_ma_head');
add_action('wp_logout', 'wplc_ma_agent_logout');
add_action('edit_user_profile_update', 'wplc_ma_set_user_as_agent'); // not current user profile
add_action('personal_options_update', 'wplc_ma_set_user_as_agent'); // current user profile
add_action('edit_user_profile', 'wplc_ma_custom_user_profile_fields'); // not current user profile
add_action('show_user_profile', 'wplc_ma_custom_user_profile_fields'); // current user profile
add_action('init', 'wplc_set_admin_to_access_chat');
add_action('init', 'wplc_pro_version_control');
add_action('admin_bar_menu', 'wplc_ma_online_agents', 100);
add_action('init', 'wplc_create_macro_post_type');
add_action('wp_ajax_wplc_macro', 'wplc_action_callback_pro');

//Ajax call backs
add_action('wp_ajax_nopriv_wplc_user_send_offline_message', 'wplc_action_callback_pro');
add_action('wp_ajax_nopriv_wplc_start_chat', 'wplc_action_callback_pro');
add_action('wp_ajax_wplc_user_send_offline_message', 'wplc_action_callback_pro');
add_action('wp_ajax_wplc_start_chat', 'wplc_action_callback_pro');
add_action('wp_ajax_wplc_ma_set_transient', 'wplc_action_callback_pro');
add_action('wp_ajax_wplc_ma_remove_transient', 'wplc_action_callback_pro');
add_action('wp_ajax_wplc_use_external_server', 'wplc_action_callback_pro');
add_action('wp_ajax_wplc_submit_chat_experience_rating', 'wplc_action_callback_pro');
add_action('wp_ajax_wplc_add_agent', 'wplc_action_callback_pro');
add_action('wp_ajax_wplc_remove_agent', 'wplc_action_callback_pro');


function wplc_pro_version_control() {
    global $wplc_pro_version;

    /* add caps to admin */
    if (current_user_can('manage_options')) {
        global $user_ID;
        $user = new WP_User($user_ID);
        foreach ($user->roles as $urole) {
            if ($urole == "administrator") {
                $admins = get_role('administrator');
                $admins->add_cap('edit_wplc_quick_response');
                $admins->add_cap('edit_wplc_quick_response');
                $admins->add_cap('edit_other_wplc_quick_response');
                $admins->add_cap('publish_wplc_quick_response');
                $admins->add_cap('read_wplc_quick_response');
                $admins->add_cap('read_private_wplc_quick_response');
                $admins->add_cap('delete_wplc_quick_response');
            }
        }
    }

    $current_version = get_option("wplc_pro_current_version");
    if (!isset($current_version) || $current_version != $wplc_pro_version) {
        wplc_pro_update_db();
        update_option("wplc_pro_current_version", $wplc_pro_version);

        $wplc_pro_settings = get_option("WPLC_PRO_SETTINGS");
        $wplc_settings = get_option("WPLC_SETTINGS");
        if (isset($wplc_pro_settings['wplc_pro_chat_email_address'])) {
            
        } else {
            $wplc_pro_settings['wplc_pro_chat_email_address'] = get_option('admin_email');
        }
        if(!isset($wplc_settings['wplc_enable_msg_sound'])){
            $wplc_settings['wplc_enable_msg_sound'] = "1";
        }
        update_option("WPLC_PRO_SETTINGS", $wplc_pro_settings);
        update_option("WPLC_SETTINGS", $wplc_settings);
    }    
    
}

function wplc_pro_update_db() {
    global $wpdb;
    global $wplc_tblname_chats;
    global $wplc_tblname_offline_msgs;

    $sql = " SHOW COLUMNS FROM $wplc_tblname_chats WHERE `Field` = 'agent_id'";
    $results = $wpdb->get_results($sql);
    if (!$results) {
        $sql = "
            ALTER TABLE `$wplc_tblname_chats` ADD `agent_id` INT(11) NOT NULL ;
        ";
        $wpdb->query($sql);
    }

    $sql2 = "
        CREATE TABLE " . $wplc_tblname_offline_msgs . " (
          id int(11) NOT NULL AUTO_INCREMENT,
          timestamp datetime NOT NULL,
          name varchar(700) NOT NULL,
          email varchar(700) NOT NULL,
          message varchar(700) NOT NULL,
          ip varchar(700) NOT NULL,
          user_agent varchar(700) NOT NULL,
          PRIMARY KEY  (id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
    ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql2);

    $admins = get_role('administrator');
    $admins->add_cap('wplc_ma_agent');
    $uid = get_current_user_id();
    update_user_meta($uid, 'wplc_ma_agent', 1);
    update_user_meta($uid, "wplc_chat_agent_online", time());
}

function wplc_action_callback_pro() {
    $check = check_ajax_referer('wplc', 'security');
    if ($check == 1) {
        
        if ($_POST['action'] == "wplc_user_send_offline_message") {
            wplc_send_offline_message($_POST['name'], $_POST['email'], $_POST['msg'], $_POST['cid']);
            if(function_exists('wplc_pro_store_offline_message')){
                wplc_pro_store_offline_message($_POST['name'], $_POST['email'], $_POST['msg']);
            }
        }

        if ($_POST['action'] == "wplc_add_agent") {
          if (current_user_can("manage_options")) {
              $uid = sanitize_text_field(intval($_POST['uid']));
              if (isset($uid)) {
                  update_user_meta($uid, 'wplc_ma_agent', true);
                  echo "1";
              } else {
                echo "0";
              }
          }
        }
        if ($_POST['action'] == "wplc_remove_agent") {
          if (current_user_can("manage_options")) {
                $uid = sanitize_text_field(intval($_POST['uid']));
                if (isset($uid)) {
                    delete_user_meta($uid, 'wplc_ma_agent');
                    echo "1";
                } else {
                  echo "0";
                }
            }
          } 

        if ($_POST['action'] == "wplc_start_chat") {

            if (isset($_POST['cid'])) {
                if ($_POST['name'] && $_POST['email']) {
                    echo wplc_user_initiate_chat(sanitize_text_field($_POST['name']), sanitize_email($_POST['email']), sanitize_text_field($_POST['cid']), $_POST['wplcsession']); // echo the chat session id
                } else {
                    echo "error2";
                }
            } else {
                if ($_POST['name'] && $_POST['email']) {
                    echo wplc_user_initiate_chat(sanitize_text_field($_POST['name']), sanitize_email($_POST['email']), null, $_POST['wplcsession']); // echo the chat session id
                } else {
                    echo "error2";
                }
            }
        }
        if ($_POST['action'] == "wplc_macro") {
            if (isset($_POST['postid'])) {
                $post_id = $_POST['postid'];
            } else {
                return false;
            }

            if ($post_id > 0) {
                $post_details = get_post($post_id);
                if ($post_details) {
                    echo json_encode(nl2br($post_details->post_content));
                } else {
                    echo json_encode("No post with that ID");
                    die();
                }
            } else {
                echo json_encode("No macro with that ID");
                die();
            }
        }
        if ($_POST['action'] == "wplc_ma_set_transient") {
            wplc_ma_set_agents_online($_POST['user_id']);
        }
        
        if($_POST['action'] == "wplc_ma_remove_transient"){
            wplc_ma_remove_agents_online($_POST['user_id']);
        }
        
        if($_POST['action'] == "wplc_use_external_server"){
            wplc_use_external_server($_POST['api_key'], $_POST['status']);
        }
    }


    die(); // this is required to return a proper result
}

function wplc_pro_version_check() {
    global $wplc_version;
    if ($wplc_version && ($wplc_version == "4.1.0") || floatval($wplc_version) < 4) {
        ?>
        <div class='error below-h1'>

            <p><?php _e("Dear User", "wplivechat") ?><br /></p>
            <p><?php _e("You are using an outdated version of WP Live Chat Support Basic. Please", "wplivechat") ?> <a href="http://wordpress.org/plugins/wp-live-chat-support/" target=\"_BLANK\"><?php _e("update to at least version", "wplivechat") ?> 4.1.2</a> <?php _e("to ensure all functionality is in working order", "wplivechat") ?>.</p>
            <p><strong><?php _e("You're live chat box on your website has been temporarily disabled until the basic plugin has been updated. This is to ensure a smooth and hassle-free user experience for both yourself and your visitors.", "wplivechat") ?></strong></p>
            <p><?php _e("You can update your plugin <a href='./update-core.php'>here</a> or <a href='./plugins.php'>here</a>.", "wplivechat") ?></strong></p>
            <p><?php _e("If you are having difficulty updating the plugin, please contact", "wplivechat") ?> nick@wp-livechat.com</p>

        </div>
        <?php
    }
}

function wplc_register_pro_version() {
    // pro version register
    if (!function_exists("wplc_init")) {
        echo "
        <div class='error below-h1'>
            <p>" . __("Dear Pro User", "wplivechat") . "<br /></p>
            <p>" . __("WP Live Chat Support Pro requires WP Live Chat Support to function. You can download the latest copy from", "wplivechat") . " <a href=\"http://wordpress.org/plugins/wp-live-chat-support/\">wordpress.org</a></p>
        </div>";
    }
    
}

function wplc_pro_activate() {

    if (!get_option("WPLC_PRO_SETTINGS")) {

        $wplc_current_user = wp_get_current_user();
        add_option('WPLC_PRO_SETTINGS', array(
            "wplc_chat_name" => __("Admin", "wplivechat"),
            "wplc_chat_pic" => plugin_dir_url(__FILE__) . "images/picture-for-chat-box.jpg",
            "wplc_chat_logo" => "",
            "wplc_chat_delay" => "10",
            "wplc_pro_fst1" => __("Questions?", "wplivechat"),
            "wplc_pro_fst2" => __("Chat with us", "wplivechat"),
            "wplc_pro_fst3" => __("Start live chat", "wplivechat"),
            "wplc_pro_sst1" => __("Start Chat", "wplivechat"),
            "wplc_pro_sst2" => __("Connecting. Please be patient...", "wplivechat"),
            "wplc_pro_tst1" => __("Reactivating your previous chat...", "wplivechat"),
            "wplc_pro_na" => __("Chat offline. Leave a message", "wplivechat"),
            "wplc_pro_intro" => __("Hello. Please input your details so that I may help you.", "wplivechat"),
            "wplc_pro_offline1" => __("We are currently offline. Please leave a message and we'll get back to you shortly.", "wplivechat"),
            "wplc_pro_offline2" => __("Sending message...", "wplivechat"),
            "wplc_pro_offline3" => __("Thank you for your message. We will be in contact soon.", "wplivechat"),
            "wplc_user_enter" => __("Press ENTER to send your message", "wplivechat"),
            "wplc_user_welcome_chat" => __("Welcome. How may I help you?", "wplivechat"),
            "wplc_pro_chat_notification" => "no",
            "wplc_pro_chat_email_address" => get_option('admin_email'),
            "wplc_include_on_pages" => "",
            "wplc_exclude_from_pages" => "",
        ));
        add_option('wplc_mail_type', 'wp_mail');
        add_option('wplc_mail_host');
        add_option('wplc_mail_port');
        add_option('wplc_mail_username');
        add_option('wplc_mail_password');
    }
    //delete_option('WPLC_PRO_SETTINGS');
    global $wpdb;
    global $wplc_tblname_chats;
    $sql = " SHOW COLUMNS FROM $wplc_tblname_chats WHERE `Field` = 'agent_id'";
    $results = $wpdb->get_results($sql);
    if (!$results) {
        $sql = "
            ALTER TABLE `$wplc_tblname_chats` ADD `agent_id` INT(11) NOT NULL ;
        ";
        $wpdb->query($sql);
    }
    $admins = get_role('administrator');
    $admins->add_cap('wplc_ma_agent');
    $uid = get_current_user_id();
    update_user_meta($uid, 'wplc_ma_agent', 1);
    update_user_meta($uid, "wplc_chat_agent_online", time());
}

function wplc_settings_page_pro() {
    include 'includes/settings_page_pro.php';
    return;
}

function wplc_admin_scripts() {
    global $wplc_pro_version;
    wp_register_script("wplc-admin-pro-js", plugins_url('js/wplc_admin_pro.js', __FILE__), array('jquery'),$wplc_pro_version);
    $wplc_ce_url = plugins_url().'/wp-live-chat-support-chat-experience/raty/images';
    wp_localize_script('wplc-admin-pro-js', 'wplc_ce_url', $wplc_ce_url);
    wp_localize_script('wplc-admin-pro-js', 'wplc_ce_rating_message', __('Rating Unavailable', 'wplivechat'));
    wp_enqueue_script('wplc-admin-pro-js');
    
    $wpc_admin_js_strings = array(
        'accepting_chats' => __('You are currently accepting chats', 'wplivechat'),
        'not_accepting_chats' => __('You are not accepting chats', 'wplivechat'),
        'remove_agent' => __('Remove', 'wplivechat'),
        'nonce' => wp_create_nonce("wplc"),
        'user_id' => get_current_user_id()
        );
    wp_localize_script('wplc-admin-pro-js', 'wplc_admin_strings', $wpc_admin_js_strings);
    
    wp_enqueue_script('jquery-ui-accordion');
    
    if (isset($_GET['page']) && $_GET['page'] == 'wplivechat-menu-settings') {
        wp_enqueue_media();
        wp_register_script('my-wplc-upload', plugins_url('js/media.js', __FILE__), array('jquery'), '1.0', true);
        wp_enqueue_script('my-wplc-upload');
    }
    
    if(isset($_GET['page']) && $_GET['page'] == 'wplivechat-menu'){
    
        wp_register_script('wplc_switchery', plugins_url('js/switchery.min.js', __FILE__), array('jquery'));
        wp_enqueue_script('wplc_switchery');

        wp_register_style('wplc_switchery_css', plugins_url('css/switchery.min.css', __FILE__));
        wp_enqueue_style('wplc_switchery_css');
    }
    
}

function wplc_admin_styles() {
    wp_register_style("wplc-admin-pro-css", plugins_url('css/chat_styles_pro.css', __FILE__));
    wp_enqueue_style('wplc-admin-pro-css');
    
    if (isset($_GET['page']) && $_GET['page'] == 'wplivechat-menu-settings') {
        wp_enqueue_style('thickbox');
    }
}

function wplc_pro_admin_display_history() {
    global $wpdb;
    global $wplc_tblname_chats;

    $results = $wpdb->get_results(
            "
	SELECT *
	FROM $wplc_tblname_chats
        WHERE `status` = 1 OR `status` = 8
        ORDER BY `timestamp` DESC
	"
    );
    echo "
       <form method=\"post\" >
        <input type=\"submit\" value=\"".__('Delete History', 'wplivechat')."\" class='button' name=\"wplc-delete-chat-history\" /><br /><br />
       </form>

      <table class=\"wp-list-table widefat fixed \" cellspacing=\"0\">
	<thead>
	<tr>
		<th scope='col' id='wplc_id_colum' class='manage-column column-id sortable desc'  style=''><span>" . __("Date", "wplivechat") . "</span></th>
                <th scope='col' id='wplc_name_colum' class='manage-column column-name_title sortable desc'  style=''><span>" . __("Names", "wplivechat") . "</span></th>
                <th scope='col' id='wplc_email_colum' class='manage-column column-email' style=\"\">" . __("Email", "wplivechat") . "</th>
                <th scope='col' id='wplc_url_colum' class='manage-column column-url' style=\"\">" . __("URL", "wplivechat") . "</th>
                <th scope='col' id='wplc_status_colum' class='manage-column column-status'  style=\"\">" . __("Status", "wplivechat") . "</th>
                <th scope='col' id='wplc_action_colum' class='manage-column column-action sortable desc'  style=\"\"><span>" . __("Action", "wplivechat") . "</span></th>
        </tr>
	</thead>
        <tbody id=\"the-list\" class='list:wp_list_text_link'>
        ";
    if (!$results) {
        echo "<tr><td></td><td>" . __("No chats available at the moment", "wplivechat") . "</td></tr>";
    } else {
        foreach ($results as $result) {
            unset($trstyle);
            unset($actions);


            $url = admin_url('admin.php?page=wplivechat-menu&action=history&cid=' . $result->id);
            $url2 = admin_url('admin.php?page=wplivechat-menu&action=download_history&type=csv&cid=' . $result->id);
            $actions = "
                <a href='$url' class='button' title='".__('View Chat History', 'wplivechat')."' target='_BLANK' id=''><i class='fa fa-eye'></i></a> <a href='$url2' class='button' title='".__('Download Chat History', 'wplivechat')."' target='_BLANK' id=''><i class='fa fa-download'></i></a>    
                ";
            $trstyle = "style='height:30px;'";

            echo "<tr id=\"record_" . $result->id . "\" $trstyle>";
            echo "<td class='chat_id column-chat_d'>" . $result->timestamp . "</td>";
            echo "<td class='chat_name column_chat_name' id='chat_name_" . $result->id . "'><img src=\"//www.gravatar.com/avatar/" . md5($result->email) . "?s=40\" /> " . $result->name . "</td>";
            echo "<td class='chat_email column_chat_email' id='chat_email_" . $result->id . "'><a href='mailto:" . $result->email . "' title='Email " . ".$result->email." . "'>" . $result->email . "</a></td>";
            echo "<td class='chat_name column_chat_url' id='chat_url_" . $result->id . "'>" . $result->url . "</td>";
            echo "<td class='chat_status column_chat_status' id='chat_status_" . $result->id . "'><strong>" . wplc_return_status($result->status) . "</strong></td>";
            echo "<td class='chat_action column-chat_action' id='chat_action_" . $result->id . "'>$actions</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}

function wplc_admin_pro_view_chat_history($cid) {
    if(get_option('wplc_use_external_server')){
        echo wplc_pro_draw_chat_area_ex($cid); 
    } else {
        wplc_pro_draw_chat_area($cid);
    }    
}

add_action('admin_print_scripts', 'wplc_admin_scripts');
add_action('admin_print_styles', 'wplc_admin_styles');

function wplc_pro_output_box() {

    global $wplc_version;
    if ($wplc_version && ($wplc_version == "4.1.0") || floatval($wplc_version) < 4) {
        return;
    }           
    
    $wplc_is_admin_logged_in = wplc_ma_is_agent_online();
    $wplc_settings = get_option("WPLC_SETTINGS");
    $wplc_pro_settings = get_option('WPLC_PRO_SETTINGS');
    if(isset($wplc_pro_settings['wplc_theme']) ){
        $wplc_theme = $wplc_pro_settings['wplc_theme'];
        // come back here
        if($wplc_theme == 'theme-1'){
            $wplc_settings_fill = "#DB0000";
            $wplc_settings_font = "#FFFFFF";
        } else if ($wplc_theme == 'theme-2'){
            $wplc_settings_fill = "#000000";
            $wplc_settings_font = "#FFFFFF";
        } else if ($wplc_theme == 'theme-3'){
            $wplc_settings_fill = "#DB30B3";
            $wplc_settings_font = "#FFFFFF";
        } else if ($wplc_theme == 'theme-4'){
            $wplc_settings_fill = "#1A14DB";
            $wplc_settings_font = "#F7FF0F";
        } else if ($wplc_theme == 'theme-5'){
            $wplc_settings_fill = "#3DCC13";
            $wplc_settings_font = "#FF0808";
        } else if ($wplc_theme == 'theme-6'){
            if ($wplc_settings["wplc_settings_fill"]) {
                $wplc_settings_fill = "#" . $wplc_settings["wplc_settings_fill"];
            } else {
                $wplc_settings_fill = "#ec832d";
            }
            if ($wplc_settings["wplc_settings_font"]) {
                $wplc_settings_font = "#" . $wplc_settings["wplc_settings_font"];
            } else {
                $wplc_settings_font = "#FFFFFF";
            }
        } else {
            if ($wplc_settings["wplc_settings_fill"]) {
                $wplc_settings_fill = "#" . $wplc_settings["wplc_settings_fill"];
            } else {
                $wplc_settings_fill = "#ec832d";
            }
            if ($wplc_settings["wplc_settings_font"]) {
                $wplc_settings_font = "#" . $wplc_settings["wplc_settings_font"];
            } else {
                $wplc_settings_font = "#FFFFFF";
            }
        }
    } else {
        if ($wplc_settings["wplc_settings_fill"]) {
            $wplc_settings_fill = "#" . $wplc_settings["wplc_settings_fill"];
        } else {
            $wplc_settings_fill = "#ec832d";
        }
        if ($wplc_settings["wplc_settings_font"]) {
            $wplc_settings_font = "#" . $wplc_settings["wplc_settings_font"];
        } else {
            $wplc_settings_font = "#FFFFFF";
        }
    }
    
    if(isset($wplc_pro_settings['wplc_using_localization_plugin']) && $wplc_pro_settings['wplc_using_localization_plugin'] == 1){
        $wplc_using_locale = true;
    } else {
        $wplc_using_locale = false;
    }
    
    /********************* EDIT THESE STRINGS WHEN USING A LOCALIZATION PLUGIN **************************/
    /****************************************START*******************************************************/
    $wplc_fst_1 = __('Questions?', 'wplivechat');
    $wplc_fst_2 = __('Chat with us', 'wplivechat');
    $wplc_fst_3 = __('Start live chat', 'wplivechat');

    $wplc_sst_1 = __('Start Chat', 'wplivechat');
    $wplc_sst_2 = __('Connecting. Please be patient...', 'wplivechat');

    $wplc_tst = __('Reactivating your previous chat...', 'wplivechat');

    $wplc_na = __('Chat offline. Leave a message', 'wplivechat');

    $wplc_intro = __('Hello. Please input your details so that I may help you.', 'wplivechat');

    $wplc_offline_1 = __('We are currently offline. Please leave a message and we\'ll get back to you shortly.', 'wplivechat');
    $wplc_offline_2 = __('We are currently offline. Please leave a message and we\'ll get back to you shortly.', 'wplivechat');
    $wplc_offline_3 = __('Thank you for your message. We will be in contact soon.', 'wplivechat');

    $wplc_enter = __('Press ENTER to send your message', 'wplivechat');

    $wplc_welcome = __('Welcome. How may I help you?', 'wplivechat');
    
    $wplc_replacement = __('Please click \'Start Chat\' to initiate a chat with an agent', 'wplivechat');
    /****************************************************************************************************/
    /****************************************END*********************************************************/

    if ($wplc_is_admin_logged_in == 1 or $wplc_is_admin_logged_in == true) {
        $wplc_tl_msg = "<div style=\"color: " . $wplc_settings_font . " !important;\"><strong>" . ($wplc_using_locale ? $wplc_fst_1 : stripslashes($wplc_pro_settings['wplc_pro_fst1'])) . "</strong> " . ( $wplc_using_locale ? $wplc_fst_2 : stripslashes($wplc_pro_settings['wplc_pro_fst2'])) ."</div>";
    } else {
        $wplc_tl_msg = "<span class='wplc_offline'>" . ($wplc_using_locale ? $wplc_na : stripslashes($wplc_pro_settings['wplc_pro_na'])) . "</span>";
    }
    
    
    ?>    
    <div class="wp-live-chat-wraper">
        <div id="wp-live-chat-header" style="background-color: <?php echo $wplc_settings_fill; ?> !important; color: <?php echo $wplc_settings_font; ?> !important;">
            <?php if ($wplc_pro_settings['wplc_chat_pic']) { ?>
                <div id="wp-live-chat-image">
                    <div id="wp-live-chat-inner-image-div">
                        <img src="<?php echo urldecode($wplc_pro_settings['wplc_chat_pic']); ?>" width="40px"/>
                    </div>
                </div> 
            <?php } ?>
            <i id="wp-live-chat-minimize" class="fa fa-minus" style="display:none;" alt="<?php _e('Minimize Chat Window', 'wplivechat'); ?>" title="<?php _e('Minimize Chat Window', 'wplivechat'); ?>"></i>
            <i id="wp-live-chat-close" class="fa fa-times" style="display:none;" alt="<?php _e('Close Chat Window', 'wplivechat'); ?>" title="<?php _e('Close Chat Window', 'wplivechat'); ?>"></i>

            <div id="wp-live-chat-1" >
                <div style="display:block; ">
                    <?php echo $wplc_tl_msg; ?>
                </div>
            </div>
        </div>
        <div id="wp-live-chat-2" style="display:none;">
            <?php
            if ($wplc_is_admin_logged_in == 1 or $wplc_is_admin_logged_in == true) {  // admin is logged in
                ?>
                <div id="wp-live-chat-2-info">
                <?php echo ($wplc_using_locale ? $wplc_intro : stripslashes($wplc_pro_settings['wplc_pro_intro'])); ?> 
                </div>

                <?php
                $wplc_settings = get_option("WPLC_SETTINGS");

                if (isset($wplc_settings['wplc_loggedin_user_info']) && $wplc_settings['wplc_loggedin_user_info'] == 1) {
                    $wplc_use_loggedin_user_details = 1;
                } else {
                    $wplc_use_loggedin_user_details = 0;
                }
                $wplc_loggedin_user_name = '';
                $wplc_loggedin_user_email = '';
                if ($wplc_use_loggedin_user_details == 1) {
                    global $current_user;

                    if ($current_user->data != null) {
                        //Logged in. Get name and email
                        $wplc_loggedin_user_name = $current_user->user_nicename;
                        $wplc_loggedin_user_email = $current_user->user_email;
                    }
                } else {
                    $wplc_loggedin_user_name = '';
                    $wplc_loggedin_user_email = '';
                }

                if (isset($wplc_settings['wplc_require_user_info']) && $wplc_settings['wplc_require_user_info'] == 1) {
                    $wplc_ask_user_details = 1;
                } else {
                    $wplc_ask_user_details = 0;
                }

                if ($wplc_ask_user_details == 1) {
                    //Ask the user to enter name and email
                    ?>
                    <input type="text" name="wplc_name" id="wplc_name" value="<?php echo $wplc_loggedin_user_name; ?>" placeholder="<?php _e("Names", "wplivechat"); ?>" />
                    <input type="text" name="wplc_email" id="wplc_email" wplc_hide="0" value="<?php echo $wplc_loggedin_user_email; ?>" placeholder="<?php _e("Email", "wplivechat"); ?>"  />
                    <?php
                } else {
                    //Dont ask the user
                    echo '<div style="padding: 7px; text-align: center;">';
                    if (isset($wplc_settings['wplc_user_alternative_text'])) {
                        echo ($wplc_using_locale ? $wplc_replacement : stripslashes($wplc_settings['wplc_user_alternative_text']));
                    }
                    echo '</div>';

                    $wplc_random_user_number = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
                    ?>
                    <input type="hidden" name="wplc_name" id="wplc_name" value="<?php if ($wplc_loggedin_user_name != '') {
                    echo $wplc_loggedin_user_name;
                } else {
                    echo 'user' . $wplc_random_user_number;
                } ?>" />
                    <input type="hidden" name="wplc_email" id="wplc_email" wplc_hide="1" value="<?php if ($wplc_loggedin_user_email != '' && $wplc_loggedin_user_email != null) {
                    echo $wplc_loggedin_user_email;
                } else {
                    echo $wplc_random_user_number . '@' . $wplc_random_user_number . '.com';
                } ?>" />
                    <?php
                }
                
                
                
                ?>
                <input type="hidden" name="wplc_domain" id="wplc_domain" value="<?php echo get_option('siteurl'); ?>" />
                <input id="wplc_start_chat_btn" type="button" value="<?php echo ($wplc_using_locale ? $wplc_sst_1 : $wplc_pro_settings['wplc_pro_sst1']); ?>" style="background-color: <?php echo $wplc_settings_fill; ?> !important; color: <?php echo $wplc_settings_font; ?> !important;"/>
            <?php
        } else {  // admin logged out
            ?>
            <div id="wp-live-chat-2-info">
            <?php echo ($wplc_using_locale ? $wplc_offline_1 : stripslashes($wplc_pro_settings['wplc_pro_offline1'])); ?>
            </div>
            <div id="wplc_message_div" >
                <input type="text" name="wplc_name" id="wplc_name" value="" placeholder="<?php _e("Name", "wplivechat"); ?>" />
                <input type="text" name="wplc_email" id="wplc_email" value=""  placeholder="<?php _e("Email", "wplivechat"); ?>"/>
                <textarea name="wplc_message" id="wplc_message" placeholder="<?php _e("Message", "wplivechat"); ?>"></textarea>
                <?php
                $wplc_settings = get_option('WPLC_SETTINGS');
        
                if(isset($wplc_settings['wplc_record_ip_address']) && $wplc_settings['wplc_record_ip_address'] == 1){
                    $offline_ip_address = $_SERVER['REMOTE_ADDR'];
                } else {
                    $offline_ip_address = "";
                }
                ?>
                <input type="hidden" name="wplc_ip_address" id="wplc_ip_address" value="<?php echo $offline_ip_address; ?>" />
                <input type="hidden" name="wplc_domain_offline" id="wplc_domain_offline" value="<?php echo get_option('siteurl'); ?>" />
                <input id="wplc_na_msg_btn" type="button" value="<?php _e("Send message", "wplivechat"); ?>" style="background-color: <?php echo $wplc_settings_fill; ?> !important; color: <?php echo $wplc_settings_font; ?> !important;"/>
            </div>
        <?php } ?>        
        </div>
        <div id="wp-live-chat-3" style="display:none;">
            <p><?php echo ($wplc_using_locale ? $wplc_sst_2 : stripslashes($wplc_pro_settings['wplc_pro_sst2'])); ?></p>
        </div>
        <div id="wp-live-chat-react" style="display:none;">
        </div>
        <div id="wp-live-chat-4" style="display:none;">
        <?php if (!empty($wplc_pro_settings['wplc_chat_logo'])) { ?>
                <div id="wplc_logo" style="">
                    <img class="wplc_logo_class" src="<?php echo urldecode(stripslashes($wplc_pro_settings['wplc_chat_logo'])); ?>" style="display:block; margin-bottom:5px; margin-left:auto; margin-right:auto;height:40px;" alt="<?php echo get_bloginfo('name'); ?>" title="<?php echo get_bloginfo('name'); ?>" />
                </div>
        <?php } ?>
            <div id="wplc_chatbox">
                <span class='wplc-admin-message'>
                    <?php echo ($wplc_using_locale ? $wplc_welcome : stripslashes($wplc_pro_settings['wplc_user_welcome_chat'])); ?>
                </span>
                <br />
                <div class='wplc-clear-float-message'></div>
            </div>
            <p style="text-align:center; font-size:11px;"><?php echo ($wplc_using_locale ? $wplc_enter : stripslashes($wplc_pro_settings['wplc_user_enter'])); ?></p>
            <p>
                <input type="text" name="wplc_chatmsg" id="wplc_chatmsg" value="" />
                <input type="hidden" name="wplc_cid" id="wplc_cid" value="" />                
                <input id="wplc_send_msg" type="button" value="<?php _e("Send", "wplivechat"); ?>" style="display:none;" />
            </p>
        </div>
    </div>
    <?php
}


function wplc_pro_output_box_ajax() {
 
    global $wplc_version;
    if ($wplc_version && ($wplc_version == "4.1.0") || floatval($wplc_version) < 4) {
        return;
    }           
    
    $wplc_is_admin_logged_in = wplc_ma_is_agent_online();
    $wplc_settings = get_option("WPLC_SETTINGS");
    $wplc_pro_settings = get_option('WPLC_PRO_SETTINGS');
    if(isset($wplc_pro_settings['wplc_theme']) ){
        $wplc_theme = $wplc_pro_settings['wplc_theme'];
        // come back here
        if($wplc_theme == 'theme-1'){
            $wplc_settings_fill = "#DB0000";
            $wplc_settings_font = "#FFFFFF";
        } else if ($wplc_theme == 'theme-2'){
            $wplc_settings_fill = "#000000";
            $wplc_settings_font = "#FFFFFF";
        } else if ($wplc_theme == 'theme-3'){
            $wplc_settings_fill = "#DB30B3";
            $wplc_settings_font = "#FFFFFF";
        } else if ($wplc_theme == 'theme-4'){
            $wplc_settings_fill = "#1A14DB";
            $wplc_settings_font = "#F7FF0F";
        } else if ($wplc_theme == 'theme-5'){
            $wplc_settings_fill = "#3DCC13";
            $wplc_settings_font = "#FF0808";
        } else if ($wplc_theme == 'theme-6'){
            if ($wplc_settings["wplc_settings_fill"]) {
                $wplc_settings_fill = "#" . $wplc_settings["wplc_settings_fill"];
            } else {
                $wplc_settings_fill = "#ec832d";
            }
            if ($wplc_settings["wplc_settings_font"]) {
                $wplc_settings_font = "#" . $wplc_settings["wplc_settings_font"];
            } else {
                $wplc_settings_font = "#FFFFFF";
            }
        } else {
            if ($wplc_settings["wplc_settings_fill"]) {
                $wplc_settings_fill = "#" . $wplc_settings["wplc_settings_fill"];
            } else {
                $wplc_settings_fill = "#ec832d";
            }
            if ($wplc_settings["wplc_settings_font"]) {
                $wplc_settings_font = "#" . $wplc_settings["wplc_settings_font"];
            } else {
                $wplc_settings_font = "#FFFFFF";
            }
        }
    } else {
        if ($wplc_settings["wplc_settings_fill"]) {
            $wplc_settings_fill = "#" . $wplc_settings["wplc_settings_fill"];
        } else {
            $wplc_settings_fill = "#ec832d";
        }
        if ($wplc_settings["wplc_settings_font"]) {
            $wplc_settings_font = "#" . $wplc_settings["wplc_settings_font"];
        } else {
            $wplc_settings_font = "#FFFFFF";
        }
    }
    
    if(isset($wplc_pro_settings['wplc_using_localization_plugin']) && $wplc_pro_settings['wplc_using_localization_plugin'] == 1){
        $wplc_using_locale = true;
    } else {
        $wplc_using_locale = false;
    }
    
    /********************* EDIT THESE STRINGS WHEN USING A LOCALIZATION PLUGIN **************************/
    /****************************************START*******************************************************/
    $wplc_fst_1 = __('Questions?', 'wplivechat');
    $wplc_fst_2 = __('Chat with us', 'wplivechat');
    $wplc_fst_3 = __('Start live chat', 'wplivechat');

    $wplc_sst_1 = __('Start Chat', 'wplivechat');
    $wplc_sst_2 = __('Connecting. Please be patient...', 'wplivechat');

    $wplc_tst = __('Reactivating your previous chat...', 'wplivechat');

    $wplc_na = __('Chat offline. Leave a message', 'wplivechat');

    $wplc_intro = __('Hello. Please input your details so that I may help you.', 'wplivechat');

    $wplc_offline_1 = __('We are currently offline. Please leave a message and we\'ll get back to you shortly.', 'wplivechat');
    $wplc_offline_2 = __('We are currently offline. Please leave a message and we\'ll get back to you shortly.', 'wplivechat');
    $wplc_offline_3 = __('Thank you for your message. We will be in contact soon.', 'wplivechat');

    $wplc_enter = __('Press ENTER to send your message', 'wplivechat');

    $wplc_welcome = __('Welcome. How may I help you?', 'wplivechat');
    
    $wplc_replacement = __('Please click \'Start Chat\' to initiate a chat with an agent', 'wplivechat');
    /****************************************************************************************************/
    /****************************************END*********************************************************/

    if ($wplc_is_admin_logged_in == 1 or $wplc_is_admin_logged_in == true) {
        $wplc_tl_msg = "<div style=\"color: " . $wplc_settings_font . " !important;\"><strong>" . ($wplc_using_locale ? $wplc_fst_1 : stripslashes($wplc_pro_settings['wplc_pro_fst1'])) . "</strong> " . ( $wplc_using_locale ? $wplc_fst_2 : stripslashes($wplc_pro_settings['wplc_pro_fst2'])) ."</div>";
    } else {
        $wplc_tl_msg = "<span class='wplc_offline'>" . ($wplc_using_locale ? $wplc_na : stripslashes($wplc_pro_settings['wplc_pro_na'])) . "</span>";
    }
    
    $ret_msg = "";
        
    $ret_msg .= "<div class=\"wp-live-chat-wraper\">";
        $ret_msg .= "<div id=\"wp-live-chat-header\" style=\"background-color: ".$wplc_settings_fill." !important; color: ".$wplc_settings_font." !important;\">";
            if ($wplc_pro_settings['wplc_chat_pic']) {
                $ret_msg .= "<div id=\"wp-live-chat-image\">";
                    $ret_msg .= "<div id=\"wp-live-chat-inner-image-div\">";
                        $ret_msg .= "<img src=\"".urldecode($wplc_pro_settings['wplc_chat_pic'])."\" width=\"40px\"/>";
                    $ret_msg .= "</div>";
                $ret_msg .= "</div>";

            }
            $ret_msg .= "<i id=\"wp-live-chat-minimize\" class=\"fa fa-minus\" style=\"display:none;\" alt=\"".__('Minimize Chat Window', 'wplivechat')."\" title=\"".__('Minimize Chat Window', 'wplivechat')."\"></i>";
            $ret_msg .= "<i id=\"wp-live-chat-close\" class=\"fa fa-times\" style=\"display:none;\" alt=\"".__('Close Chat Window', 'wplivechat')."\" title=\"".__('Close Chat Window', 'wplivechat')."\"></i>";

            $ret_msg .= "<div id=\"wp-live-chat-1\">";
                $ret_msg .= "<div style=\"display:block;\">";
                    $ret_msg .= $wplc_tl_msg;
                $ret_msg .= "</div>";
            $ret_msg .= "</div>";
        $ret_msg .= "</div>";
        $ret_msg .= "<div id=\"wp-live-chat-2\" style=\"display:none;\">";
            
            if ($wplc_is_admin_logged_in == 1 or $wplc_is_admin_logged_in == true) {  // admin is logged in
                
                $ret_msg .= "<div id=\"wp-live-chat-2-info\">";
                $ret_msg .= ($wplc_using_locale ? $wplc_intro : stripslashes($wplc_pro_settings['wplc_pro_intro'])); 
                $ret_msg .= "</div>";

                

                if (isset($wplc_settings['wplc_loggedin_user_info']) && $wplc_settings['wplc_loggedin_user_info'] == 1) {
                    $wplc_use_loggedin_user_details = 1;
                } else {
                    $wplc_use_loggedin_user_details = 0;
                }
                $wplc_loggedin_user_name = '';
                $wplc_loggedin_user_email = '';
                if ($wplc_use_loggedin_user_details == 1) {
                    global $current_user;

                    if ($current_user->data != null) {
                        //Logged in. Get name and email
                        $wplc_loggedin_user_name = $current_user->user_nicename;
                        $wplc_loggedin_user_email = $current_user->user_email;
                    }
                } else {
                    $wplc_loggedin_user_name = '';
                    $wplc_loggedin_user_email = '';
                }

                if (isset($wplc_settings['wplc_require_user_info']) && $wplc_settings['wplc_require_user_info'] == 1) {
                    $wplc_ask_user_details = 1;
                } else {
                    $wplc_ask_user_details = 0;
                }

                if ($wplc_ask_user_details == 1) {
                    //Ask the user to enter name and email
                    
                    $ret_msg .= "<input type=\"text\" name=\"wplc_name\" id=\"wplc_name\" value=\"".$wplc_loggedin_user_name."\" placeholder=\"".__("Nombres", "wplivechat")."\" />";
                    $ret_msg .= "<input type=\"text\" name=\"wplc_lastname\" id=\"wplc_lastname\" value=\"".$wplc_loggedin_user_name."\" placeholder=\"".__("Apellidos", "wplivechat")."\" />";
                    $ret_msg .= "<input type=\"text\" name=\"wplc_email\" id=\"wplc_email\" wplc_hide=\"0\" value=\"".$wplc_loggedin_user_email."\" placeholder=\"".__("Email", "wplivechat")."\"  />";
                    //$ret_msg .= "<input required type=\"checkbox\" name=\"wplc_condiciones\" id=\"wplc_condiciones\" />";
                    
                } else {
                    //Dont ask the user
                    $ret_msg .= '<div style="padding: 7px; text-align: center;">';
                    if (isset($wplc_settings['wplc_user_alternative_text'])) {
                        $ret_msg .= ($wplc_using_locale ? $wplc_replacement : stripslashes($wplc_settings['wplc_user_alternative_text']));
                    }
                    $ret_msg .= '</div>';
                    $wplc_random_user_number = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
                    if ($wplc_loggedin_user_name != '') { $wplc_loggedin_user_name = $wplc_loggedin_user_name; } else { $wplc_loggedin_user_name = 'user' . $wplc_random_user_number; }
                    if ($wplc_loggedin_user_email != '' && $wplc_loggedin_user_email != null) { } else { $wplc_loggedin_user_email = $wplc_random_user_number . '@' . $wplc_random_user_number . '.com'; } 

                    $ret_msg .= "<input type=\"hidden\" name=\"wplc_name\" id=\"wplc_name\" value=\"".wplc_loggedin_user_name."\" />";
                    $ret_msg .= "<input type=\"hidden\" name=\"wplc_email\" id=\"wplc_email\" wplc_hide=\"1\" value=\"".$wplc_loggedin_user_email."\" />";
                }
                
                
                
                
                $ret_msg .= "<input type=\"hidden\" name=\"wplc_domain\" id=\"wplc_domain\" value=\"".get_option('siteurl')."\" />";
                $ret_msg .= "<input id=\"wplc_start_chat_btn\" type=\"button\" value=\"".($wplc_using_locale ? $wplc_sst_1 : $wplc_pro_settings['wplc_pro_sst1'])."\" style=\"background-color: ".$wplc_settings_fill." !important; color: ".$wplc_settings_font." !important;\" />";
        } else {  // admin logged out
            
            $ret_msg .= "<div id=\"wp-live-chat-2-info\">";
            $ret_msg .= ($wplc_using_locale ? $wplc_offline_1 : stripslashes($wplc_pro_settings['wplc_pro_offline1']));
            $ret_msg .= "</div>";
            $ret_msg .= "<div id=\"wplc_message_div\">";
            $ret_msg .= "<input type=\"text\" name=\"wplc_name\" id=\"wplc_name\" value=\"\" placeholder=\"".__("Name", "wplivechat")."\" />";
            $ret_msg .= "<input type=\"text\" name=\"wplc_email\" id=\"wplc_email\" value=\"\"  placeholder=\"".__("Email", "wplivechat")."\" />";
            $ret_msg .= "<textarea name=\"wplc_message\" id=\"wplc_message\" placeholder=\"".__("Message", "wplivechat")."\"></textarea>";
    
            if(isset($wplc_settings['wplc_record_ip_address']) && $wplc_settings['wplc_record_ip_address'] == 1){
                $offline_ip_address = $_SERVER['REMOTE_ADDR'];
            } else {
                $offline_ip_address = "";
            }
            
            $ret_msg .= "<input type=\"hidden\" name=\"wplc_ip_address\" id=\"wplc_ip_address\" value=\"".$offline_ip_address."\" />";
            $ret_msg .= "<input type=\"hidden\" name=\"wplc_domain_offline\" id=\"wplc_domain_offline\" value=\"".get_option('siteurl')."\" />";
            $ret_msg .= "<input id=\"wplc_na_msg_btn\" type=\"button\" value=\"".__("Enviar mensaje", "wplivechat")."\" style=\"background-color: ".$wplc_settings_fill." !important; color: ".$wplc_settings_font." !important;\"/>";
            $ret_msg .= "</div>";
        }
        $ret_msg .= "</div>";
        $ret_msg .= "<div id=\"wp-live-chat-3\" style=\"display:none;\">";
        $ret_msg .= ($wplc_using_locale ? $wplc_sst_2 : stripslashes($wplc_pro_settings['wplc_pro_sst2']))."</p>";
        $ret_msg .= "</div>";
        $ret_msg .= "<div id=\"wp-live-chat-react\" style=\"display:none;\">";
        $ret_msg .= "</div>";
        $ret_msg .= "<div id=\"wp-live-chat-4\" style=\"display:none;\">";
        if (!empty($wplc_pro_settings['wplc_chat_logo'])) {
            $ret_msg .= "<div id=\"wplc_logo\" style=\"\">";
            $ret_msg .= "<img class=\"wplc_logo_class\" src=\"".urldecode(stripslashes($wplc_pro_settings['wplc_chat_logo']))."\" style=\"display:block; margin-bottom:5px; margin-left:auto; margin-right:auto;height:40px;\" alt=\"".get_bloginfo('name')."\" title=\"".get_bloginfo('name')."\" />";
            $ret_msg .= "</div>";
        }
        $ret_msg .= "<div id=\"wplc_chatbox\">";
        $ret_msg .= "<span class='wplc-admin-message'>";
        $ret_msg .= ($wplc_using_locale ? $wplc_welcome : stripslashes($wplc_pro_settings['wplc_user_welcome_chat']));
        $ret_msg .= "</span>";
        $ret_msg .= "<br />";
        $ret_msg .= "<div class='wplc-clear-float-message'></div>";
        $ret_msg .= "</div>";
        $ret_msg .= "<p style=\"text-align:center; font-size:11px;\">".($wplc_using_locale ? $wplc_enter : stripslashes($wplc_pro_settings['wplc_user_enter']))."</p>";
        $ret_msg .= "<p>";
        $ret_msg .= "<input type=\"text\" name=\"wplc_chatmsg\" id=\"wplc_chatmsg\" value=\"\" />";
        $ret_msg .= "<input type=\"hidden\" name=\"wplc_cid\" id=\"wplc_cid\" value=\"\" />";        
        $ret_msg .= "<input id=\"wplc_send_msg\" type=\"button\" value=\"".__("Send", "wplivechat")."\" style=\"display:none;\" />";
        $ret_msg .= "</p>";
        $ret_msg .= "</div>";
        $ret_msg .= "</div>";
    return $ret_msg;
    
}


function wplc_head_pro() {
    global $wpdb;

    if (isset($_POST['wplc-delete-chat-history'])) {
        wplc_delete_history();
    }

    if (isset($_POST['wplc_save_settings'])) {
        $wplc_data = array();
        if (isset($_POST['wplc_settings_align'])) {
            $wplc_data['wplc_settings_align'] = esc_attr($_POST['wplc_settings_align']);
        }
        if (isset($_POST['wplc_settings_fill'])) {
            $wplc_data['wplc_settings_fill'] = esc_attr($_POST['wplc_settings_fill']);
        }
        if (isset($_POST['wplc_settings_font'])) {
            $wplc_data['wplc_settings_font'] = esc_attr($_POST['wplc_settings_font']);
        }
        if (isset($_POST['wplc_settings_enabled'])) {
            $wplc_data['wplc_settings_enabled'] = esc_attr($_POST['wplc_settings_enabled']);
        }
        if (isset($_POST['wplc_auto_pop_up'])) {
            $wplc_data['wplc_auto_pop_up'] = esc_attr($_POST['wplc_auto_pop_up']);
        }

        if (isset($_POST['wplc_require_user_info'])) {
            $wplc_data['wplc_require_user_info'] = esc_attr($_POST['wplc_require_user_info']);
        }
        if (isset($_POST['wplc_loggedin_user_info'])) {
            $wplc_data['wplc_loggedin_user_info'] = esc_attr($_POST['wplc_loggedin_user_info']);
        }
        if (isset($_POST['wplc_user_alternative_text']) && $_POST['wplc_user_alternative_text'] != '') {
            $wplc_data['wplc_user_alternative_text'] = esc_attr($_POST['wplc_user_alternative_text']);
        } else {
            $wplc_data['wplc_user_alternative_text'] = __("Please click 'Start Chat' to initiate a chat with an agent", "wplivechat");
        }
        if (isset($_POST['wplc_enabled_on_mobile'])) {
            $wplc_data['wplc_enabled_on_mobile'] = esc_attr($_POST['wplc_enabled_on_mobile']);
        }
        if (isset($_POST['wplc_display_name'])) {
            $wplc_data['wplc_display_name'] = esc_attr($_POST['wplc_display_name']);
        }
        if (isset($_POST['wplc_display_to_loggedin_only'])) {
            $wplc_data['wplc_display_to_loggedin_only'] = esc_attr($_POST['wplc_display_to_loggedin_only']);
        }
        if (isset($_POST['wplc_hide_when_offline'])) {
            $wplc_data['wplc_hide_when_offline'] = esc_attr($_POST['wplc_hide_when_offline']);
        }
                
        if(isset($_POST['wplc_record_ip_address'])){
            $wplc_data['wplc_record_ip_address'] = esc_attr($_POST['wplc_record_ip_address']);
        }

        if(isset($_POST['wplc_enable_msg_sound'])){
            $wplc_data['wplc_enable_msg_sound'] = esc_attr($_POST['wplc_enable_msg_sound']);
        } else {
            $wplc_data['wplc_enable_msg_sound'] = "0";
        }
        update_option('WPLC_SETTINGS', $wplc_data);

        $wplc_pro_data = array();
        if (isset($_POST['wplc_pro_name'])) {
            $wplc_pro_data['wplc_chat_name'] = esc_attr($_POST['wplc_pro_name']);
        }
        if (isset($_POST['wplc_upload_pic'])) {
            $wplc_pro_data['wplc_chat_pic'] = esc_attr(urlencode(base64_decode($_POST['wplc_upload_pic'])));
        }
        if (isset($_POST['wplc_upload_logo'])) {
            $wplc_pro_data['wplc_chat_logo'] = esc_attr(urlencode(base64_decode($_POST['wplc_upload_logo'])));
        }
        if (isset($_POST['wplc_pro_delay'])) {
            $wplc_pro_data['wplc_chat_delay'] = esc_attr($_POST['wplc_pro_delay']);
        }
        if (isset($_POST['wplc_pro_chat_notification'])) {
            $wplc_pro_data['wplc_pro_chat_notification'] = esc_attr($_POST['wplc_pro_chat_notification']);
        }

        if (isset($_POST['wplc_pro_na'])) {
            $wplc_pro_data['wplc_pro_na'] = esc_attr($_POST['wplc_pro_na']);
        }
        if (isset($_POST['wplc_pro_chat_email_address'])) {
            $wplc_pro_data['wplc_pro_chat_email_address'] = esc_attr($_POST['wplc_pro_chat_email_address']);
        }
        if (isset($_POST['wplc_pro_fst1'])) {
            $wplc_pro_data['wplc_pro_fst1'] = esc_attr($_POST['wplc_pro_fst1']);
        }
        if (isset($_POST['wplc_pro_fst2'])) {
            $wplc_pro_data['wplc_pro_fst2'] = esc_attr($_POST['wplc_pro_fst2']);
        }
        if (isset($_POST['wplc_pro_fst3'])) {
            $wplc_pro_data['wplc_pro_fst3'] = esc_attr($_POST['wplc_pro_fst3']);
        }
        if (isset($_POST['wplc_pro_sst1'])) {
            $wplc_pro_data['wplc_pro_sst1'] = esc_attr($_POST['wplc_pro_sst1']);
        }
        if (isset($_POST['wplc_pro_sst2'])) {
            $wplc_pro_data['wplc_pro_sst2'] = esc_attr($_POST['wplc_pro_sst2']);
        }
        if (isset($_POST['wplc_pro_tst1'])) {
            $wplc_pro_data['wplc_pro_tst1'] = esc_attr($_POST['wplc_pro_tst1']);
        }

        if (isset($_POST['wplc_pro_offline1'])) {
            $wplc_pro_data['wplc_pro_offline1'] = esc_attr($_POST['wplc_pro_offline1']);
        }
        if (isset($_POST['wplc_pro_offline2'])) {
            $wplc_pro_data['wplc_pro_offline2'] = esc_attr($_POST['wplc_pro_offline2']);
        }
        if (isset($_POST['wplc_pro_offline3'])) {
            $wplc_pro_data['wplc_pro_offline3'] = esc_attr($_POST['wplc_pro_offline3']);
        }

        if (isset($_POST['wplc_pro_intro'])) {
            $wplc_pro_data['wplc_pro_intro'] = esc_attr($_POST['wplc_pro_intro']);
        }

        if (isset($_POST['wplc_user_enter'])) {
            $wplc_pro_data['wplc_user_enter'] = esc_attr($_POST['wplc_user_enter']);
        }
        if (isset($_POST['wplc_user_welcome_chat'])) {
            $wplc_pro_data['wplc_user_welcome_chat'] = esc_attr($_POST['wplc_user_welcome_chat']);
        }

        if (isset($_POST['wplc_include_on_pages'])) {
            $wplc_pro_data['wplc_include_on_pages'] = esc_attr($_POST['wplc_include_on_pages']);
        }
        if (isset($_POST['wplc_exclude_from_pages'])) {
            $wplc_pro_data['wplc_exclude_from_pages'] = esc_attr($_POST['wplc_exclude_from_pages']);
        }
        
        if(isset($_POST['wplc_animation'])){
            $wplc_pro_data['wplc_animation'] = esc_attr($_POST['wplc_animation']);
        }
        
        if(isset($_POST['wplc_theme'])){
            $wplc_pro_data['wplc_theme'] = esc_attr($_POST['wplc_theme']);
        }

        if(isset($_POST['wplc_auto_online'])){
            $wplc_pro_data['wplc_auto_online'] = esc_attr($_POST['wplc_auto_online']);
        }
        
        if(isset($_POST['wplc_make_agent'])){
            $wplc_pro_data['wplc_make_agent'] = esc_attr($_POST['wplc_make_agent']);
        }
        
        if(isset($_POST['wplc_ban_users_ip'])){
            $wplc_banned_ip_addresses = explode('<br />', nl2br($_POST['wplc_ban_users_ip']));
            foreach($wplc_banned_ip_addresses as $key => $value) {
                $data[$key] = trim($value);
            }
            $wplc_banned_ip_addresses = maybe_serialize($data);

            update_option('WPLC_BANNED_IP_ADDRESSES', $wplc_banned_ip_addresses);
        }

        update_option('WPLC_SETTINGS', $wplc_data);
        if (isset($_POST['wplc_hide_chat'])) {
            update_option("WPLC_HIDE_CHAT", $_POST['wplc_hide_chat']);
        }
        
        if(isset($_POST['wplc_using_localization_plugin'])){
            $wplc_pro_data['wplc_using_localization_plugin'] = esc_attr($_POST['wplc_using_localization_plugin']);
        }
        
        if(isset($_POST['wplc_hide_chat'])){
            $wplc_hide_chat = $_POST['wplc_hide_chat'];
        } else {
            $wplc_hide_chat = "";
        }
        update_option('wplc_mail_type', $_POST['wplc_mail_type']);
        update_option('wplc_mail_host', $_POST['wplc_mail_host']);
        update_option('wplc_mail_port', $_POST['wplc_mail_port']);
        update_option('wplc_mail_username', $_POST['wplc_mail_username']);
        update_option('wplc_mail_password', $_POST['wplc_mail_password']);
        update_option("WPLC_HIDE_CHAT", $wplc_hide_chat);

        if(function_exists('wplc_ce_save_settings')){
            wplc_ce_save_settings();
        }                
                
        
        if(isset($_POST['wplc_api_key'])){
            update_option('wplc_api_key', sanitize_text_field($_POST['wplc_api_key']));
            $url = 'http://ccplugins.co/wplc-api/v2/functions.php';
            $response = wp_remote_post( $url, array(
                    'method' => 'POST',
                    'body' => array( 
                        'action' => 'log_api_key',
                        'domain' => get_option('siteurl'),
                        'api_key' => sanitize_text_field($_POST['wplc_api_key'])
                    )            
                )
            );
        }
        
        if(get_option('wplc_api_key') == ''){
            $wplc_pro_data['wplc_enable_encryption'] = 0;
        } else {            
            if(isset($_POST['wplc_enable_encryption'])){
                $wplc_pro_data['wplc_enable_encryption'] = 1;
            } else {
                $wplc_pro_data['wplc_enable_encryption'] = 0;
            }
        }
        
        update_option('WPLC_PRO_SETTINGS', $wplc_pro_data);
        
        echo "<div class='updated'>";
        _e("Your settings have been saved.", "wplivechat");
        echo "</div>";
    }
}

function wplc_pro_return_delay() {
    $wplc_delay = get_option("WPLC_PRO_SETTINGS");
    return $wplc_delay['wplc_chat_delay'];
}

function wplc_pro_admin_menu_layout_display() {

    if (!isset($_GET['action'])) {
        $wplc_current_user_id = get_current_user_id();
        global $wplc_basic_plugin_url;
        ?>

        <style>
            #wplc-support-tabs a.wplc-support-link {
            background: url('<?php echo $wplc_basic_plugin_url; ?>/images/support.png');
            right: 0px;
            top: 250px;
            height: 108px;
            width: 45px;
            margin: 0;
            padding: 0;
            position: fixed;
            z-index: 9999;
            display:block;
        }
        </style>
            <div id="wplc-support-tabs">
                <a class="wplc-support-link wplc-rotate" href="?page=wplivechat-menu-support-page"></a>
            </div>
        <div class='wplc_page_title'>

            <h1><?php _e("Chat sessions", "wplivechat"); ?></h1>

            <p><?php _e("Please note: This window must be open in order to receive new chat notifications.", "wplivechat"); ?></p>
            <?php
            $is_agent = get_user_meta($wplc_current_user_id, 'wplc_ma_agent', true);            
            if(!$is_agent){
                $warning = "<p style='color: red;'><b>".__('You are not a chat agent. Please make yourself a chat agent before trying to chat to visitors', 'wplivechat')."</b></p>";
                echo $warning;
            }
            ?>
        </div>    
        <?php wplc_pro_version_check(); ?>        
        <?php
            //if(function_exists("wplc_ma_register")){
                $agent_id = wplc_ma_check_if_user_is_agent();
            //} else { 
                //$agent_id = true;
            //} 
        ?>      

        <div id="wplc_sound"></div> 
        <?php 
        $wplc_pro_settings = get_option("WPLC_PRO_SETTINGS");
        if(isset($wplc_pro_settings['wplc_auto_online'])  && $wplc_pro_settings['wplc_auto_online'] == 1 ){
            ?>
        <div style="padding: 10px 0; display: block; margin: 0 auto; text-align: center;"><input type="checkbox" class="wplc_switchery" name="wplc_agent_status" id="wplc_agent_status" <?php if(get_user_meta($wplc_current_user_id, "wplc_chat_agent_online", true)){ echo 'checked'; } ?> /><div id="wplc_agent_status_text" style="display: inline-block; padding-left: 10px;"></div></div>
        <?php
        }
        ?>   
        <div id="wplc_admin_chat_holder">
            <div id='wplc_admin_chat_info_new'>
                <div class='wplc_chat_vis_count_box'>
                    <span class='wplc_vis_online'>0</span>
                    <span style='text-transform:uppercase;'>
                        <?php _e("Visitors online","wplivechat"); ?>
                    </span>
                    <hr />
                    <p class='wplc-agent-info' id='wplc-agent-info'>
                        <span class='wplc_agents_online'><?php echo wplc_ma_total_agents_online(); ?></span>
                        <a href='?page=wplivechat-menu-settings#tabs-5' target="_BLANK"><?php _e("Agent(s) online","wplivechat"); ?></a>
                    </p>
                    
                </div>
                
            </div>
            
            <div id="wplc_admin_chat_area_new">
                <div style="display:block;padding:10px;">
                    <ul class='wplc_chat_ul_header'>
                        <li><span class='wplc_header_vh wplc_headerspan_v'><?php _e("Visitor","wplivechat"); ?></span></li>
                        <li><span class='wplc_header_vh wplc_headerspan_t'><?php _e("Time","wplivechat"); ?></span></li>
                        <li><span class='wplc_header_vh wplc_headerspan_nr'><?php _e("Type","wplivechat"); ?></span></li>
                        <li><span class='wplc_header_vh wplc_headerspan_d'><?php _e("Data","wplivechat"); ?></span></li>
                        <li><span class='wplc_header_vh wplc_headerspan_s'><?php _e("Status","wplivechat"); ?></span></li>
                        <li><span class='wplc_header_vh wplc_headerspan_a'><?php _e("Action","wplivechat"); ?></span></li>
                    </ul>
                    <ul id='wplc_chat_ul'>


                    </ul>

                </div>

            </div>
            
        </div>

      
        <?php
    } else {

        if (isset($_GET['aid'])) {
            if(!get_option('wplc_use_external_server')){
                wplc_ma_update_agent_id(sanitize_text_field($_GET['cid']), sanitize_text_field($_GET['aid']));
            }
            
            if(function_exists('wplc_ce_activate')){
                if(function_exists('wplc_ce_record_chat_agent')){
                    wplc_ce_record_chat_agent(sanitize_text_field($_GET['cid']), sanitize_text_field($_GET['aid']));
                }
            }            
            //}
        }
        if ($_GET['action'] == 'ac') {
            if(get_option('wplc_use_external_server')){
                /* Come here */
                wplc_change_chat_status_ex(sanitize_text_field($_GET['cid']), 3);
                echo wplc_pro_draw_chat_area_ex(sanitize_text_field($_GET['cid']));     
                if(isset($_GET['aid']) && get_option('wplc_use_external_server')){               
                    echo wplc_ma_update_agent_id_ex(sanitize_text_field($_GET['cid']), sanitize_text_field($_GET['aid']));
                }
            } else {
                wplc_change_chat_status(sanitize_text_field($_GET['cid']), 3);
                wplc_pro_draw_chat_area(sanitize_text_field($_GET['cid']));
            }            
        } else if ($_GET['action'] == 'history' && function_exists("wplc_register_pro_version")) {
            wplc_admin_pro_view_chat_history(sanitize_text_field($_GET['cid']));
        } else if ($_GET['action'] == 'rc' && function_exists("wplc_register_pro_version")) {
            wplc_admin_pro_request_chat(sanitize_text_field($_GET['cid']));
        } else if ($_GET['action'] == 'download_history' && function_exists('wplc_admin_pro_download_history')){
            wplc_admin_pro_download_history(sanitize_text_field($_GET['type']), sanitize_text_field($_GET['cid']));
        }
    }
}

function wplc_admin_pro_request_chat($cid) {
    wplc_change_chat_status($cid, 6); // 6 = request chat
    wplc_pro_draw_chat_area($cid);
}

function wplc_pro_draw_chat_area($cid) {



    global $wpdb;
    global $wplc_tblname_chats;
    $results = $wpdb->get_results(
            "
        SELECT *
        FROM $wplc_tblname_chats
        WHERE `id` = '$cid'
        LIMIT 1
        "
    );

    foreach ($results as $result) {
        $status = "";
        if ($result->status == 1 || $result->status == 8) {
            $status = "Previous";
        } else if ($result->status == 3) {
            $status = "Active";
        } else if ($result->status == 6) {
            $status = "Awaiting";
        }
        ?>
        <style>

            .wplc-clear-float-message{
                clear: both;
            }

        </style>
        <?php
        $user_data = maybe_unserialize($result->ip);
        if (is_array($user_data)) {
            $user_ip = $user_data['ip'];
            $browser = wplc_return_browser_string($user_data['user_agent']);
            $browser_image = wplc_return_browser_image($browser, "16");
        } else {
            $user_ip = $user_data;
            $browser = __("Unknown", "wplivechat");
            $browser_image = wplc_return_browser_image($browser, "16");
        }
        
        if($user_ip == ""){
            $user_ip = __('IP Address not recorded', 'wplivechat');
        } else {
            $user_ip = "<a href='http://www.ip-adress.com/ip_tracer/" . $user_ip . "' title='".__('Whois for' ,'wplivechat')." ".$user_ip."'>".$user_ip."</a>";
        } 


        global $wplc_basic_plugin_url;

        echo "<h2>$status Chat with " . $result->name . "</h2>";
        echo "<style>#adminmenuwrap { display:none; } #adminmenuback { display:none; } #wpadminbar { display:none; } #wpfooter { display:none; } .update-nag { display:none; }</style>";

        echo "<div class=\"end_chat_div\"><a href=\"javascript:void(0);\" class=\"wplc_admin_close_chat button\" id=\"wplc_admin_close_chat\">" . __("End chat", "wplivechat") . "</a></div>";

        echo "<div id='admin_chat_box'>";

        if ($result->status == 6) {
            echo "<strong>" . __("Attempting to open the chat window... Please be patient.", "wplivechat") . "</strong>";
            return;
        }

        if ($result->status != 6) {
            echo "<div class='admin_chat_box'>";
            echo "  <div class='admin_chat_box_inner' id='admin_chat_box_area_" . $result->id . "'>" . wplc_return_chat_messages($cid) . "</div>";

            if ($result->status == 3) {
                echo "  <div class='admin_chat_box_inner_bottom'>" . wplc_return_chat_response_box($cid) . "</div>";
            }
            echo "</div>";
            echo "<div class='admin_visitor_info'>";
            echo "  <div style='float:left; width:100px;'><img src=\"//www.gravatar.com/avatar/" . md5($result->email) . "\" class=\"admin_chat_img\" /></div>";
            echo "  <div style='float:left;'>";

            echo "      <div class='admin_visitor_info_box1'>";
            echo "          <span class='admin_chat_name'>" . $result->name . "</span>";
            echo "          <span class='admin_chat_email'>" . $result->email . "</span>";
            echo "      </div>";
            echo "  </div>";

            echo "<div class='admin_visitor_advanced_info'>";
            echo "      <strong>" . __("Site Info", "wplivechat") . "</strong>";
            echo "      <hr />";
            echo "      <span class='part1'>" . __("Chat initiated on:", "wplivechat") . "</span> <span class='part2'>" . $result->url . "</span>";
            echo "</div>";

            echo "<div class='admin_visitor_advanced_info'>";
            echo "      <strong>" . __("Advanced Info", "wplivechat") . "</strong>";
            echo "      <hr />";
            echo "      <span class='part1'>" . __("Browser:", "wplivechat") . "</span><span class='part2'> $browser <img src='" . $wplc_basic_plugin_url . "/images/$browser_image' alt='$browser' title='$browser' /><br />";
            echo "      <span class='part1'>" . __("IP Address:", "wplivechat") . "</span><span class='part2'> ".$user_ip;
            echo "</div>";

            echo "  <div id=\"wplc_sound_update\"></div>";
            echo "</div>";
        }
        if ($result->status == 3) {
            echo "<div class='admin_chat_quick_controls'>";
            echo "  <p style=\"text-align:left; font-size:11px;\">Press ENTER to send your message</p>";
            echo wplc_return_macros();
            echo "  </div>";
            echo "</div>";
        }


        echo "</div>";
    }
}
function wplc_return_pro_admin_chat_javascript($cid) {
    $ajax_nonce = wp_create_nonce("wplc");
    if (function_exists("wplc_pro_get_admin_picture")) {
        $src = wplc_pro_get_admin_picture();
        if ($src) {
            $image = "<img src=" . $src . " width='20px' id='wp-live-chat-2-img'/>";
        } else {
            $image = "";
        }
    }
    $wplc_settings = get_option("WPLC_SETTINGS");

    if (isset($wplc_settings['wplc_display_name']) && $wplc_settings['wplc_display_name'] == 1) {
        $display_name = 'display';
    } else {
        $display_name = 'hide';
    }
    if (isset($wplc_settings['wplc_enable_msg_sound']) && intval($wplc_settings['wplc_enable_msg_sound']) == 1) {
        $enable_ding = '1';
    } else {
        $enable_ding = '0';
    }
    
    if(get_option('wplc_use_external_server')){
        $wplc_ajax_url = 'http://ccplugins.co/wplc-api/v2/ajax-pro.php';
    } else {
        $wplc_ajax_url = admin_url('admin-ajax.php');
    }
    ?>
    
    <script type="text/javascript">
        var wplc_ajaxurl = '<?php echo $wplc_ajax_url; ?>';
        var chat_status = 3;
        var cid = <?php echo $cid; ?>;
        var aid = <?php echo sanitize_text_field($_GET['aid']) ?>;
        var data = {
            action: 'wplc_admin_long_poll_chat',
            security: '<?php echo $ajax_nonce; ?>',
            cid: cid,
            chat_status: chat_status,
            aid: aid,
            api: '<?php echo get_option('wplc_api_key'); ?>',
            domain: '<?php echo get_option('siteurl'); ?>'
        };
        var wplc_run = true;
        var wplc_had_error = false;

        var wplc_display_name = '<?php echo $display_name; ?>';
        var wplc_enable_ding = '<?php echo $enable_ding; ?>';

        function wplc_call_to_server_admin_chat(data) {
            jQuery.ajax({
                url: wplc_ajaxurl,
                data: data,
                type: "POST",
                success: function (response) {
                    if (response) {
                        response = JSON.parse(jQuery.trim(response));
                        if (response['action'] === "wplc_ma_agant_already_answered") {
                            jQuery('#wplc_admin_chat').empty().append("<h2><?php _e("This chat has already been answered. Please close the chat window", "wplivechat") ?></h2>");
                            wplc_run = false;
                        }
                        if (response['action'] === "wplc_update_chat_status") {
                            data['chat_status'] = response['chat_status'];
                            wplc_display_chat_status_update(response['chat_status'], cid);
                        }
                        if (response['action'] === "wplc_new_chat_message") {
                            current_len = jQuery("#admin_chat_box_area_" + cid).html().length;
                            jQuery("#admin_chat_box_area_" + cid).append(response['chat_message']);
                            new_length = jQuery("#admin_chat_box_area_" + cid).html().length;
                            if (typeof wplc_enable_ding !== 'undefined' && wplc_enable_ding === "1") {
                                document.getElementById("wplc_sound_update").innerHTML = "<embed src='<?php echo plugins_url('/ding.mp3', __FILE__); ?>' hidden=true autostart=true loop=false>";
                            }

                            var height = jQuery('#admin_chat_box_area_' + cid)[0].scrollHeight;
                            jQuery('#admin_chat_box_area_' + cid).scrollTop(height);
                        }
                        if (response['action'] === "wplc_user_open_chat") {
                            data['action_2'] = "";
                            <?php $url = admin_url('admin.php?page=wplivechat-menu&action=ac&cid=' . $cid . '&aid=' . $_GET['aid']); ?>
                            window.location.replace('<?php echo $url; ?>');
                        }

                    }
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.status == 404) {
                        if (window.console) { console.log('Requested page not found. [404]'); }
                        wplc_run = false;
                    } else if (jqXHR.status == 500) {
                        if (window.console) { console.log('Internal Server Error [500].'); }
                        wplc_run = true;
                        wplc_had_error = true;
                        setTimeout(function () {
                            wplc_call_to_server_admin_chat(data);
                        }, 10000);
                    } else if (exception === 'parsererror') {
                        if (window.console) { console.log('Requested JSON parse failed.'); }
                        wplc_run = false;
                    } else if (exception === 'abort') {
                        if (window.console) { console.log('Ajax request aborted.'); }
                        wplc_run = false;
                    } else {
                        if (window.console) { console.log('Uncaught Error.\n' + jqXHR.responseText); }
                        wplc_run = true;
                        wplc_had_error = true;
                        setTimeout(function () {
                            wplc_call_to_server_admin_chat(data);
                        }, 10000);
                    }
                },
                complete: function (response) {
                    //console.log(wplc_run);
                    if (wplc_run && !wplc_had_error) {
                        setTimeout(function () {
                            wplc_call_to_server_admin_chat(data);
                        }, 1500);
                    }
                },
                timeout: 120000
            });
        }
        ;

        function wplc_display_chat_status_update(new_chat_status, cid) {
            if (new_chat_status === "0") {
            } else {
                if (chat_status !== new_chat_status) {
                    previous_chat_status = chat_status;
                    //console.log("previous chat status: "+previous_chat_status);
                    chat_status = new_chat_status;
                    //("chat status: "+chat_status);

                    if ((previous_chat_status === "2" && chat_status === "3") || (previous_chat_status === "5" && chat_status === "3")) {
                        jQuery("#admin_chat_box_area_" + cid).append("<em><?php _e("User has opened the chat window", "wplivechat"); ?></em><br />");
                        var height = jQuery('#admin_chat_box_area_' + cid)[0].scrollHeight;
                        jQuery('#admin_chat_box_area_' + cid).scrollTop(height);

                    } else if (chat_status == "10" && previous_chat_status == "3") {
                        jQuery("#admin_chat_box_area_" + cid).append("<em><?php _e("User has minimized the chat window", "wplivechat"); ?></em><br />");
                        var height = jQuery('#admin_chat_box_area_' + cid)[0].scrollHeight;
                        jQuery('#admin_chat_box_area_' + cid).scrollTop(height);
                    }
                    else if (chat_status === "3" && previous_chat_status === "10") {
                        jQuery("#admin_chat_box_area_" + cid).append("<em><?php _e("User has maximized the chat window", "wplivechat"); ?></em><br />");
                        var height = jQuery('#admin_chat_box_area_' + cid)[0].scrollHeight;
                        jQuery('#admin_chat_box_area_' + cid).scrollTop(height);
                    }
                    else if (chat_status === "1" || chat_status === "8") {
                        jQuery("#admin_chat_box_area_" + cid).append("<em><?php _e("User has closed and ended the chat", "wplivechat"); ?></em><br />");
                        var height = jQuery('#admin_chat_box_area_' + cid)[0].scrollHeight;
                        jQuery('#admin_chat_box_area_' + cid).scrollTop(height);
                        document.getElementById('wplc_admin_chatmsg').disabled = true;
                    }
                }
            }
        }

        jQuery(document).ready(function () {
            var wplc_image = "<?php echo $image ?>";

            var wplc_ajaxurl = '<?php echo $wplc_ajax_url; ?>';



            jQuery("#wplc_admin_chatmsg").focus();


            jQuery(".wplc_macros_select").change(function () {

                var wplc_id = this.value;
                if (parseInt(wplc_id) === 0) {
                    return;
                }
                var data = {
                    action: 'wplc_macro',
                    dataType: "json",
                    postid: wplc_id,
                    security: '<?php echo $ajax_nonce; ?>'
                };
                jQuery.post(wplc_ajaxurl, data, function (response) {
                    var post_content = jQuery.parseJSON(response);
                    jQuery("#wplc_admin_chatmsg").val(jQuery("#wplc_admin_chatmsg").val() + post_content);

                });

            });

    <?php if ($_GET['action'] == 'rc') { ?>
                //this is to initiate a chat with a user from admin side
                data['action_2'] = "wplc_long_poll_check_user_opened_chat";
                wplc_call_to_server_admin_chat(data);

    <?php } else { ?>

                wplc_call_to_server_admin_chat(data);

                if (jQuery('#wplc_admin_cid').length) {
                    var wplc_cid = jQuery("#wplc_admin_cid").val();
                    var height = jQuery('#admin_chat_box_area_' + wplc_cid)[0].scrollHeight;
                    jQuery('#admin_chat_box_area_' + wplc_cid).scrollTop(height);
                }

                jQuery(".wplc_admin_accept").on("click", function () {
                    wplc_title_alerts3 = setTimeout(function () {
                        document.title = "WP Live Chat Support";
                    }, 2500);
                    var cid = jQuery(this).attr("cid");

                    var data = {
                        action: 'wplc_admin_accept_chat',
                        cid: cid,
                        domain: '<?php echo get_option('siteurl'); ?>',
                        api: '<?php echo get_option('wplc_api_key'); ?>',
                        security: '<?php echo $ajax_nonce; ?>'
                    };
                    jQuery.post(wplc_ajaxurl, data, function (response) {
                        wplc_refresh_chat_boxes[cid] = setInterval(function () {
                            wpcl_admin_update_chat_box(cid);
                        }, 3000);
                        jQuery("#admin_chat_box_" + cid).show();
                    });
                });

                jQuery("#wplc_admin_chatmsg").keyup(function (event) {
                    if (event.keyCode == 13) {
                        jQuery("#wplc_admin_send_msg").click();
                    }
                });

                jQuery("#wplc_admin_close_chat").on("click", function () {
                    var wplc_cid = jQuery("#wplc_admin_cid").val();
                    var data = {
                        action: 'wplc_admin_close_chat',
                        security: '<?php echo $ajax_nonce; ?>',
                        domain: '<?php echo get_option('siteurl'); ?>',
                        api: '<?php echo get_option('wplc_api_key'); ?>',
                        cid: wplc_cid

                    };
                    jQuery.post(wplc_ajaxurl, data, function (response) {
                        window.close();
                    });

                });
                function wplc_strip(str) {
                    str = str.replace(/<br>/gi, "\n\r");
                    str = str.replace(/<br\/>/gi, "\n\r");
                    str = str.replace(/<br \/>/gi, "\n\r");
                    str = str.replace(/<p.*>/gi, "\n\r");
                    str = str.replace(/<a.*href="(.*?)".*>(.*?)<\/a>/gi, " $2 ($1) ");
                    str = str.replace(/<(?:.|\s)*?>/g, "");
                    return str;
                }

                jQuery("#wplc_admin_send_msg").on("click", function () {
                    var wplc_cid = jQuery("#wplc_admin_cid").val();
                    var wplc_chat = wplc_strip(document.getElementById('wplc_admin_chatmsg').value);
                    var wplc_name = "<?php echo wplc_return_from_name(get_current_user_id()); ?>";
                    jQuery("#wplc_admin_chatmsg").val('');

                    if (wplc_display_name == 'display') {
                        jQuery("#admin_chat_box_area_" + wplc_cid).append("<span class='wplc-admin-message'>" + wplc_image + " <strong>" + wplc_name + "</strong>: " + wplc_chat + "</span><br /><div class='wplc-clear-float-message'></div>");
                    } else {
                        jQuery("#admin_chat_box_area_" + wplc_cid).append("<span class='wplc-admin-message'>" + wplc_chat + "</span><div class='wplc-clear-float-message'></div>");
                    }

                    var height = jQuery('#admin_chat_box_area_' + wplc_cid)[0].scrollHeight;
                    jQuery('#admin_chat_box_area_' + wplc_cid).scrollTop(height);


                    var data = {
                        action: 'wplc_admin_send_msg',
                        security: '<?php echo $ajax_nonce; ?>',
                        cid: wplc_cid,
                        msg: wplc_chat,
                        admin_name: wplc_name,
                        domain: '<?php echo get_option('siteurl'); ?>',
                        api: '<?php echo get_option('wplc_api_key'); ?>'
                    };
                    jQuery.post(wplc_ajaxurl, data, function (response) {

                        /* do nothing
                         jQuery("#admin_chat_box_area_"+wplc_cid).html(response);
                         var height = jQuery('#admin_chat_box_area_'+wplc_cid)[0].scrollHeight;
                         jQuery('#admin_chat_box_area_'+wplc_cid).scrollTop(height);
                         */
                    });


                });






    <?php } ?>
        });
    </script>
    <?php
}

function wplc_pro_admin_javascript() {
    $ajax_nonce = wp_create_nonce("wplc");


    $agent_id = wplc_ma_check_if_user_is_agent();
    
    if(get_option('wplc_use_external_server')){
        $wplc_ajax_url = 'http://ccplugins.co/wplc-api/v2/ajax-pro.php';
    } else {
        $wplc_ajax_url = admin_url('admin-ajax.php');
    }
    ?>
    <script type="text/javascript">
        var wplc_ajaxurl = '<?php echo $wplc_ajax_url; ?>';
        var chat_count = 0;
        var wplc_run = true;
        var wplc_had_error = false;
        var ringer_cnt = 0;
        var orig_title = document.getElementsByTagName("title")[0].innerHTML;
        var current_chat_ids = new Object();

        var data = {
            action: 'wplc_admin_long_poll',
            security: '<?php echo $ajax_nonce; ?>',
            wplc_list_visitors_data: false,
            wplc_update_admin_chat_table: false,
            wplc_agent_id: '<?php echo $agent_id ?>',
            api: '<?php echo get_option('wplc_api_key'); ?>',
            domain: '<?php echo get_option('siteurl'); ?>'
        };
        var wplc_pending_refresh = null;

        var wplc_notification_icon_url = '<?php echo plugins_url('/images/wplc_notification_icon.png', __FILE__); ?>';

        Object.size = function(obj) {
            var size = 0, key;
            for (key in obj) {
                if (obj.hasOwnProperty(key)) size++;
            }
            return size;
        };

        function wplc_notify_agent() {
            
            var wplc_sounder = document.createElement("embed");
            wplc_sounder.src = '<?php echo plugins_url('/ring.wav', __FILE__); ?>';
            wplc_sounder.hidden = 'true';
            wplc_sounder.autostart = 'true';
            wplc_sounder.loop = 'false';
            wplc_sounder.type = 'audio/x-wav';
            var seconds = new Date().getTime() / 1000;
            wplc_sounder.id = 'wplc_s_'+seconds;

            
            document.body.appendChild(wplc_sounder);  
            
            if (ringer_cnt <= 0) {
                wplc_desktop_notification();
            }
            ringer_cnt++;

            if (ringer_cnt > 1) {
                clearInterval(wplc_pending_refresh);
                wplc_title_alerts4 = setTimeout(function () {
                    document.title = orig_title;
                }, 4000);
                return;
            }

            document.title = "** CHAT REQUEST **";
            wplc_title_alerts2 = setTimeout(function () {
                document.title = "** CHAT REQUEST **";
            }, 2000);
            wplc_title_alerts4 = setTimeout(function () {
                document.title = orig_title;
            }, 4000);


                
            

        }
        function wplc_call_to_server(data) {
            var wplc_run = true;
            var wplc_had_error = false;
            jQuery.ajax({
                url: wplc_ajaxurl,
                data: data,
                type: "POST",
                success: function (response) {

                    //Update your dashboard gauge
                    if (response) {

                        response = JSON.parse(jQuery.trim(response));
                        data["wplc_list_visitors_data"] = response['wplc_list_visitors_data'];
                        data["wplc_update_admin_chat_table"] = response['wplc_update_admin_chat_table'];
                        if (response['action'] === "wplc_update_chat_list") {
                            wplc_handle_chat_output(response['wplc_update_admin_chat_table']);
                            if (response['pending'] === true) {
                                
                                wplc_notify_agent();
                                wplc_pending_refresh = setInterval(function () {
                                    
                                    wplc_notify_agent();
                                }, 5000);
                            } else {
                                clearInterval(wplc_pending_refresh);
                                ringer_cnt = 0;
                            }
                        }

                    }
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.status == 404) {
                        if (window.console) { console.log('Requested page not found. [404]'); }
                        wplc_run = false;
                    } else if (jqXHR.status == 500) {
                        if (window.console) { console.log('Internal Server Error [500].'); }
                        wplc_run = true;
                        wplc_had_error = true;
                        setTimeout(function () {
                            wplc_call_to_server(data);
                        }, 10000);
                    } else if (exception === 'parsererror') {
                        if (window.console) { console.log('Requested JSON parse failed.'); }
                        wplc_run = false;
                    } else if (exception === 'abort') {
                        if (window.console) { console.log('Ajax request aborted.'); }
                        wplc_run = false;
                    } else {
                        if (window.console) { console.log('Uncaught Error.\n' + jqXHR.responseText); }
                        wplc_run = true;
                        wplc_had_error = true;
                        setTimeout(function () {
                            wplc_call_to_server(data);
                        }, 10000);
                        
                    }
                    return;
                },
                complete: function (response) {
                    //console.log(wplc_run);
                    if (wplc_run && !wplc_had_error) {
                      setTimeout(function () {
                          wplc_call_to_server(data);
                      }, 3000);
                    }
                },
                timeout: 120000
            });
        };

        function wplc_handle_chat_output(response) {
            var obj = jQuery.parseJSON(response);
            if (obj === false || obj === null) {
                    jQuery("#wplc_chat_ul").html("");
                    current_chat_ids = {};
                    wplc_handle_count_change(0);
                    
            } else {
                var size = Object.size(current_chat_ids);
                wplc_handle_count_change(size);
                if (size < 1) {
                    /* no prior visitor information, update without any checks */
                    current_chat_ids = obj["ids"];
                    wplc_update_chat_list(false,obj);
                } else {
                    /* we have had visitor information prior to this call, update systematically */
                    if (obj === null) {
                        jQuery("#wplc_chat_ul").html("");
                    } else {
                        current_chat_ids = obj["ids"];
                        wplc_update_chat_list(true,obj);
                    }
                }

            
            }
            var size = Object.size(current_chat_ids);
            wplc_handle_count_change(size);
            
        

        }
        function wplc_handle_count_change(qty) {
            if (qty > chat_count) {
                jQuery(".wplc_chat_vis_count_box").animate({backgroundColor: '#B3D24B'}, 300);
                jQuery(".wplc_vis_online").html(qty);
                jQuery(".wplc_chat_vis_count_box").animate({backgroundColor: 'white'}, 200);
            } else if (qty === chat_count) {
                jQuery(".wplc_vis_online").html(qty);
            } else {
                jQuery(".wplc_chat_vis_count_box").animate({backgroundColor: '#E1734A'}, 300);
                jQuery(".wplc_vis_online").html(qty);
                jQuery(".wplc_chat_vis_count_box").animate({backgroundColor: 'white'}, 200);
            }
            chat_count = qty;
            
        }
    
    
        function wplc_get_status_name(status) {
            if (status === 1) {
                return "<span class='wplc_status_box wplc_status_"+status+"'>complete</span>";
            }
            if (status === 2) {
                return "<span class='wplc_status_box wplc_status_"+status+"'>pending</span>";
            }
            if (status === 3) {
                return "<span class='wplc_status_box wplc_status_"+status+"'>active</span>";
            }
            if (status === 4) {
                return "<span class='wplc_status_box wplc_status_"+status+"'>deleted</span>";
            }
            if (status === 5) {
                return "<span class='wplc_status_box wplc_status_"+status+"'>browsing</span>";
            }
            if (status === 6) {
                return "<span class='wplc_status_box wplc_status_"+status+"'>requesting chat</span>";
            }
            if (status === 8){
                return "<span class='wplc_status_box wplc_status_"+status+"'>chat ended</span></span>";
            }
            if (status === 9){
                return "<span class='wplc_status_box wplc_status_"+status+"'>chat closed</span>";
            }
            if (status === 10){
                return "<span class='wplc_status_box wplc_status_8'>chat minimized</span>";
            }
        }
        function wplc_get_type_box(type) {
            if (type === "New") {
                return "<span class='wplc_status_box wplc_type_new'>New</span>";
            }
            if (type === "Returning") {
                return "<span class='wplc_status_box wplc_type_returning'>Returning</span>";
            }
        }
    
        function wplc_create_chat_ul_element_after_eating_vindaloo(obj,key) {
            console.log(obj[key]);
            var v_img = obj[key]['image'];
            var v_name = obj[key]['name'];
            var v_email = obj[key]['email'];
            var v_browser = obj[key]['data']['browser'];
            var v_browsing = obj[key]['data']['browsing_nice_url'];
            var v_browsing_url = obj[key]['data']['browsing'];
            var v_status = obj[key]['status'];
            var v_time = obj[key]['timestamp'];
            var v_type = obj[key]['type'];
            var v_action = obj[key]['action'];
            var v_status_string = wplc_get_status_name(parseInt(v_status));
            var v_ip_address = obj[key]['data']['ip'];

            var v_vis_html = "<span class='wplc_headerspan_v'>"+v_name+"</span>";
            var v_nr_html = "<span class='wplc_headerspan_nr'><span class='browser-tag'>"+v_browser+"</span> "+wplc_get_type_box(v_type)+"</span>";
            var v_time_html = "<span class='wplc_headerspan_t'><span class='wplc_status_box wplc_status_1'>"+v_time+"</span></span>";
            var v_nr_data = "<span class='wplc_headerspan_d'><span class='wplc-sub-item-header'>Page:</span> <a href='"+v_browsing_url+"' target='_BLANK'>"+v_browsing+"</a><br /><span class='wplc-sub-item-header'>Email:</span> <a href='mailto:"+v_email+"' target='_BLANK'>"+v_email+"</a><br/><span class='wplc-sub-item-header'>IP: </span>"+v_ip_address+"</span>";
            var v_nr_status_html = "<span class='wplc_headerspan_s'>"+v_status_string+"</span>";
            var v_nr_action_html = "<span class='wplc_headerspan_a'>"+v_action+"</span>";

            var wplc_v_html = "\
                <ul id='wplc_p_ul_"+key+"' class='wplc_p_cul' cid='"+key+"'>\n\
                        <li>"+v_vis_html+"</li>\n\
                        <li>"+v_time_html+"</li>\n\
                        <li>"+v_nr_html+"</li>\n\
                        <li>"+v_nr_data+"</li>\n\
                        <li>"+v_nr_status_html+"</li>\n\
                        <li>"+v_nr_action_html+"</li>\n\
                <ul>";
            return wplc_v_html;

            
        }
    
    function wplc_update_chat_list(update,obj) {

        /* first compare existing elements with the elements on the page */
        if (update === false) {
            jQuery( ".wplc_chat_ul" ).html("");

            for (var key in obj) {
                if (obj.hasOwnProperty(key) && key !== "ids") {
                    wplc_v_html = wplc_create_chat_ul_element_after_eating_vindaloo(obj,key);
                    jQuery( "#wplc_chat_ul" ).append(wplc_v_html).hide().fadeIn(2000);
                    
                }
            }
            current_chat_ids = obj["ids"];

        } else {
            
            for (var key in current_chat_ids) {
                current_id = key;
                if (document.getElementById("wplc_p_ul_"+current_id) !== null) {
                    /* element is already there */
                    /* update element */
                    if (typeof obj[current_id] !== "undefined") { /* if this check isnt here, it will throw an error. This check is here incase the item has been deleted. If it has, it will be handled futher down */
                        jQuery("#wplc_p_ul_"+current_id).remove();
                        wplc_v_html = wplc_create_chat_ul_element_after_eating_vindaloo(obj,current_id);
                        jQuery( "#wplc_chat_ul" ).append(wplc_v_html);
                        //jQuery( ".wplc_chats_container" ).append(obj[current_id]['content']);
                    }


                } else {
                    jQuery("#nifty_c_none").hide();
                    /* new element to be created */
                    if (typeof obj[current_id] !== "undefined") { /* if this check isnt here, it will throw an error. This check is here incase the item has been deleted. If it has, it will be handled futher down */
                        
                        wplc_v_html = wplc_create_chat_ul_element_after_eating_vindaloo(obj,current_id);
                        jQuery( "#wplc_chat_ul" ).append(wplc_v_html);
                        
                        jQuery("#wplc_p_ul_"+current_id).hide().fadeIn(2000);
                        
                    }
                }


            }

   
            /* compare new elements to old elements and delete where neccessary */
            jQuery(".wplc_p_cul").each(function(n, i) {
                var cid = jQuery(this).attr("cid");
                if (typeof cid !== "undefined") {
                    if (typeof current_chat_ids[cid] !== "undefined") { /* element still there dont delete */ }
                    else {
                        jQuery("#wplc_p_ul_"+cid).fadeOut(2000).delay(2000).remove();
                        
                    }
                    var size = Object.size(current_chat_ids);
                    wplc_handle_count_change(size);
                }
                // do something with it
            });
            if(jQuery('.wplc_p_cul').length < 1) {
                wplc_handle_count_change(0);
                current_chat_ids = {};
            }
       
        }
    }

        

    jQuery(document).ready(function () {
        jQuery('body').on("click", "a", function (event) {
            if (jQuery(this).hasClass('wplc_open_chat')) {

                if (event.preventDefault) {
                    event.preventDefault();
                } else {
                    event.returnValue = false;
                }
                window.open(jQuery(this).attr("href"), jQuery(this).attr("window-title"), "width=800,height=620,scrollbars=yes", false);
            }
        });
        wplc_call_to_server(data);
    });
    </script>
    <?php
}

$wplc_api_url = 'http://ccplugins.co/apid-wplc-subs/';
$wplc_plugin_slug = basename(dirname(__FILE__));

// Take over the update check
add_filter('pre_set_site_transient_update_plugins', 'wplc_check_for_plugin_update');

function wplc_check_for_plugin_update($checked_data) {
    global $wplc_api_url, $wplc_plugin_slug, $wp_version;
    
    //Comment out these two lines during testing.
    if (empty($checked_data->checked))
        return $checked_data;

    $args = array(
        'slug' => $wplc_plugin_slug,
        'version' => $checked_data->checked[$wplc_plugin_slug . '/' . $wplc_plugin_slug . '.php'],
    );
    $request_string = array(
        'body' => array(
            'action' => 'basic_check', 
            'request' => serialize($args),
            'api_key' => get_option('wplc_api_key'),
            'd' => $_SERVER['HTTP_HOST'],
            'ip' => $_SERVER['SERVER_ADDR']
        ),
        'user-agent' => 'WordPress/' . $wp_version . '; ' . get_bloginfo('url')
    );

    // Start checking for an update
    $raw_response = wp_remote_post($wplc_api_url, $request_string);

    
    if (!is_wp_error($raw_response) && ($raw_response['response']['code'] == 200))
        $response = unserialize($raw_response['body']);

    if (is_object($response) && !empty($response)) // Feed the update data into WP updater
        $checked_data->response[$wplc_plugin_slug . '/' . $wplc_plugin_slug . '.php'] = $response;

    return $checked_data;
}

add_filter('plugins_api', 'wplc_plugin_api_call', 10, 3);

function wplc_plugin_api_call($def, $action, $args) {
    
    global $wplc_plugin_slug, $wplc_api_url, $wp_version;

    if (!isset($args->slug) || ($args->slug != $wplc_plugin_slug))
        return false;
    
    // Get the current version
    $plugin_info = get_site_transient('update_plugins');
    $current_version = $plugin_info->checked[$wplc_plugin_slug . '/' . $wplc_plugin_slug . '.php'];
    $args->version = $current_version;

    $request_string = array(
        'body' => array(
            'action' => $action, 
            'request' => serialize($args),
            'api_key' => get_option('wplc_api_key'),
            'd' => $_SERVER['HTTP_HOST'],
            'ip' => $_SERVER['SERVER_ADDR']
        ),
        'user-agent' => 'WordPress/' . $wp_version . '; ' . get_bloginfo('url')
    );

    $request = wp_remote_post($wplc_api_url, $request_string);

    if (is_wp_error($request)) {
        $res = new WP_Error('plugins_api_failed', __('An Unexpected HTTP Error occurred during the API request.</p> <p><a href="?" onclick="document.location.reload(); return false;">Try again</a>'), $request->get_error_message());
    } else {
        $res = unserialize($request['body']);

        if ($res === false)
            $res = new WP_Error('plugins_api_failed', __('An unknown error occurred'), $request['body']);
    }

    return $res;
}

function wplc_pro_user_top_js() {

    
}


function wplc_push_js_to_front_pro() {

    $ajax_nonce = wp_create_nonce("wplc");
    $wplc_settings = get_option("WPLC_SETTINGS");
    $wplc_pro_settings = get_option("WPLC_PRO_SETTINGS");
     
    
    if(get_option('wplc_use_external_server')){
        $wplc_ajax_url = 'http://ccplugins.co/wplc-api/v2/ajax-pro.php';
    } else {
        $wplc_ajax_url = admin_url('admin-ajax.php');
    }




  /* do not show if pro is outdated */
    global $wplc_version;
    if (isset($wplc_version)) {
        $float_version = floatval($wplc_version);
        if ($float_version < 4) {
            return;
        }
    }
    

    if (isset($wplc_settings['wplc_display_to_loggedin_only']) && $wplc_settings['wplc_display_to_loggedin_only'] == 1) {
        /* Only show to users that are logged in */
        if (!is_user_logged_in()) {
            return;
        }
    }

    if (isset($wplc_settings['wplc_display_name']) && $wplc_settings['wplc_display_name'] == 1) {
        $wplc_display = 'display';
    } else {
        $wplc_display = 'hide';
    }

    if ($wplc_settings["wplc_settings_enabled"] == 2) {
        return;
    }

    wp_register_script('wplc-user-jquery-cookie', plugins_url('/js/jquery-cookie.js', __FILE__), array('jquery'));
    wp_enqueue_script('wplc-user-jquery-cookie');  

    wp_register_script('wplc-user-script', plugins_url('/js/wplc_u_pro.js', __FILE__),array('jquery', 'wplc-user-jquery-cookie'));
    wp_enqueue_script('wplc-user-script');


    if(wplc_does_ce_exist()){
        $exists = 'yes';
    } else {
        $exists = 'no';
    }
    wp_localize_script('wplc-user-script', 'wplc_ce_active', $exists);

    if (isset($wplc_settings['wplc_enable_msg_sound']) && intval($wplc_settings['wplc_enable_msg_sound']) == 1) {
        $wplc_ding = '1';
    } else {
        $wplc_ding = '0';
    }

    wp_localize_script('wplc-user-script', 'wplc_ajaxurl', $wplc_ajax_url);
    wp_localize_script('wplc-user-script', 'wplc_ajaxurl_own_site', admin_url('admin-ajax.php'));
    wp_localize_script('wplc-user-script', 'wplc_nonce', $ajax_nonce);
    wp_localize_script('wplc-user-script', 'wplc_offline_msg', stripslashes($wplc_pro_settings['wplc_pro_offline2']));
    wp_localize_script('wplc-user-script', 'wplc_offline_msg3',stripslashes($wplc_pro_settings['wplc_pro_offline3']));
    wp_localize_script('wplc-user-script', 'wplc_enable_ding', $wplc_ding);
      
    $wplc_is_admin_logged_in = wplc_ma_is_agent_online();

    if ($wplc_is_admin_logged_in == 1 or $wplc_is_admin_logged_in == true) {
         wp_localize_script('wplc-user-script', 'wplc_al', "true");
    } else {
         wp_localize_script('wplc-user-script', 'wplc_al', "false");
    }
       

    $del = intval(wplc_pro_return_delay() * 1000);
    wp_localize_script('wplc-user-script', 'wplc_delay', "".$del."");

    
    $wplc_ce_options = get_option('wplc_ce_settings');
    
    $wplc_ce_url = plugins_url().'/wp-live-chat-support-chat-experience/raty/images';
    wp_localize_script('wplc-user-script', 'wplc_ce_url', $wplc_ce_url);
    
    if(isset($wplc_ce_options['wplc_ce_enable_experience']) && $wplc_ce_options['wplc_ce_enable_experience'] == 1){
        wp_localize_script('wplc-user-script', 'wplc_ce_enable_experience', 'yes');
    } else {
        wp_localize_script('wplc-user-script', 'wplc_ce_enable_experience', 'no');
    }
    
    if(isset($wplc_ce_options['wplc_ce_enable_experience_visitor']) && $wplc_ce_options['wplc_ce_enable_experience_visitor'] == 1){
        wp_localize_script('wplc-user-script', 'wplc_ce_enable_experience_visitor', 'yes');
    } else {
        wp_localize_script('wplc-user-script', 'wplc_ce_enable_experience_visitor', 'no');
    }
    
    if(isset($wplc_ce_options['wplc_ce_enable_additional_feedback']) && $wplc_ce_options['wplc_ce_enable_additional_feedback'] == 1){
        wp_localize_script('wplc-user-script', 'wplc_ce_enable_additional_feedback', 'yes');
    } else {
        wp_localize_script('wplc-user-script', 'wplc_ce_enable_additional_feedback', 'no');
    }
    
    if(isset($wplc_ce_options['wplc_ce_feedback_text'])){
        wp_localize_script('wplc-user-script', 'wplc_ce_feedback_text', $wplc_ce_options['wplc_ce_feedback_text']);
    }
    
    if(isset($wplc_ce_options['wplc_ce_feedback_button_text'])){
        wp_localize_script('wplc-user-script', 'wplc_ce_button_text', $wplc_ce_options['wplc_ce_feedback_button_text']);
    }
    
    if(isset($wplc_ce_options['wplc_ce_thank_you_text'])){
        wp_localize_script('wplc-user-script', 'wplc_ce_thank_you', $wplc_ce_options['wplc_ce_thank_you_text']);
    }
    if(get_option('wplc_use_external_server')){
        wp_localize_script('wplc-user-script', 'wplc_api', get_option('wplc_api_key'));
        wp_localize_script('wplc-user-script', 'wplc_2_ajax_url', 'http://ccplugins.co/wplc-api/v2/ajax-pro.php');        
    } else {
        wp_localize_script('wplc-user-script', 'wplc_api', '0');
        wp_localize_script('wplc-user-script', 'wplc_2_ajax_url', admin_url('admin-ajax.php'));
    }
    
    wp_localize_script('wplc-user-script', 'wplc_domain', get_option('siteurl'));

    if(get_option('wplc_use_external_server')){
        wp_localize_script('wplc-user-script', 'wplc_ajaxurl', 'http://ccplugins.co/wplc-api/v2/ajax-pro.php');        
    } else {
        wp_localize_script('wplc-user-script', 'wplc_ajaxurl', admin_url('admin-ajax.php'));
    }
    
    
    $wplc_hide_chat = "";
    if (get_option('WPLC_HIDE_CHAT')) {
        $wplc_hide_chat = "yes";
    }

//    wp_localize_script('wplc-user-script', 'wplc_2_ajax_url', array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_localize_script('wplc-user-script', 'wplc_hide_chat', $wplc_hide_chat);
    wp_localize_script('wplc-user-script', 'wplc_plugin_url', plugins_url());

    wp_localize_script('wplc-user-script', 'wplc_display_name', $wplc_display);

    if (isset($_COOKIE['wplc_email']) && $_COOKIE['wplc_email'] != "") {
        $wplc_user_gravatar = md5(strtolower(trim(sanitize_text_field($_COOKIE['wplc_email']))));
    } else {
        $wplc_user_gravatar = "";
    }

    if ($wplc_user_gravatar != "") {
        $wplc_grav_image = "<img src='//www.gravatar.com/avatar/$wplc_user_gravatar?s=20' />";
    } else {
        $wplc_grav_image = "";
    }
    wp_localize_script('wplc-user-script', 'wplc_gravatar_image', $wplc_grav_image);

    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-draggable');


}
function wplc_pro_draw_user_box() {
    
    wplc_output_box();
}

function wplc_admin_error_layout() {
    $file = plugins_url("wp_livechat_error_log.txt", __FILE__);
    echo "<h1>Error Log</h1>";
    echo nl2br(file_get_contents($file));
}
function wplc_extensions_menu_pro() {

    $addons_active = "";
    $supp_active = "";

    if (isset($_GET['action']) && $_GET['action'] == "addons") { $addons_active = "nav-tab-active"; $tab_content = wplc_tab_content_addons(); }
    else if (isset($_GET['action']) && $_GET['action'] == "supplimentary") { $supp_active = "nav-tab-active"; }
    else { $addons_active = "nav-tab-active"; }

    ?>
    <h2 class="nav-tab-wrapper">
        <a href="admin.php?page=wplivechat-menu-extensions-page&action=addons" title="<?php _e("Add-ons","wp-livechat"); ?>" class="nav-tab <?php echo $addons_active; ?>"><?php _e("Add-ons","wp-livechat"); ?></a><a href="admin.php?page=wplivechat-menu-extensions-page&action=supplimentary" title="<?php _e("Supplimentary Plugins","wp-livechat"); ?>" class="nav-tab <?php echo $supp_active; ?>"><?php _e("Supplimentary Plugins","wp-livechat"); ?></a>
    </h2>
    <div id="tab_container">
        <?php echo $tab_content; ?>
    </div>

    <?php
}
function wplc_tab_content_addons() {
    $ret_msg = "";
    $ret_msg .= "   <div class=\"wplc-extension\"><h3 class=\"wplc-extension-title\">".__("Pro add-on","wp-livechat")."</h3><a href=\"\" title=\"\"><img width=\"320\" height=\"200\" src=\"\" class=\"attachment-showcase wp-post-image\" alt=\"\" title=\"\"></a><p>Unlock powerful features in WP Live Chat Support.</p><a href=\"\" title=\"Starter Package\" class=\"button-secondary\">"._("Get this extension","wp-livechat")."</a></div>";

    return $ret_msg;

}

function wplc_admin_menu_pro() {

    if (current_user_can('wplc_ma_agent')) {
        $cap = "wplc_ma_agent";
    } else {
        $cap = "manage_options";
    }

    $wplc_mainpage = add_menu_page('WP Live Chat', __('Live Chat', 'wplivechat'), $cap, 'wplivechat-menu', 'wplc_admin_menu_layout');
    add_submenu_page('wplivechat-menu', __('Settings', 'wplivechat'), __('Settings', 'wplivechat'), 'manage_options', 'wplivechat-menu-settings', 'wplc_admin_settings_layout');
    add_submenu_page('wplivechat-menu', __('Quick Responses', 'wplivechat'), __('Quick Responses', 'edit_posts'), $cap, 'edit.php?post_type=wplc_quick_response');
    add_submenu_page('wplivechat-menu', __('History', 'wplivechat'), __('History', 'wplivechat'), $cap, 'wplivechat-menu-history', 'wplc_admin_history_layout');
    add_submenu_page('wplivechat-menu', __('Missed Chats', 'wplivechat'), __('Missed Chats', 'wplivechat'), $cap, 'wplivechat-menu-missed-chats', 'wplc_admin_missed_chats');
    add_submenu_page('wplivechat-menu', __('Offline Messages', 'wplivechat'), __('Offline Messages', 'wplivechat'), $cap, 'wplivechat-menu-offline-messages', 'wplc_admin_offline_messages');
    add_submenu_page('wplivechat-menu', __('Feedback', 'wplivechat'), __('Feedback', 'wplivechat'), $cap, 'wplivechat-menu-feedback-page', 'wplc_feedback_page_include');


    if (file_exists(plugin_dir_path(__FILE__) . "wp_livechat_error_log.txt")) {
        add_submenu_page('wplivechat-menu', __('Error Log', 'wplivechat'), __('Error Log', 'wplivechat'), 'manage_options', 'wplivechat-menu-error', 'wplc_admin_error_layout');
    }
    if(function_exists('wplc_ce_activate') && function_exists('wplc_ce_stats_page')){
        add_submenu_page('wplivechat-menu', __('Statistics', 'wplivechat'), __('Statistics', 'wplivechat'), 'manage_options', 'wplivechat-ce-stats', 'wplc_ce_stats_page');
    }
    if(function_exists('wplc_support_menu')){
        add_submenu_page('wplivechat-menu', __('Support', 'wplivechat'), __('Support', 'wplivechat'), $cap, 'wplivechat-menu-support-page', 'wplc_support_menu');   
    }
    /*add_submenu_page('wplivechat-menu', __('Extensions', 'wplivechat'), __('Extensions', 'wplivechat'), 'manage_options', 'wplivechat-menu-extensions-page', 'wplc_extensions_menu_pro');*/
}

function wplc_create_macro_post_type() {
    $labels = array(
        'name' => __('Quick Responses', 'wplivechat'),
        'singular_name' => __('Quick Response', 'wplivechat'),
        'add_new' => __('New Quick Response', 'wplivechat'),
        'add_new_item' => __('Add New Quick Response', 'wplivechat'),
        'edit_item' => __('Edit Quick Response', 'wplivechat'),
        'new_item' => __('New Quick Response', 'wplivechat'),
        'all_items' => __('All Quick Responses', 'wplivechat'),
        'view_item' => __('View Quick Responses', 'wplivechat'),
        'search_items' => __('Search Quick Responses', 'wplivechat'),
        'not_found' => __('No Quick Responses found', 'wplivechat'),
        'not_found_in_trash' => __('No Quick Responses found in the Trash', 'wplivechat'),
        'menu_name' => __('Quick Responses', 'wplivechat')
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Quick Responses for WP Live Chat Support Pro', 'wplivechat'),
        'public' => false,
        'menu_position' => 53,
        'show_in_nav_menus' => false,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'wplc_quick_response'),
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'revisions', 'author'),
        'has_archive' => true,
        'capabilities' => array(
            'edit_post' => 'edit_wplc_quick_response',
            'edit_posts' => 'edit_wplc_quick_response',
            'edit_others_posts' => 'edit_other_wplc_quick_response',
            'publish_posts' => 'publish_wplc_quick_response',
            'read_post' => 'read_wplc_quick_response',
            'read_private_posts' => 'read_private_wplc_quick_response',
            'delete_post' => 'delete_wplc_quick_response'
        )
    );

    register_post_type('wplc_quick_response', $args);
}

add_action('admin_menu', 'wplc_remove_menus');

function wplc_remove_menus() {
    remove_menu_page('edit.php?post_type=wplc_quick_response');
}

function wplc_return_macros($firsttd = 0) {

    $args = array(
        'posts_per_page' => -1,
        'offset' => 0,
        'category' => '',
        'orderby' => 'post_title',
        'order' => 'DESC',
        'include' => '',
        'exclude' => '',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'wplc_quick_response',
        'post_mime_type' => '',
        'post_parent' => '',
        'post_status' => 'publish',
        'suppress_filters' => true);

    $posts_array = get_posts($args);

    $msg = "<table><tr>";
    if ($firsttd == 0) {
        $msg .= "  <td>" . __("Assign Quick Response", "wplivechat") . "</td>";
    }
    $msg .= "  <td>";
    if ($firsttd == 1) {
        $msg .= __("Assign Quick Response", "wplivechat");
    }
    $msg .= "      <select name='wplc_macros_select' class='wplc_macros_select'>";
    $msg .= "          <option value='0'>" . __("Select", "wplivechat") . "</option>";

    foreach ($posts_array as $post) {

        $msg .= "          <option value='" . $post->ID . "'>" . $post->post_title . "</option>";
    }
    $msg .= "      </select> <small><a href='http://wp-livechat.com/documentation/what-are-quick-responses/?utm_source=plugin&utm_medium=link&utm_campaign=what_are_quick_resposnes' title='What are quick responses?' target='_BLANK'>" . __("What is this?", "wplivechat") . "</a></small>";
    $msg .= "  </td>";
    $msg .= "</tr></table>";
    return $msg;
}
