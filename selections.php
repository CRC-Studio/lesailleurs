<?php
/*
Template Name: Sélection
*/

get_header();
get_template_part('parts/nav');
?>


<main class="main l-selection">

  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>


  <?php // Voir les sélections précédentes ? ?>

  <?php $loop = new WP_Query(
    array(
      'post_type'       => 'selection',
      'orderby'         => 'title',
      'order'           => 'DES',
      'posts_per_page'  => -1
    )
  );
  if ($loop->have_posts()) :?>
  <section>
    <div class="col m1 l8">
      <h2 class="subheading"><?php _e("Découvrir toutes sélections","lesailleurs") ?> <?php echo $parentname; ?></h2>
      <div class="divider"></div>
    </div>
    <ul class="is--not--hover">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php get_template_part('parts/part__list') ?>
      <?php endwhile; ?>
    </ul>
  </section>
<?php endif; wp_reset_query(); ?>


</main>

<?php get_footer(); ?>
