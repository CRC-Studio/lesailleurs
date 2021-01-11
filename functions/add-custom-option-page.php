<?php



/***************************************/
/*                                     */
/*            ADD Option Page          */
/*                                     */
/***************************************/

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Option de développement & log',
		'menu_title'	=> 'Développement',
		'menu_slug' 	=> 'theme-general-settings',
   'icon_url'    => 'dashicons-admin-tools',
   'position'    => 2
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Option de développement & log',
		'menu_title'	=> 'Développement',
		'menu_slug' 	=> 'theme-general-settings',
   'icon_url'    => 'dashicons-admin-tools',
   'position'    => 2
	));

}
