<?php
/*
Template Name:  Artiste profile
*/

get_header(); ?>
<main class="main l-oeuvre">
  <?php get_template_part('parts/nav') ?>

  <?php // Gestion de la cover ?>

  <section class="cover cover__small cover__nocolor">
    <div class="cover__container isv--parent">
      <div class="cover__content">
        <h1 class="cover__title display3"><?php the_title(); ?></h1>
        <div class="cover__info lead_paragraph l10 m2">

          <?php // Info sur la couverture : Nationalite ?>

          <?php $terms = get_field('art__profession');
          if( $terms ): ?>
          <span class="liste__de__lien">
            <?php _e("Profession : ","lesailleurs") ?>
            <?php foreach( $terms as $term ): ?>
              <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
            <?php endforeach; ?>
          </span>
        <?php endif; ?>

        <?php // Info sur la couverture : Nationalité ?>

        <?php $terms = get_field('art__nationalite');
        if( $terms ): ?>
        <span class="liste__de__lien">
          <?php _e("Nationalité : ","lesailleurs") ?>
          <?php foreach( $terms as $term ): ?>
            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
          <?php endforeach; ?>
        </span>
      <?php endif; ?>


    </div>
  </div>
</div>
</section>

<?php // Description ? ?>

<?php get_template_part('blocks/block__editorblocksystem') ?>



<section>
  <?php $oeuvres = get_posts(array(
    'post_type'       => 'oeuvre',
    'posts_per_page'  => -1,
    'meta_query'      => array(
      array(
        'key' => 'oeu__main-auteurs',
        'value' => '"' . get_the_ID() . '"',
        'compare' => 'LIKE'
      )
    )
  ));
  ?>
  <?php if( $oeuvres ): ?>
    <div class="l-gallery__container">
      <?php foreach( $oeuvres as $oeuvre ): ?>
        <?php $post = $oeuvre; ?>
        <?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>
        <article class="slc__slc slc__lar6" onclick="location.href='<?php the_permalink(); ?>'">
          <?php $post = $oeuvre; ?>
          <?php get_template_part('parts/part__template-oeuvre-selectionnee') ?>
        </article>
        <?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly.?>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>



</section>



<?php get_footer(); ?>
