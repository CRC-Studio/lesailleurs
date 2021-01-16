<?php


/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


/*        partenaires        */

function custom_post_partenaire() {

    $taxo_partenaire = array(
        'name'                => ( 'Partenaires' ),
        'singular_name'       => ( 'Partenaire' ),
        'all_items'           => ( 'Tous les partenaires' ),
        'view_item'           => ( "Voir le partenaire" ),
        'add_new_item'        => ( 'Ajouter un partenaire' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( "Modifier"  ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Chercher un partenaire' ),
        'not_found'           => ( 'Aucun partenaire trouvé.' ),
        'not_found_in_trash'  => ( 'Aucun partenaire trouvé dans la corbeille.' )
    );
    $args_partenaire = array(
        'labels'              => $taxo_partenaire,
        'supports'            => array('title'),
        'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 26,
        'menu_icon'           => 'dashicons-money-alt',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'partenaire', $args_partenaire );
}
add_action( 'init', 'custom_post_partenaire', 0 );
