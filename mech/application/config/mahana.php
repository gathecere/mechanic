<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// application's Users table - define your user table and columns here

define('USER_TABLE_TABLENAME', 'tbl_user u');
define('USER_TABLE_ID', 'u.user_id');
define('USER_TABLE_USERNAME', 'CONCAT(u.user_fname, " ", u.user_lname) as user_lname');


// message statuses
define('MSG_STATUS_UNREAD', 0);
define('MSG_STATUS_READ', 1);
define('MSG_STATUS_ARCHIVED', 2);

// priority
define('PRIORITY_LOW', 1);
define('PRIORITY_NORMAL', 2);
define('PRIORITY_HIGH', 3);
define('PRIORITY_URGENT', 4);

// status return message codes
define('MSG_SUCCESS', 0);
define('MSG_ERR_GENERAL', 1);
define('MSG_ERR_INVALID_USER_ID', 2);
define('MSG_ERR_INVALID_MSG_ID', 3);
define('MSG_ERR_INVALID_THREAD_ID', 4);
define('MSG_ERR_INVALID_STATUS_ID', 5);
define('MSG_ERR_INVALID_SENDER_ID', 6);
define('MSG_ERR_INVALID_RECIPIENTS', 7);
define('MSG_MESSAGE_SENT', 8);
define('MSG_STATUS_UPDATE', 9);
define('MSG_PARTICIPANT_ADDED', 10);
define('MSG_ERR_PARTICIPANT_EXISTS', 11);
define('MSG_ERR_PARTICIPANT_NONSYSTEM', 12);
define('MSG_PARTICIPANT_REMOVED', 13);
