<?php

/***************************************/
/*                                     */
/*      Custom HTML wp_nav_menu()      */
/*                                     */
/***************************************/

function atg_menu_classes($classes, $item, $args) {
  if($args->menu == 'Menu principal') {
    $classes[] = 'subheading';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
