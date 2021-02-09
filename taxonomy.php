<?php
/*
Template Name: Taxonomie
*/

get_header(); ?>
<?php get_template_part('parts/nav') ?>

<main class="main l-taxo">

  <?php // Gestion de la cover ?>

  <section class="cover cover__small cover__nocolor">
    <div class="cover__container isv--parent">
      <div class="cover__content">
        <h1 class="cover__title display3"><?php single_term_title(); ?></h1>
        <div class="cover__info lead_paragraph l10 m2">

          <?php  // Show an optional term description.
          $term_description = term_description();
          if ( ! empty( $term_description ) ) :
            printf( '<span>%s</span>', $term_description );
          endif; ?>

        </div>
      </div>
    </div>
  </section>
  <?php  if ( have_posts() ) : ?>
    <section>
      <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="row">
            <h3 class="display2"><?php the_title(); ?></h3>
          </div>
        </a>
      <?php endwhile; ?>
    </section>
<?php endif;?>


</main>

<?php get_footer(); ?>
