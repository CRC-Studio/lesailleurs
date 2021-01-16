<?php


/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


/*        selections        */

function custom_post_selection() {

    $taxo_selection = array(
        'name'                => ( 'Sélections' ),
        'singular_name'       => ( 'Sélection' ),
        'all_items'           => ( 'Toutes les sélections' ),
        'view_item'           => ( "Voir la sélection" ),
        'add_new_item'        => ( 'Ajouter une sélection' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( "Modifier"  ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Chercher un sélection' ),
        'not_found'           => ( 'Aucune sélection trouvée.' ),
        'not_found_in_trash'  => ( 'Aucune sélection trouvée dans la corbeille.' )
    );
    $args_selection = array(
        'labels'              => $taxo_selection,
        'supports'            => array('title'),
        'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 24,
        'menu_icon'           => 'dashicons-awards',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'selection', $args_selection );
}
add_action( 'init', 'custom_post_selection', 0 );
