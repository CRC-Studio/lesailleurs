<?php

/***************************************/
/*                                     */
/*   		   Where Is Ailleurs		    	 */
/*                                     */
/***************************************/


function where__is__ailleurs() {

  // permet de switcher entre les Ailleurs Arles et les Ailleurs Paris

	wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.min.css' );


}
add_action('wp_enqueue_scripts', 'where__is__ailleurs');

  // Récupère l'ID de l'édition actuellement sur la Home

	$frontpage_id = get_option( 'page_on_front' );
	define('HOMEPAGEID', get_field('home', $frontpage_id) );
