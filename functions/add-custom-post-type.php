<?php


/***************************************/
/*                                     */
/*        ADD Custom Post Type         */
/*                                     */
/***************************************/


/*        Authors        */

function custom_post_contributor() {

    $taxo_contributor = array(
        'name'                => ( 'Contributors' ),
        'singular_name'       => ( 'Contributor' ),
        'all_items'           => ( 'All Contributors' ),
        'view_item'           => ( "See Contributor" ),
        'add_new_item'        => ( 'Add New Contributor' ),
        'add_new'             => ( 'Add New' ),
        'edit_item'           => ( "Edit"  ),
        'update_item'         => ( 'Update' ),
        'search_items'        => ( 'Search Contributors' ),
        'not_found'           => ( 'No Contributor found.' ),
        'not_found_in_trash'  => ( 'No Contributor found in Trash.' )
    );
    $args_contributor = array(
        'labels'              => $taxo_contributor,
        'supports'            => array('title'),
        'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-admin-users',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'hierarchical'        => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'contributor', $args_contributor );
}
add_action( 'init', 'custom_post_contributor', 0 );
