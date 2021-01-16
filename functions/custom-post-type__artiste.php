<?php


/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


/*        Artistes        */

function custom_post_artiste() {

    $taxo_artiste = array(
        'name'                => ( 'Artistes' ),
        'singular_name'       => ( 'Artiste' ),
        'all_items'           => ( 'Tous les artistes' ),
        'view_item'           => ( "Voir l'artiste" ),
        'add_new_item'        => ( 'Ajouter un artiste' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( "Modifier"  ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Chercher un artiste' ),
        'not_found'           => ( 'Aucun artiste trouvé.' ),
        'not_found_in_trash'  => ( 'Aucun artiste trouvé dans la corbeille.' )
    );
    $args_artiste = array(
        'labels'              => $taxo_artiste,
        'supports'            => array('title'),
        'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 22,
        'menu_icon'           => 'dashicons-admin-users',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'artiste', $args_artiste );
}
add_action( 'init', 'custom_post_artiste', 0 );
