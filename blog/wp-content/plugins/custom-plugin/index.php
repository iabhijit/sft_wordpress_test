<?php
/*
Plugin Name: Custom Table Plugin
Description: Install Custom Table Plugin. Once the plugin will activate some custom table will be created.
Author: Abhijit Dutta
*/

function create_custom_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'custom_table';
    $sql = "CREATE TABLE IF NOT EXISTS {$table_name} (
        id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        phone INT(10) NOT NULL,
        email VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

    // Execute the SQL statement
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Register the activation hook
register_activation_hook(__FILE__, 'create_custom_table');

//Function to  deactive the plugin
function drop_custom_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_table';
    $wpdb->query("DROP TABLE IF EXISTS {$table_name}");
}

register_deactivation_hook(__FILE__, 'drop_custom_table');
?>
