<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_type_evenement() {

    $labels = array(
        'name'              => _x( "Type d'évenements", 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( "Type d'évenement", 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( "Chercher un type d'évenement", 'lesailleurs' ),
        'all_items'         => __( "Tous les genres", 'lesailleurs' ),
        'parent_item'       => __( "Parent type d'évenement", 'lesailleurs' ),
        'parent_item_colon' => __( "Parent type d'évenement", 'lesailleurs' ),
        'edit_item'         => __( "Modifier", 'lesailleurs' ),
        'update_item'       => __( "Mettre à jour", 'lesailleurs' ),
        'add_new_item'      => __( "Ajouter un nouveau type d'évenement", 'lesailleurs' ),
        'new_item_name'     => __( "Nom du nouveau type d'évenement", 'lesailleurs' ),
        'menu_name'         => __( "type d'évenement", 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'type_evenement' ),
    );

    register_taxonomy( 'type_evenement', array( 'evenement' ), $args );
}
add_action( 'init', 'custom_taxo_type_evenement', 0 );
