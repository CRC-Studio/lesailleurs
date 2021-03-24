<?php

/***************************************/
/*                                     */
/*       		   Include   		    	     */
/*                                     */
/***************************************/


function add__stuff() {

  // charger dans le Header

	// wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri().'/assets/js/jquery-ui.min.js', array('jquery'), null, false );

// charger dans le Footer

	wp_enqueue_script( 'cookie', get_template_directory_uri().'/assets/js/js.cookie.js', ['jquery'], null, true );
	wp_enqueue_script( 'appear', get_template_directory_uri().'/assets/js/appear.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'lesailleurs', get_template_directory_uri().'/assets/js/lesailleurs.js', ['jquery'], null, true );
}
add_action('wp_enqueue_scripts', 'add__stuff');
