<?php


/***************************************/
/*                                     */
/*    		   Reset Wordpress     	     */
/*                                     */
/***************************************/


// Disable Admin Bar

if (is_user_logged_in()) {
    show_admin_bar(false);
}


// Remove some wp-script

function reset_wordpress(){
 wp_dequeue_script( 'wp-embed' );
 // wp_deregister_script( 'imagesloaded' );
}
add_action( 'wp_footer', 'reset_wordpress' );


// Supprimer la retro-compatibilité avec de veilles version de JQuery (peut faire déconner de vieux plugin)

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});


// Remove some wp-script emoji

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


// Support du multilangue

add_action( 'after_setup_theme', 'multilangue_support' );
function multilangue_support(){
  load_theme_textdomain( 'lesailleurs', get_template_directory() . '/languages' );
}

// Support des images de couvertures

add_theme_support( 'post-thumbnails' );

// Desactivé bar admin

show_admin_bar(false);
