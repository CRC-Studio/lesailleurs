<?php
/*
Template Name: Partenaire Single
*/

get_header();
get_template_part('parts/nav');
?>

<main class="main l-partenaire">
  <section class="cover cover__small cover__nocolor">
    <div class="cover__container cover__text isv--parent">
      <div class="cover__content">
        <h1 class="cover__title display3"><?php the_title(); ?></h1>
        <div class="cover__info lead_paragraph l10 m2">


          <?php // Info sur la couverture : Lieu ?>

          <?php if( get_field('par__soustitre') ): ?>
            <span>
                <?php the_field('par__soustitre') ?>
            </span>
          <?php endif; ?>

    </div>
  </div>
  </div>
  </section>





  <?php get_template_part('blocks/block__editorblocksystem') ?>
  <?php get_template_part('blocks/block__biglinks') ?>

</main>

<?php get_footer(); ?>
