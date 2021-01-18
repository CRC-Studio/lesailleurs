<?php

/***************************************/
/*                                     */
/*       		   Include   		    	     */
/*                                     */
/***************************************/


function add_js_scripts() {

  // charger dans le Header

	wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri().'/assets/js/jquery-ui.min.js', array('jquery'), null, false );
  wp_enqueue_script( 'cookie', get_template_directory_uri().'/assets/js/js.cookie.js', array('jquery'), null, false );

// charger dans le Footer

	wp_enqueue_script( 'lesailleurs', get_template_directory_uri().'/assets/js/lesailleurs.js', array('jquery'), null, true );
}
add_action('wp_enqueue_scripts', 'add_js_scripts');
