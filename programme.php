<?php
/*
Template Name:  Programme
*/

get_header();

$post = get_field('edt__slc', HOMEPAGEID);
if( $post ):
  global $wp_query;
  $wp_query = new WP_Query( array( 'p' => $post ) );
  include( 'single-selection.php' );
endif;
