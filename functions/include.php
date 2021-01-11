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

if ( is_page_template( 'map.php' ) ){
  	wp_enqueue_script( 'oripeau__map', get_template_directory_uri().'/assets/js/oripeau__map.js', array('jquery'), null, true );
  	wp_enqueue_script( 'geocoder', get_template_directory_uri().'/assets/js/geocoder.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'webGLEarth__api', get_template_directory_uri().'/assets/js/webGLEarth__api.js', array('jquery'), null, true );
}
if ( is_page_template( 'gallery.php') || is_singular( 'contributor') ){
   	 wp_enqueue_script('jquery-masonry');
		 wp_enqueue_script( 'infinite-scroll', get_template_directory_uri().'/assets/js/infinite-scroll.pkgd.min.js', 'jquery', '2.0', true );
}
if ( is_page_template( 'list.php') ){
		wp_enqueue_script( 'tablesorter', get_template_directory_uri().'/assets/js/tablesorter.min.js', array('jquery'), null, true );
}
	wp_enqueue_script( 'oripeau', get_template_directory_uri().'/assets/js/oripeau.js', array('jquery'), null, true );
}
add_action('wp_enqueue_scripts', 'add_js_scripts');
