<?php

/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_modalite() {

    $labels = array(
        'name'              => _x( 'Modalités', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Modalité', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher une modalité', 'lesailleurs' ),
        'all_items'         => __( 'Toutes les modalités', 'lesailleurs' ),
        'parent_item'       => __( 'Parent modalité', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent modalité:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter une nouvelle modalité', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom de la nouvelle modalité', 'lesailleurs' ),
        'menu_name'         => __( 'Modalité', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'modalite' ),
    );

    register_taxonomy( 'modalite', array( 'evenement' ), $args );
}
add_action( 'init', 'custom_taxo_modalite', 0 );
