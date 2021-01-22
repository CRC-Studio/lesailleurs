<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_genre() {

    $labels = array(
        'name'              => _x( 'Genres', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher un genre', 'lesailleurs' ),
        'all_items'         => __( 'Tous les genres', 'lesailleurs' ),
        'parent_item'       => __( 'Parent genre', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent genre:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter un nouveau genre', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom du nouveau genre', 'lesailleurs' ),
        'menu_name'         => __( 'Genre', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'genre' ),
    );

    register_taxonomy( 'genre', array( 'oeuvre' ), $args );
}
add_action( 'init', 'custom_taxo_genre', 0 );
