<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_pays() {

    $labels = array(
        'name'              => _x( 'Pays', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Pays', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher un pays', 'lesailleurs' ),
        'all_items'         => __( 'Tous les pays', 'lesailleurs' ),
        'parent_item'       => __( 'Parent pays', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent pays:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter un nouveau pays', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom du nouveau pays', 'lesailleurs' ),
        'menu_name'         => __( 'Pays', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'pays' ),
    );

    register_taxonomy( 'pays', array( 'oeuvre' ), $args );
}
add_action( 'init', 'custom_taxo_pays', 0 );
