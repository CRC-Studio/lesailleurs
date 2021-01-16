<?php


/*      Initialisation & options          */

require_once( __DIR__ . '/functions/options.php');
require_once( __DIR__ . '/functions/include.php');

/*        ADD Custom Type        */

require_once( __DIR__ . '/functions/custom-post-type__artiste.php');
require_once( __DIR__ . '/functions/custom-post-type__oeuvre.php');
require_once( __DIR__ . '/functions/custom-post-type__selection.php');
require_once( __DIR__ . '/functions/custom-post-type__partenaire.php');
require_once( __DIR__ . '/functions/custom-post-type__edition.php');
require_once( __DIR__ . '/functions/custom-post-type__evenement.php');


/*        ADD Custom Block        */

// require_once( __DIR__ . '/functions/add-custom-block-cat.php');
// require_once( __DIR__ . '/functions/add-custom-block-type.php');


/*     ADD Custom Option Page       */

// require_once( __DIR__ . '/functions/add-custom-option-page.php');



/*     Custom HTML wp_nav_menu()      */

require_once( __DIR__ . '/functions/custom_menu.php');
// require_once( __DIR__ . '/functions/custom_html_wp_nav_menu.php');


/*        ADD Custom Script        */

// require_once( __DIR__ . '/functions/hexa-to-rgba.php');


/*        ADD WooCommerce support     */

// require_once( __DIR__ . '/functions/add-woocommerce-support.php');






/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


// function custom_post_projet() {
//
//     $taxo_projet = array(
//         'name'                => ( 'Projets' ),
//         'singular_name'       => ( 'Projet' ),
//         'all_items'           => ( 'Tous les projets' ),
//         'view_item'           => ( "Voir le projet" ),
//         'add_new_item'        => ( 'Ajouter un projet' ),
//         'add_new'             => ( 'Ajouter' ),
//         'edit_item'           => ( 'Éditer un projet' ),
//         'update_item'         => ( 'Mettre à jour' ),
//         'search_items'        => ( 'Rechercher un projet' ),
//         'not_found'           => ( 'Aucun résultat' ),
//         'not_found_in_trash'  => ( 'Aucun résultat dans la corbeille' )
//     );
//     $args_projet = array(
//         'labels'              => $taxo_projet,
//         'supports'            => array('title', 'thumbnail' ),
//         'taxonomies'          => array( 'category' ),
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 4,
//         'menu_icon'           => 'dashicons-format-image',
//         'can_export'          => true,
//         'has_archive'         => false,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'hierarchical'        => true,
//         'capability_type'     => 'post',
//     );
//     register_post_type( 'projet', $args_projet );
// }
// add_action( 'init', 'custom_post_projet', 0 );


/****************************/
/*                          */
/*   MODIFCATION COLLONNE   */
/*                          */
/****************************/

// function artistes_columns($columns)
// {
//     $columns = array(
//         'cb'         => '<input type="checkbox" />',
//         'title'      => 'Title',
//         'spectacle'  => 'Nom du spectacle',
//         'date'       => 'Date',
//         'gadwp_stats'=> 'Google Analytics',
//     );
//     return $columns;
// }
//
// function spectacle_custom_columns($column)
// {
//     global $post;
//     if($column == 'spectacle')
//     {
//         echo get_field('spectacle');
//     }
// }
//
// add_action("manage_pages_custom_column", "spectacle_custom_columns");
// add_filter("manage_edit-artistes_columns", "artistes_columns");
//
//
// /* Sortable Columns */
//
// function spectacle_custom_columns_sortable( $columns )
// {
//     $columns['spectacle'] = 'spectacle';
//     return $columns;
// }
// add_filter("manage_edit-artistes_sortable_columns", "spectacle_custom_columns_sortable" );
//
// /* Custom CSS */
//
// function custom_admin_css() {
//     echo '<style>
//     .column-date, .column-title {
//         width: 20%;
//     }
//     .column-spectacle {
//         width: 50%;
//     }
//     </style>';
//  }
// add_action('admin_head', 'custom_admin_css');
