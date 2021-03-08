<?php
/*
Template Name:  Programme
*/

get_header();
get_template_part('parts/nav');
?>

<main class="main l-programme">
<?php
$post = get_field('edt__slc', HOMEPAGEID);
if( $post ):
  global $wp_query;
  $wp_query = new WP_Query( array( 'p' => $post ) );
  include( 'single-selection.php' );
endif;
?>
</main>


<?php get_footer(); ?>
