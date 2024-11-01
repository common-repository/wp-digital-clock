<?php
/*
Plugin Name: Wp Digital clock
Author: Amanur Rahman
Description: This is an awesome digital clock that you can use in wp using shortcode or widget
Author URI: https://amanurrahman.com/
Version: 2.0
*/


if ( !defined( 'ABSPATH' ) ) {
        die; // Exit if accessed directly
    }

defined( 'ABSPATH' ) or die('You can not access this file you stupid');


function wpdc_scripts_load_cdn()
{
	 wp_register_style('wpdc', plugins_url('/css/style.css',__FILE__ ));
     wp_enqueue_style('wpdc'); 
     wp_enqueue_script( 'wpdc-js', plugins_url( '/js/time-js.js', __FILE__ ));
   
}

add_action( 'wp_enqueue_scripts', 'wpdc_scripts_load_cdn' );







include 'main-body.php';


?>