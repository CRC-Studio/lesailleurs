
<?php if( have_rows('couverture') ): ?>
  <?php while( have_rows('couverture') ): the_row(); ?>

    <?php // Extraction des données ?>

    <?php if( have_rows('cover__grp01') ): ?>
      <?php while( have_rows('cover__grp01') ): the_row(); ?>

        <?php $soustitre = get_sub_field('sous-titre'); ?>
        <?php $cover__size = get_sub_field('cover__size'); ?>
        <?php $cover__color = get_sub_field('cover__color'); ?>

      <?php endwhile; ?>
    <?php endif; ?>


    <?php // Construction du HTML ?>

    <section class="cover <?php echo $cover__size." ".$cover__color ?>">
      <div class="cover__container cover__text isv--parent">
        <div class="cover__content">
          <h1 class="cover__title display3"><?php the_title(); ?></h1>
          <?php if( $soustitre ): ?>
            <div class="cover__divider divider"></div>
            <span class="cover__subheading subheading"><?php echo $soustitre ?></span>
          <?php endif; ?>
        </div>
      </div>
      <div class="cover__container cover__image">
        <?php $image = get_sub_field('cover__img'); ?>
        <?php if( !empty( $image ) ): ?>
          <div class="image-full">
            <div class="image-full__content">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="cover__img-overlay"></div>
          </div>
        <?php else: ?>
        <div class="cover__is--empty"></div>
      <?php endif; ?>
    </div>
    <?php if( $cover__size == "cover__big" ): ?>
    <div class="cover__scroll-down">
      <?php get_template_part('assets/img/inline', 'icon_scroll-down.svg'); ?>
    </div>
    <?php endif; ?>
  </section>
<?php endwhile; ?>
<?php endif; ?>
