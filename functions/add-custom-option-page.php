<?php

/***************************************/
/*                                     */
/*            ADD Option Page          */
/*                                     */
/***************************************/

// Ajoute la page d'option

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Éléments communs à plusieurs pages',
		'menu_title'	=> 'Éléments communs',
		'menu_slug' 	=> 'theme-general-settings',
		'icon_url'    => 'dashicons-block-default',
		'position'    => 2
	));

}
