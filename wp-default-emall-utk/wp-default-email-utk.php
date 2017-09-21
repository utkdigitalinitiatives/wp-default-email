<?php 
/* 
Plugin Name: Change WordPress email notifications to libwebmaster@utk.edu 
Description: Based on code from http://www.wpbeginner.com/plugins/how-to-change-sender-name-in-outgoing-wordpress-email 
Version: 1.0 
Author: Dan Greene 
*/ 
 
 // Function to change email address
 
function wpd_sender_email( $original_email_address ) {
    return 'libwebmaster@utk.edu';
}
 
// Function to change sender name
function wpd_sender_name( $original_email_from ) {
    return 'University Libraries Webmaster';
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpd_sender_email' );
add_filter( 'wp_mail_from_name', 'wpd_sender_name' );
 
?>