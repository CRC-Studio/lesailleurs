<?php


/***************************************/
/*                                     */
/*        ADD Custom taxonomy          */
/*                                     */
/***************************************/


function custom_taxo_thematique() {

    $labels = array(
        'name'              => _x( 'Thématiques', 'taxonomy general name', 'lesailleurs' ),
        'singular_name'     => _x( 'Thématique', 'taxonomy singular name', 'lesailleurs' ),
        'search_items'      => __( 'Chercher une thématique', 'lesailleurs' ),
        'all_items'         => __( 'Toutes les thématiques', 'lesailleurs' ),
        'parent_item'       => __( 'Parent thématique', 'lesailleurs' ),
        'parent_item_colon' => __( 'Parent thématique:', 'lesailleurs' ),
        'edit_item'         => __( 'Modifier', 'lesailleurs' ),
        'update_item'       => __( 'Mettre à jour', 'lesailleurs' ),
        'add_new_item'      => __( 'Ajouter une nouvelle thématique', 'lesailleurs' ),
        'new_item_name'     => __( 'Nom de la nouvelle thématique', 'lesailleurs' ),
        'menu_name'         => __( 'Thématique', 'lesailleurs' ),
    );

    $args = array(
        'hierarchical'      => false, // Like categories or tag?
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'thematique' ),
    );

    register_taxonomy( 'thematique', array( 'oeuvre', 'evenement' ), $args );
}
add_action( 'init', 'custom_taxo_thematique', 0 );
