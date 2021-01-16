<?php


/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


/*        oeuvres        */

function custom_post_oeuvre() {

    $taxo_oeuvre = array(
        'name'                => ( 'Œuvres' ),
        'singular_name'       => ( 'Œuvre' ),
        'all_items'           => ( 'Toutes les œuvres' ),
        'view_item'           => ( "Voir l'œuvre" ),
        'add_new_item'        => ( 'Ajouter une œuvre' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( "Modifier"  ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Chercher une œuvre' ),
        'not_found'           => ( 'Aucune œuvre trouvée.' ),
        'not_found_in_trash'  => ( 'Aucune œuvre trouvée dans la corbeille.' )
    );
    $args_oeuvre = array(
        'labels'              => $taxo_oeuvre,
        'supports'            => array('title'),
        'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 23,
        'menu_icon'           => 'dashicons-welcome-view-site',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'oeuvre', $args_oeuvre );
}
add_action( 'init', 'custom_post_oeuvre', 0 );
