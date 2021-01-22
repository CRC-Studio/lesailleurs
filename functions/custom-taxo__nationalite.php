<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_nationalite() {

    $labels = array(
        'name'              => _x( 'Nationalités', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Nationalité', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher une nationalité', 'lesailleurs' ),
        'all_items'         => __( 'Toutes les nationalités', 'lesailleurs' ),
        'parent_item'       => __( 'Parent nationalité', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent nationalité:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter une nouvelle nationalité', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom de la nouvelle nationalité', 'lesailleurs' ),
        'menu_name'         => __( 'Nationalité', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'nationalite' ),
    );

    register_taxonomy( 'nationalite', array( 'auteur' ), $args );
}
add_action( 'init', 'custom_taxo_nationalite', 0 );
