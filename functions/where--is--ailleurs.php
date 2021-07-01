<?php

/***************************************/
/*                                     */
/*   		   Where Is Ailleurs		    	 */
/*                                     */
/***************************************/


/**
* Récupère l'ID de l'édition actuellement sur la Home
*/

$frontpage_id = get_option( 'page_on_front' );
define('AILLEURSISPARIS', get_field('home', $frontpage_id) );
define('AILLEURSISARLES', get_field('home_arles', $frontpage_id) );


/**
* Récupère la position actuelle des Ailleurs stockée dans le cookies "WhereIsAilleurs"
*/

define('WHEREISAILLEURS', htmlspecialchars($_COOKIE["WhereIsAilleurs"]) );


/**
* Charger le bon style.css
*/

function where__is__ailleurs() {
	if (WHEREISAILLEURS == 'Arles') {
		define('HOMEPAGEID', AILLEURSISARLES );
		wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style__sunrise.min.css' );
	}else{
		define('HOMEPAGEID', AILLEURSISPARIS );
		wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.min.css' );
	};
}
add_action('wp_enqueue_scripts', 'where__is__ailleurs');
