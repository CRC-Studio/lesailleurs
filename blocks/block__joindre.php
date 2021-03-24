

<?php // On récupère les valeurs ?>


<?php
if( have_rows('jon-01','option') ):
  while( have_rows('jon-01','option') ): the_row();
  $jon01__title_fr = get_sub_field('jon__title-fr');
  $jon01__title_en = get_sub_field('jon__title-en');
  $jon01__txt_fr = get_sub_field('jon__txt-fr');
  $jon01__txt_en = get_sub_field('jon__txt-en');
  $jon01__url = get_sub_field('jon__url');
  $jon01__img = get_sub_field('jon__img');
endwhile;
endif;
if( have_rows('jon-02','option') ):
  while( have_rows('jon-02','option') ): the_row();
  $jon02__title_fr = get_sub_field('jon__title-fr');
  $jon02__title_en = get_sub_field('jon__title-en');
  $jon02__txt_fr = get_sub_field('jon__txt-fr');
  $jon02__txt_en = get_sub_field('jon__txt-en');
  $jon02__url = get_sub_field('jon__url');
  $jon02__img = get_sub_field('jon__img');
endwhile;
endif;
?>


<?php if( get_field('jon__yesorno','option') == 'yes' ): ?>

  <section class="jon">


    <?php // Bloc 01 ?>

    <div class="jon__container jon__soumission">
      <div class="jon__content">

        <?php // Changer le texte Fr ou Eng ?>

        <?php if (pll_current_language() == 'fr'): ?>
          <h2 class="jon__title subheading">
            <?php echo $jon01__title_fr ?>
          </h2>
          <p class="jon__text body"><?php echo $jon01__txt_fr ?></p>
        <?php else: ?>
          <h2 class="jon__title subheading">
            <?php echo $jon01__title_en ?>
          </h2>
          <p class="jon__text body"><?php echo $jon01__txt_en ?></p>
        <?php endif; ?>
        <a href="<?php echo $jon01__url ?>" target="_blank" class="btn btn--plain"><?php _e("En savoir plus","lesailleurs") ?></a>
      </div>

      <?php // Afficher le background ?>

      <div class="jon__back is--fullsize">
        <?php if( $jon01__img ): ?>
          <div class="image-full">
            <div class="image-full__content is--fullsize">
              <img src="<?php echo esc_url($jon01__img['url']); ?>" alt="<?php echo esc_attr($jon01__img['alt']); ?>" />
            </div>
          </div>
          <div class="jon__overlay is--fullsize"></div>
        <?php endif; ?>
      </div>
    </div>


    <?php // Bloc 02 ?>

    <div class="jon__container jon__newsletter">
      <div class="jon__content">

        <?php // Changer le texte Fr ou Eng ?>

        <?php if (pll_current_language() == 'fr'): ?>
          <h2 class="jon__title subheading">
            <?php echo $jon02__title_fr ?>
          </h2>
          <p class="jon__text body"><?php echo $jon02__txt_fr ?></p>
        <?php else: ?>
          <h2 class="jon__title subheading">
            <?php echo $jon02__title_en ?>
          </h2>
          <p class="jon__text body"><?php echo $jon02__txt_en ?></p>
        <?php endif; ?>
        <a href="<?php echo $jon02__url ?>" target="_blank" class="btn btn--plain"><?php _e("En savoir plus","lesailleurs") ?></a>
      </div>

      <?php // Afficher le background ?>

      <div class="jon__back is--fullsize">
        <?php if( $jon02__img ): ?>
          <div class="image-full">
            <div class="image-full__content is--fullsize">
              <img src="<?php echo esc_url($jon02__img['url']); ?>" alt="<?php echo esc_attr($jon02__img['alt']); ?>" />
            </div>
          </div>
          <div class="jon__overlay is--fullsize"></div>
        <?php endif; ?>
      </div>
    </div>


  </section>

<?php endif; ?>
