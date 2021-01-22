<?php


/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


/*        auteurs        */

function custom_post_auteur() {

    $taxo_auteur = array(
        'name'                => ( 'Auteurs' ),
        'singular_name'       => ( 'Auteur' ),
        'all_items'           => ( 'Tous les auteurs' ),
        'view_item'           => ( "Voir l'auteur" ),
        'add_new_item'        => ( 'Ajouter un auteur' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( "Modifier"  ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Chercher un auteur' ),
        'not_found'           => ( 'Aucun auteur trouvé.' ),
        'not_found_in_trash'  => ( 'Aucun auteur trouvé dans la corbeille.' )
    );
    $args_auteur = array(
        'labels'              => $taxo_auteur,
        'supports'            => array('title'),
        'taxonomies'          => array( '' ),
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
    register_post_type( 'auteur', $args_auteur );
}
add_action( 'init', 'custom_post_auteur', 0 );
