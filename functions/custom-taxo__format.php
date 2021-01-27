<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_format() {

    $labels = array(
        'name'              => _x( 'Formats', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Format', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher un format', 'lesailleurs' ),
        'all_items'         => __( 'Tous les formats', 'lesailleurs' ),
        'parent_item'       => __( 'Parent format', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent format:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter un nouveau format', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom du nouveau format', 'lesailleurs' ),
        'menu_name'         => __( 'Format', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'format' ),
    );

    register_taxonomy( 'format', array( 'oeuvre' ), $args );
}
add_action( 'init', 'custom_taxo_format', 0 );
