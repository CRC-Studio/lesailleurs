<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_profession() {

    $labels = array(
        'name'              => _x( 'Professions', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Profession', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher une profession', 'lesailleurs' ),
        'all_items'         => __( 'Toutes les professions', 'lesailleurs' ),
        'parent_item'       => __( 'Parent profession', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent profession:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter une nouvelle profession', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom de la nouvelle profession', 'lesailleurs' ),
        'menu_name'         => __( 'Profession', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'profession' ),
    );

    register_taxonomy( 'profession', array( 'auteur' ), $args );
}
add_action( 'init', 'custom_taxo_profession', 0 );
