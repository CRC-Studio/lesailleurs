<?php
/*
Template Name:  Agenda
*/

get_header();
get_template_part('parts/nav');
?>

<main class="main l-agenda">
  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>


  <?php // Voir les événements ?>

  <?php $loop = new WP_Query(
    array(
      'post_type'       => 'evenement',
      'order'           => 'ASC',
      'meta_key'  			=> 'eve__start',
    	'orderby'		    	=> 'meta_value',
      'posts_per_page'  => -1
    )
  );
  if ($loop->have_posts()) :?>

  <section class="eve row">
    <?php get_template_part('parts/part__eve-bar') ?>
    <ul>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php get_template_part('parts/part__eve-single') ?>
      <?php endwhile; ?>
    </ul>
  </section>
<?php endif; wp_reset_query(); ?>
<?php get_template_part('blocks/block__joindre') ?>
</main>

<?php get_footer(); ?>
