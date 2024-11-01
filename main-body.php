<?php

if ( !defined( 'ABSPATH' ) ) {
        die; // Exit if accessed directly
    }

defined( 'ABSPATH' ) or die('You can not access this file you stupid');

function wp_digital_clock_function(){
	
    return '<div id="clock"></div>


<script>
var body = document.body;
body.onload = currentTime;

</script>
';
  
}


add_shortcode('wp_digital_clock', 'wp_digital_clock_function'); 













?>