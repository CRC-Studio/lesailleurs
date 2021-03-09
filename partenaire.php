<?php
/*
Template Name:  Partenaire
*/

get_header();
get_template_part('parts/nav');
?>


<main class="main l-partenaire">

  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>


  <?php // Voir tous les partenaires? ?>

  <?php $loop = new WP_Query(
    array(
      'post_type'       => 'partenaire',
      'orderby'         => 'title',
      'order'           => 'ASC',
      'posts_per_page'  => -1
    )
  );
  if ($loop->have_posts()) :?>

  <section class="par bigm">
    <ul class="par__pars par__all row">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <?php if (get_permalink()): ?>
        <li class="par__par par__small par__link" onclick="location.href='<?php the_permalink(); ?>'">
      <?php else: ?>
        <li class="par__par par__small">
      <?php endif; ?>
        <div class="par__wrapper">
          <div class="par__container">
            <?php $image = get_field('par__logo'); ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          </div>
          <div class="par__overlay">
            <div>
              <p class="lead_paragraph"><?php the_title(); ?></p>
              <span class="subheading"><?php the_field('par__soustitre') ?></span>
            </div>
            <?php if (get_permalink()): ?>
              <span class="par__read-more subheading"><?php _e("↘ En savoir plus","lesailleurs") ?></span>
            <?php endif; ?>
          </div>
        </div>
      </li>
    <?php endwhile; ?>
    <ul>
  </section>
<?php endif; wp_reset_query(); ?>


<?php get_footer(); ?>
