<?php
add_action('wp_ajax_wplc_admin_long_poll', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_admin_long_poll_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_long_poll_check_user_opened_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_admin_accept_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_admin_close_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_admin_send_msg', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_call_to_server_visitor', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_user_close_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_user_minimize_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_user_maximize_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_user_send_msg', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_submit_chat_experience_rating', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_wplc_record_chat_experience_message', 'wplc_init_ajax_callback_pro');

add_action('wp_ajax_nopriv_wplc_call_to_server_visitor', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_nopriv_wplc_user_close_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_nopriv_wplc_user_minimize_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_nopriv_wplc_user_maximize_chat', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_nopriv_wplc_user_send_msg', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_nopriv_wplc_submit_chat_experience_rating', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_nopriv_wplc_record_chat_experience_message', 'wplc_init_ajax_callback_pro');


add_action('wp_ajax_wplc_get_chat_box', 'wplc_init_ajax_callback_pro');
add_action('wp_ajax_nopriv_wplc_get_chat_box', 'wplc_init_ajax_callback_pro');


function wplc_init_ajax_callback_pro() {
    $check = check_ajax_referer('wplc', 'security');

    $iterations = 55;
    /* time in microseconds between updating the user on the page within the DB  (lower number = higher resource usage) */
    define('WPLC_DELAY_BETWEEN_UPDATES', 500000);
    /* time in microseconds between long poll loop (lower number = higher resource usage) */
    define('WPLC_DELAY_BETWEEN_LOOPS', 500000);
    /* this needs to take into account the previous constants so that we dont run out of time, which in turn returns a 503 error */
    define('WPLC_TIMEOUT', (((WPLC_DELAY_BETWEEN_UPDATES + WPLC_DELAY_BETWEEN_LOOPS)) * $iterations) / 1000000);

    global $wpdb;
    global $wplc_tblname_chats;
    global $wplc_tblname_msgs;
    $wplc_tblname_chats = $wpdb->prefix . "wplc_chat_sessions";
    $wplc_tblname_msgs = $wpdb->prefix . "wplc_chat_msgs";

    /* we're using PHP 'sleep' which may lock other requests until our script wakes up. Call this function to ensure that other requests can run without waiting for us to finish */
    session_write_close();
    
    if ($check == 1) {


        if ($_POST['action'] == "wplc_get_chat_box") {

            if (function_exists("wplc_output_box_ajax")) { echo wplc_output_box_ajax(); die(); } else { echo "x"; }
        }


        if ($_POST['action'] == 'wplc_submit_chat_experience_rating') {
            if (function_exists('wplc_submit_chat_experience_rating')) {
                wplc_submit_chat_experience_rating($_POST['rating'], $_POST['cid']);
                die();
            }
        }

        if ($_POST['action'] == 'wplc_record_chat_experience_message') {
            if (function_exists('wplc_record_chat_experience_message')) {
                wplc_record_chat_experience_message($_POST['message'], $_POST['cid']);
                die();
            }
        }

        if ($_POST['action'] == 'wplc_admin_long_poll') {
            //wplc_error_log("[".__LINE__."] NEW ADMIN LONG POLL LOOP");

            if (defined('WPLC_TIMEOUT')) {
                set_time_limit(WPLC_TIMEOUT);
            } else {
                set_time_limit(120);
            }

            $i = 1;
            while ($i <= $iterations) {
                //wplc_error_log("[".__LINE__."] ADMIN LOOP $i");
                session_write_close();


                // update chats if they have timed out every x iterations
                if ($i % 15 == 0) {
                    wplc_update_chat_statuses();
                }

                //$new_visitor_data = wplc_list_visitors($_POST['wplc_agent_id']);
                $new_chat_data = wplc_list_chats_pro_new($_POST['wplc_agent_id']);
                if ($new_chat_data == "false") { $new_chat_data = false; }




                if ($_POST['wplc_update_admin_chat_table'] == 'false') {
                    $old_chat_data = false;
                } else {
                    $old_chat_data = stripslashes($_POST['wplc_update_admin_chat_table']);
                }

                $pending = wplc_check_pending_chats();
//                $new_chat_data = wplc_list_chats_pro($_POST['wplc_agent_id']);


                if($new_chat_data !== $old_chat_data){
                    $array['wplc_update_admin_chat_table'] = $new_chat_data;
                    $array['pending'] = $pending;
                    $array['action'] = "wplc_update_chat_list";
                }

                if (isset($array)) {
                    echo json_encode($array);
                    die();
                }
                @ob_end_flush();
                if (defined('WPLC_DELAY_BETWEEN_LOOPS')) {
                    usleep(WPLC_DELAY_BETWEEN_LOOPS);
                } else {
                    usleep(500000);
                }
                $i++;
            }

            die();
        }


        if ($_POST['action'] == "wplc_admin_long_poll_chat") {

            if (defined('WPLC_TIMEOUT')) {
                set_time_limit(WPLC_TIMEOUT);
            } else {
                set_time_limit(120);
            }
            //wplc_error_log("[".__LINE__."] NEW ADMIN CHAT LOOP");

            $i = 1;
            $array = array();

            while ($i <= $iterations) {

                //wplc_error_log("[".__LINE__."] ADMIN LP CHAT LOOP $i");
                session_write_close();

                if (isset($_POST['action_2']) && $_POST['action_2'] == "wplc_long_poll_check_user_opened_chat") {
                     //wplc_error_log("[".__LINE__."] ".$_POST['action_2']." ADMIN LP CHAT LOOP $i");
                    $chat_status = wplc_return_chat_status(sanitize_text_field($_POST['cid']));
                    if ($chat_status == 3) {
                        //wplc_error_log("[".__LINE__."] wplc_user_open_chat");
                        $array['action'] = "wplc_user_open_chat";
                    }
                } else {
                     
                    $new_chat_status = wplc_return_chat_status(sanitize_text_field($_POST['cid']));

                    if ($new_chat_status != $_POST['chat_status']) {
                        //wplc_error_log("[".__LINE__."] wplc_update_chat_status");
                        $array['chat_status'] = $new_chat_status;
                        $array['action'] = "wplc_update_chat_status";
                    }
                    $new_chat_message = wplc_return_admin_chat_messages($_POST['cid']);
                    if ($new_chat_message) {
                        //wplc_error_log("[".__LINE__."] wplc_new_chat_message");
                        $array['chat_message'] = $new_chat_message;
                        $array['action'] = "wplc_new_chat_message";
                    }
                }
                if (wplc_ma_check_if_chat_answered_by_other_agent($_POST['cid'], $_POST['aid']) === true) {

                        //wplc_error_log("[".__LINE__."] wplc_ma_agant_already_answered");
                    $array['action'] = "wplc_ma_agant_already_answered";
                }

                if ($array) {
                    echo json_encode($array);
                    die();
                }
                @ob_end_flush();
                if (defined('WPLC_DELAY_BETWEEN_LOOPS')) {
                    usleep(WPLC_DELAY_BETWEEN_LOOPS);
                } else {
                    usleep(500000);
                }
                $i++;
            }
            die();
        }

        if ($_POST['action'] == "wplc_admin_accept_chat") {
            //wplc_error_log("[".__LINE__."] wplc_admin_accept_chat");
            wplc_admin_accept_chat(sanitize_text_field($_POST['cid']));
            die();
        }

        if ($_POST['action'] == "wplc_admin_close_chat") {
            //wplc_error_log("[".__LINE__."] wplc_admin_close_chat");
            $chat_id = sanitize_text_field($_POST['cid']);
            wplc_change_chat_status($chat_id, 1);
            if (function_exists('wplc_ce_record_chat_end')) {
                wplc_ce_record_chat_end($chat_id);
            }
            echo 'done';
            die();
        }

        if ($_POST['action'] == "wplc_admin_send_msg") {
            //wplc_error_log("[".__LINE__."] wplc_admin_send_msg");
            $chat_id = sanitize_text_field($_POST['cid']);
            $chat_msg = sanitize_text_field($_POST['msg']);
            $wplc_rec_msg = wplc_record_chat_msg_pro("2", $chat_id, $chat_msg);
            if ($wplc_rec_msg) {
                echo 'sent';
            } else {
                echo "There was an error sending your chat message. Please contact support";
            }
            die();
        }




        //User Ajax
        if ($_POST['action'] == 'wplc_call_to_server_visitor') {
            //wplc_error_log("[".__LINE__."] NEW USER REQUEST");
            if (defined('WPLC_TIMEOUT')) {
                set_time_limit(WPLC_TIMEOUT);
            } else {
                set_time_limit(120);
            }

            $i = 1;
            $array = array("check" => false);


            /* must record the session ID */

            while ($i <= $iterations) {
                session_write_close();
                //wplc_error_log("[".__LINE__."] USER LOOP $i");


                if ($_POST['cid'] == null || $_POST['cid'] == "null" || $_POST['cid'] == "") {
                    //wplc_error_log("[".__LINE__."] CID = null - log user on page");
                    $user = __("Guest","wplivechat");
                    $email = "no email set";
                    $cid = wplc_log_user_on_page($user, $email, $_POST['wplcsession']);
                    $array['cid'] = $cid;
                    $array['status'] = wplc_return_chat_status($cid);
                    $array['wplc_name'] = $user;
                    $array['wplc_email'] = $email;
                    $array['check'] = true;
                } else {
                    //wplc_error_log("[".__LINE__."] CID != null - update user on page BEGIN");
                    $new_status = wplc_return_chat_status($_POST['cid']);
                    $array['wplc_name'] = sanitize_text_field($_POST['wplc_name']);
                    $array['wplc_email'] = sanitize_email($_POST['wplc_email']);
                    $array['cid'] = sanitize_text_field($_POST['cid']);
                    if ($new_status == $_POST['status']) { // if status matches do the following
                        if ($_POST['status'] != 2) {

                            /* check if session_variable is different? if yes then stop this script completely. */
                            if (isset($_POST['wplcsession']) && $_POST['wplcsession'] != '' && $i > 1) {
                                $wplc_session_variable = $_POST['wplcsession'];
                                $current_session_variable = wplc_return_chat_session_variable($_POST['cid']);
                                //wplc_error_log("[".$_POST['wplcsession']."] [".__LINE__."] [*$i] Checking against session variable ".$current_session_variable);
                                if ($current_session_variable != "" && $current_session_variable != $wplc_session_variable) {
                                    /* stop this script */
                                    //wplc_error_log("[".$_POST['wplcsession']."] [".__LINE__."] [*$i] TERMINATING   STATUS 11");
                                    $array['status'] = 11;
                                    echo json_encode($array);
                                    die();
                                }
                            }

                            if ($i == 1) {
                                //wplc_error_log("[".$_POST['wplcsession']."] [".__LINE__."] [*$i] Updating user on page ".$_SERVER['HTTP_REFERER']);
                                wplc_update_user_on_page(sanitize_text_field($_POST['cid']), sanitize_text_field($_POST['status']), $_POST['wplcsession']);
                            }
                            //if (defined('WPLC_DELAY_BETWEEN_UPDATES')) { sleep(WPLC_DELAY_BETWEEN_UPDATES); } else { sleep(3); }
                        }
                        if ($_POST['status'] == 0) { // browsing - user tried to chat but admin didn't answer so turn back to browsing
                            //wplc_error_log("[".__LINE__."] Status 0 - Updating user on page Status 0");
                            wplc_update_user_on_page(sanitize_text_field($_POST['cid']), 5, $_POST['wplcsession']);
                            $array['status'] = 5;
                            $array['check'] = true;
                        } else if ($_POST['status'] == 3) {
                            //wplc_update_user_on_page($_POST['cid'], 3);
                            //wplc_error_log("[".__LINE__."] Status 3");
                            $messages = wplc_return_user_chat_messages(sanitize_text_field($_POST['cid']));
                            if ($messages) {
                                wplc_mark_as_read_user_chat_messages(sanitize_text_field($_POST['cid']));
                                $array['status'] = 3;
                                $array['data'] = $messages;
                                $array['check'] = true;
                            }
                        }
                        /* check if this is part of the first run */
                        if (isset($_POST['first_run']) && sanitize_text_field($_POST['first_run']) == 1) {
                            /* if yes, then send data now and dont wait for all iterations to complete */
                            if (!isset($array['status'])) { $array['status'] = $new_status; }
                            $array['check'] = true;
                        } 
                        else if (isset($_POST['short_poll']) && sanitize_text_field($_POST['short_poll']) == "true") {
                            /* if yes, then send data now and dont wait for all iterations to complete */
                            if (!isset($array['status'])) { $array['status'] = $new_status; }
                            $array['check'] = true;
                        } 
                    } else { // statuses do not match
                        //wplc_error_log("[".__LINE__."] STATUS CHANGE   [OLD: ".$new_status."]  [NEW: ".$_POST['status']."]");
                        $array['status'] = $new_status;
                        if ($new_status == 1) { // completed
                            //wplc_error_log("[".__LINE__."] Status 1 - Updating user on page");
                            wplc_update_user_on_page(sanitize_text_field($_POST['cid']), 8, $_POST['wplcsession']);
                            $array['check'] = true;
                            $array['status'] = 8;
                            $array['data'] = __("Admin has closed and ended the chat", "wplivechat");
                        } else if ($new_status == 2) { // pending
                            //wplc_error_log("[".__LINE__."] Status 2 - returning name and email");
                            $array['check'] = true;
                            $array['wplc_name'] = wplc_return_chat_name(sanitize_text_field($_POST['cid']));
                            $array['wplc_email'] = wplc_return_chat_email(sanitize_text_field($_POST['cid']));
                        } else if ($new_status == 3) { // active
                            //wplc_error_log("[".__LINE__."] Status 3 - returning name and email");
                            $array['data'] = null;
                            $array['check'] = true;
                            if ($_POST['status'] == 5) {
                                //wplc_error_log("[".__LINE__."] Old status 3 now 5 - returing messages");
                                $messages = wplc_return_chat_messages(sanitize_text_field($_POST['cid']));
                                if ($messages) {
                                    $array['data'] = $messages;
                                }
                            }
                        } else if ($new_status == 6) { // admin requests chat
                            //wplc_error_log("[".__LINE__."] Status6 - Updating user on page");
                            wplc_update_user_on_page(sanitize_text_field($_POST['cid']), 3, $_POST['wplcsession']);
                            $array['check'] = true;
                            $array['status'] = 3;
                            $array['wplc_name'] = "You";
                        } else if ($new_status == 7) { // timed out
                            //wplc_error_log("[".__LINE__."] Status 7 TIMED OUT - Updating user on page");
                            if ($i == 1) { wplc_update_user_on_page(sanitize_text_field($_POST['cid']), 5, $_POST['wplcsession']); }
                        }
                        else if($new_status == 8){ // completed but still browsing
                            if ($i == 1) { wplc_update_user_on_page(sanitize_text_field($_POST['cid']), 8, $_POST['wplcsession']); }
                        }
                        else if ($new_status == 9) { // user closed chat without inputting or starting a chat
                            //wplc_error_log("[".__LINE__."] Status 9");
                            $array['check'] = true;
                        } else if ($new_status == 0) { // no answer from admin
                            //wplc_error_log("[".__LINE__."] Status 0?");
                            $array['data'] = __('There is No Answer. Please Try Again Later', 'wplivechat');
                            $array['check'] = true;
                        } else if ($new_status == 10) { // minimized active chat
                            //wplc_error_log("[".__LINE__."] Status 10");
                            $array['check'] = true;
                            if ($_POST['status'] == 5) {
                            //wplc_error_log("[".__LINE__."] Status 10 NOW 5");
                                $messages = wplc_return_chat_messages(sanitize_text_field($_POST['cid']));
                                if ($messages) {
                                    $array['data'] = $messages;
                                }
                            }
                        }
                        /* check if this is part of the first run */
                        if (isset($_POST['first_run']) && sanitize_text_field($_POST['first_run']) == "1") {
                            /* if yes, then send data now and dont wait for all iterations to complete */
                            if (!isset($array['status'])) { $array['status'] = $new_status; }
                            $array['check'] = true;
                        } 
                        else if (isset($_POST['short_poll']) && sanitize_text_field($_POST['short_poll']) == "true") {
                            /* if yes, then send data now and dont wait for all iterations to complete */
                            if (!isset($array['status'])) { $array['status'] = $new_status; }
                            $array['check'] = true;
                        } 
                    }
                }
                if ($array['check'] == true) {
                    echo json_encode($array);
                    break;
                }
                @ob_end_flush();
                if (defined('WPLC_DELAY_BETWEEN_LOOPS')) {
                    usleep(WPLC_DELAY_BETWEEN_LOOPS);
                } else {
                    usleep(500000);
                }
                $i++;
            }
            die();
        }


        if ($_POST['action'] == "wplc_user_close_chat") {
            //wplc_error_log("[".__LINE__."] ".$_POST['action']);
            if ($_POST['status'] == 5) {
                //wplc_error_log("[".__LINE__."] ".$_POST['action']);
                wplc_change_chat_status(sanitize_text_field($_POST['cid']), 9);
            } else if ($_POST['status'] == 3) {
                //wplc_error_log("[".__LINE__."] ".$_POST['action']);
                wplc_change_chat_status(sanitize_text_field($_POST['cid']), 8);
                if (function_exists('wplc_ce_record_chat_end')) {
                    wplc_ce_record_chat_end($_POST['cid']);
                }
            }
            die();
        }

        if ($_POST['action'] == "wplc_user_minimize_chat") {
            //wplc_error_log("[".__LINE__."] ".$_POST['action']);
            $chat_id = $_POST['cid'];
            wplc_change_chat_status(sanitize_text_field($_POST['cid']), 10);
            die();
        }
        if ($_POST['action'] == "wplc_user_maximize_chat") {
            //wplc_error_log("[".__LINE__."] ".$_POST['action']);
            wplc_change_chat_status(sanitize_text_field($_POST['cid']), 3);
            die();
        }

        if ($_POST['action'] == "wplc_user_send_msg") {
            $chat_id = sanitize_text_field($_POST['cid']);
            $chat_msg = sanitize_text_field($_POST['msg']);
            //wplc_error_log("[".__LINE__."] SENDING CHAT MSG FROM USER : $chat_id : $chat_msg");
            $wplc_rec_msg = wplc_record_chat_msg_pro("1", $chat_id, $chat_msg);
            if ($wplc_rec_msg) {
                echo 'sent';
                die();
            } else {
                echo "There was an error sending your chat message. Please contact support";
                die();
            }
        }
    }

    die();
}