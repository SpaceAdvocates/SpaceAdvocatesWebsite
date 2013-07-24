<?php
/*
Plugin Name: Sitename Custom Meta Boxes
Plugin URI: http://www.wpbeginner.com/
Description: Create Meta Boxes for Sitename.
Version: 0.1
Author: Syed Balkhi
Author URI: http://www.wpbeginner.com/
License: GPL v2 or higher
License URI: License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
 
//Initialize the metabox class
 
function wpb_initialize_cmb_meta_boxes() {
    if ( ! class_exists( 'cmb_Meta_Box' ) )
        require_once(plugin_dir_path( __FILE__ ) . 'init.php');
}
 
add_action( 'init', 'wpb_initialize_cmb_meta_boxes', 9999 );
 
//Add Meta Boxes
 
function wpb_featured_metaboxes( $meta_boxes ) {
    $prefix = '_wpb_'; // Prefix for all fields
 
    $meta_boxes[] = array(
        'id' => 'featured_metabox',
        'title' => 'Featured Metabox',
        'pages' => array('page'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Featured',
                'desc' => 'Is this a freatured post?',
                'id' => $prefix . 'featured_value',
                'type' => 'checkbox'
            ),
        ),
    );
 
    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'wpb_featured_metaboxes' );
