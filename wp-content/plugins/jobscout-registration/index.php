<?php

/**
 * Plugin Name: JobScout Registration
 * Plugin URI: https://www.your-site.com/
 * Description: A plugin to register users
 * Version: 1.0
 * Author: Ghayoor Ali
 * Author URI: https://www.your-site.com/
 **/

require_once plugin_dir_path(__FILE__) . 'includes/class-registration.php';


register_activation_hook(__FILE__, 'createJobscoutRegistrationPage');

/**
 * Create Events Page For Dashboard
 */
function createJobscoutRegistrationPage()
{
    if (!get_page_by_title('Registration')) {
        $post_details = array(
            'post_title' => 'Registration',
            'post_content' => 'content of page',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'page_template' => 'registration-page.php'
        );
        wp_insert_post($post_details);
    }
}

register_activation_hook(__FILE__, 'createUserRegistrationDb');

function createUserRegistrationDb()
{
    global $wpdb;
    $user_register_table_name = $wpdb->prefix . "user_registration";
    $user_register_version_option = "jobscout-registration-plugin-version";
    $version = '1.0';

    if (version_compare(get_site_option($user_register_version_option, 0.1), $version, '<')) {

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        $user_resgister_table = "CREATE TABLE IF NOT EXISTS " . $user_register_table_name . " (
              id int(11) NOT NULL AUTO_INCREMENT,
              userfname text NOT NULL,
              userlname text NOT NULL,
              useremail VARCHAR(100) NOT NULL,
              userpswrd VARCHAR(250) NOT NULL,
              usertype text NOT NULL,
              PRIMARY KEY  (id)
            );";
        dbDelta($user_resgister_table);

        add_option($user_register_version_option, $version);
        wp_cache_flush();
    }
}
