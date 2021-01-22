<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_profession() {

    $labels = array(
        'name'              => _x( 'Professsions', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Professsion', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher une professsion', 'lesailleurs' ),
        'all_items'         => __( 'Toutes les professsions', 'lesailleurs' ),
        'parent_item'       => __( 'Parent professsion', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent professsion:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter une nouvelle professsion', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom de la nouvelle professsion', 'lesailleurs' ),
        'menu_name'         => __( 'Professsion', 'lesailleurs' ),
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
