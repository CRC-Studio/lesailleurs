<?php

/***************************************/
/*                                     */
/*      Custom HTML wp_nav_menu()      */
/*                                     */
/***************************************/


// Supprimer les classes des <li> menus

function nav_class_filter( $var ) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
  }
add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);
