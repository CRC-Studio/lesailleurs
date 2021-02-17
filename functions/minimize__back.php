<?php



/***************************************/
/*                                     */
/*  		  minimize Backoffice    	     */
/*                                     */
/***************************************/

/**
* Desactivé bar admin
*/

show_admin_bar(false);



/**
* Supprime les Widget de Yoast
*/


add_action('wp_dashboard_setup', 'remove_wpseo_dashboard_overview' );
function remove_wpseo_dashboard_overview() {
  // In some cases, you may need to replace 'side' with 'normal' or 'advanced'.
  remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side' );
}
function plt_hide_wordpress_seo_metaboxes() {
  $screen = get_current_screen();
  if ( !$screen ) {
    return;
  }
  //Hide the "Yoast SEO" meta box.
  remove_meta_box('wpseo_meta', $screen->id, 'normal');
}
add_action('add_meta_boxes', 'plt_hide_wordpress_seo_metaboxes', 20);



/* Remove Yoast SEO Columns
 * Credit: Andrew Norcross http://andrewnorcross.com/
 * Last Tested: Jun 09 2020 using Yoast SEO 14.3 on WordPress 5.4.1
 *
 * If you have custom post types, you can add additional lines in this format
 * add_filter( 'manage_edit-{$post_type}_columns', 'custom_remove_yseo_columns', 10, 1 );
 * replacing {$post_type} with the name of the custom post type.
 */

add_filter( 'manage_edit-post_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
add_filter( 'manage_edit-page_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
add_filter( 'manage_edit-edition_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
add_filter( 'manage_edit-auteur_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
add_filter( 'manage_edit-evenement_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
add_filter( 'manage_edit-partenaire_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
add_filter( 'manage_edit-selection_columns', 'yoast_seo_admin_remove_columns', 10, 1 );
add_filter( 'manage_edit-oeuvre_columns', 'yoast_seo_admin_remove_columns', 10, 1 );

function yoast_seo_admin_remove_columns( $columns ) {
  unset($columns['wpseo-score']);
  unset($columns['wpseo-score-readability']);
  unset($columns['wpseo-title']);
  unset($columns['wpseo-metadesc']);
  unset($columns['wpseo-focuskw']);
  unset($columns['wpseo-links']);
  unset($columns['wpseo-linked']);
  return $columns;
}



add_action( 'init', function () {
    $wpseo_front = WPSEO_Frontend::get_instance();
    remove_filter( 'pre_get_document_title', array( $wpseo_front, 'title' ), 15 );
    remove_filter( 'wp_title', array( $wpseo_front, 'title' ), 15 );
} );



function plt_hide_wordpress_seo_menus() {
	//Hide "SEO".
	remove_menu_page('wpseo_dashboard');
	//Hide "SEO → General".
	remove_submenu_page('wpseo_dashboard', 'wpseo_dashboard');
	//Hide "SEO → Search Appearance".
	remove_submenu_page('wpseo_dashboard', 'wpseo_titles');
	//Hide "SEO → Social".
	remove_submenu_page('wpseo_dashboard', 'wpseo_social');
	//Hide "SEO → Tools".
	remove_submenu_page('wpseo_dashboard', 'wpseo_tools');
	//Hide "SEO → Premium".
	remove_submenu_page('wpseo_dashboard', 'wpseo_licenses');
}
add_action('admin_menu', 'plt_hide_wordpress_seo_menus', 11);



/**
* Remove all taxonomy box from edit screen
*/

function mytheme_remove_all_metaboxes() {
  $args = array(
    'public'   => true,
    '_builtin' => false
  );
  $post_types = get_post_types($args);
  foreach ($post_types as $i => $post_type) {
    $taxonomy_objects = get_object_taxonomies( $post_type, 'object' );
    foreach ($taxonomy_objects as $j => $tax_obj) {
      if($tax_obj->hierarchical){
        $div_id = $tax_obj->name . 'div';
      } else {
        $div_id = 'tagsdiv-' . $tax_obj->name;
      }
      remove_meta_box($div_id, $post_type, 'side');
    }
  }
}
add_action('admin_menu', 'mytheme_remove_all_metaboxes', 999);
