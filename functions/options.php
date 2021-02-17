<?php


/***************************************/
/*                                     */
/* 		 Ajoute des Options au thème     */
/*                                     */
/***************************************/


/**
* Support du multilangue
*/

function multilangue_support(){
  load_theme_textdomain( 'lesailleurs', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'multilangue_support' );

/**
* Support des images de couvertures
*/

add_theme_support( 'post-thumbnails' );
