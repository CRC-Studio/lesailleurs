<?php


/***************************************/
/*                                     */
/*          ADD Custom Menu            */
/*                                     */
/***************************************/

// Support des menus

add_theme_support( 'menus' );

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Menu principal' ),
            'footer-links' => __( 'Liens Footer' ),
            'secondary-links' => __( 'Liens secondaires' ),
            'secondary-menu' => __( 'Menu secondaire' ),
            'language-menu' => __( 'Language Menu' )
        )
    );
}


?>
