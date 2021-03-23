

<?php // On récupère les valeurs ?>


<?php
if( have_rows('jon-01','option') ):
  while( have_rows('jon-01','option') ): the_row();
  $jon01__txt = get_sub_field('jon__txt');
  $jon01__url = get_sub_field('jon__url');
  $jon01__img = get_sub_field('jon__img');
endwhile;
endif;
if( have_rows('jon-02','option') ):
  while( have_rows('jon-02','option') ): the_row();
  $jon02__txt = get_sub_field('jon__txt');
  $jon02__url = get_sub_field('jon__url');
  $jon02__img = get_sub_field('jon__img');
endwhile;
endif;
?>


<section class="jon">
  <div class="jon__container jon__soumission">
    <div class="jon__content">
      <h2 class="jon__title subheading">
        <?php _e("Soumission d'Œuvre","lesailleurs") ?>
      </h2>
      <p class="jon__text body"><?php echo $jon01__txt ?></p>
      <a href="<?php echo $jon01__url ?>" target="_blank" class="btn btn--plain">En savoir plus</a>
    </div>
    <div class="jon__overlay">
      <?php if( $jon01__img ): ?>
        <img src="<?php echo esc_url($jon01__img['url']); ?>" alt="<?php echo esc_attr($jon01__img['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
  <div class="jon__container jon__newsletter">
    <div class="jon__content">
      <h2 class="jon__title subheading">
        <?php _e("S'inscrire à la newsletter","lesailleurs") ?>
      </h2>
      <p class="jon__text body"><?php echo $jon02__txt ?></p>
      <a href="<?php echo $jon02__url ?>" target="_blank" class="btn btn--plain">En savoir plus</a>
    </div>
    <div class="jon__overlay">
      <div>
        <?php if( $jon02__img ): ?>
          <img src="<?php echo esc_url($jon02__img['url']); ?>" alt="<?php echo esc_attr($jon02__img['alt']); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
