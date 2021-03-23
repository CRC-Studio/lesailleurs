<?php

/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_premiere() {

    $labels = array(
        'name'              => _x( 'Premières', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Première', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher une première', 'lesailleurs' ),
        'all_items'         => __( 'Toutes les premières', 'lesailleurs' ),
        'parent_item'       => __( 'Parent première', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent première:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter une nouvelle première', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom de la nouvelle première', 'lesailleurs' ),
        'menu_name'         => __( 'Première', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'premiere' ),
    );

    register_taxonomy( 'premiere', array( 'oeuvre' ), $args );
}
add_action( 'init', 'custom_taxo_premiere', 0 );
