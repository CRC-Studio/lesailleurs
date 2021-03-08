<?php
/*
Template Name: Taxonomie - Thématiques

Le template Taxonomie - Thématique permet d'Afficher une liste de toutes les thématiques
*/

get_header();
get_template_part('parts/nav');
?>

<main class="main l-taxo">
  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>



  <?php // Afficher toutes les autres taxo  ?>

    <?php
      $terms = get_terms([
        'taxonomy' => 'thematique',
        'hide_empty' => false,
      ]);
      if ( $terms ):
      ?>

      <section class="thm__big">
        <ul class="is--not--hover">
          <?php foreach( $terms as $term ): ?>
            <li>
              <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="btn--big">#<?php echo esc_html( $term->name ); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    <?php endif; ?>

  </main>

  <?php get_footer(); ?>
