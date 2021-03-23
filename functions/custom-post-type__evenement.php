<?php

/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


/*        evenements        */

function custom_post_evenement() {

    $taxo_evenement = array(
        'name'                => ( 'Événements' ),
        'singular_name'       => ( 'Événement' ),
        'all_items'           => ( 'Tous les événements' ),
        'view_item'           => ( "Voir l'événement" ),
        'add_new_item'        => ( 'Ajouter un événement' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( "Modifier"  ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Chercher un événement' ),
        'not_found'           => ( 'Aucun événement trouvé.' ),
        'not_found_in_trash'  => ( 'Aucun événement trouvé dans la corbeille.' )
    );
    $args_evenement = array(
        'labels'              => $taxo_evenement,
        'supports'            => array('title','thumbnail'),
        'taxonomies'          => array( '' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 25,
        'menu_icon'           => 'dashicons-calendar',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'evenement', $args_evenement );
}
add_action( 'init', 'custom_post_evenement', 0 );
