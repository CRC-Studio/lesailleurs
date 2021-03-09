<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_mention() {

    $labels = array(
        'name'              => _x( 'Mentions', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Mention', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher une mention', 'lesailleurs' ),
        'all_items'         => __( 'Toutes les premières', 'lesailleurs' ),
        'parent_item'       => __( 'Parent mention', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent mention:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter une nouvelle mention', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom de la nouvelle mention', 'lesailleurs' ),
        'menu_name'         => __( 'Mention', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'mention' ),
    );

    register_taxonomy( 'mention', array( 'oeuvre', 'selection' ), $args );
}
add_action( 'init', 'custom_taxo_mention', 0 );
