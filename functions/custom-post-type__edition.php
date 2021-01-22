<?php


/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


/*        editions        */

function custom_post_edition() {

    $taxo_edition = array(
        'name'                => ( 'Éditions' ),
        'singular_name'       => ( 'Édition' ),
        'all_items'           => ( 'Toutes les éditions' ),
        'view_item'           => ( "Voir l'édition" ),
        'add_new_item'        => ( 'Ajouter une édition' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( "Modifier"  ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Chercher une édition' ),
        'not_found'           => ( 'Aucune édition trouvée.' ),
        'not_found_in_trash'  => ( 'Aucune édition trouvée dans la corbeille.' )
    );
    $args_edition = array(
        'labels'              => $taxo_edition,
        'supports'            => array('title'),
        'taxonomies'          => array( '' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 21,
        'menu_icon'           => 'dashicons-admin-multisite',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'edition', $args_edition );
}
add_action( 'init', 'custom_post_edition', 0 );
