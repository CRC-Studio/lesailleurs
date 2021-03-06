<?php

/***************************************/
/*                                     */
/*    		 minimize Frontend  	       */
/*                                     */
/***************************************/


/**
* Supprime quelques scripts et fichier.css de Wordpress
*/

function reset_wordpress(){
   wp_dequeue_script( 'wp-embed' );  // wp_deregister_script( 'imagesloaded' );
   wp_dequeue_style( 'wp-block-library' );
   wp_dequeue_style( 'wp-block-library-theme' );
   wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
   wp_dequeue_style( 'exactmetrics-vue-frontend-style-css' );
   wp_dequeue_style( 'exactmetrics-popular-posts-style-css' );
}
add_action( 'wp_enqueue_scripts',  'reset_wordpress' );


/**
* Supprimer la retro-compatibilité avec de veilles version de JQuery
* (peut faire déconner de vieux plugin)
*/

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});


/**
* Supprimer des wp-script gérant les emojis
*/

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

// Filter out the tinymce emoji plugin.

function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}


/**
* Clean Menu Wordpress
*/

function wp_nav_menu_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
