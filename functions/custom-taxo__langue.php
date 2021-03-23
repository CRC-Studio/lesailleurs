<?php

/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_langue() {

    $labels = array(
        'name'              => _x( 'Langues', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Langue', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher une langue', 'lesailleurs' ),
        'all_items'         => __( 'Toutes les langues', 'lesailleurs' ),
        'parent_item'       => __( 'Parent langue', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent langue:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter une nouvelle langue', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom de la nouvelle langue', 'lesailleurs' ),
        'menu_name'         => __( 'Langue', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'langue' ),
    );

    register_taxonomy( 'langue', array( 'oeuvre' ), $args );
}
add_action( 'init', 'custom_taxo_langue', 0 );
