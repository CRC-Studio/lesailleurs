<?php


/***************************************/
/*                                     */
/* 		 Ajoute des Options au thème     */
/*                                     */
/***************************************/


/**
* Support des images de couvertures
*/

add_theme_support( 'post-thumbnails' );


/**
* Support de Cookies necessaires en version francais ( vertsion anglais fait autumatiquement.)
*  https://www.webtoffee.com/modify-strictly-enabled-cookie-categories-using-webtoffee-gdpr-cookie-consent-plugin/
*/


function webtoffee_strictly_enabled_cookie_categories($strict_categories) {

    $count = count($strict_categories);
    $strict_categories[$count] = 'necessaire';
    $strict_categories[$count+1] = 'necessary';

    return $strict_categories;
}

add_filter('gdpr_strictly_enabled_category', 'webtoffee_strictly_enabled_cookie_categories');
