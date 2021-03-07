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


  <?php // Afficher toutes les autres taxo  ?>

  <section class="thm__thms">

    <?php

    $query_obj = get_queried_object();
    $taxonomy  = get_taxonomy( $query_obj->taxonomy );
    if ( $taxonomy ):
      $parentslug =  $taxonomy->query_var;
      $parentname=  $taxonomy->labels->name;
      $terms = get_terms([
        'taxonomy' => $parentslug,
        'hide_empty' => false,
      ]); ?>

      <section class="thm__thms col m1 l8">
        <div class="row">
          <h2 class="subheading">Autres <?php echo $parentname; ?></h2>
          <div class="divider"></div>
        </div>
        <?php foreach( $terms as $term ): ?>
          <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="btn btn--outline">#<?php echo esc_html( $term->name ); ?></a>
        <?php endforeach; ?>
      </section>
    <?php endif; ?>

  </main>

  <?php get_footer(); ?>
