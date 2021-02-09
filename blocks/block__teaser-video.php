
<?php if( have_rows('vdo') ): ?>
  <?php while( have_rows('vdo') ): the_row(); ?>

    <?php if( get_sub_field('vdo__embed') ): ?>
      <section class="vdo">
        <div class="l8 m2">

          <?php // Ajout du titre ?>

          <?php if( get_sub_field('vdo__titre') ): ?>
            <div class="row vdo__titre">
              <h2 class="subheading"><?php the_sub_field('vdo__titre') ?></h2>
              <div class="divider"></div>
            </div>
          <?php endif; ?>

          <?php // Ajout de l'embed des Enfers ?>


          <div class="row vdo__vdo">
            <?php the_sub_field('vdo__embed'); ?>
          </div>


          <?php // Ajout de la légende ?>

          <?php if( get_sub_field('vdo__legende') ): ?>
            <div class="row vdo__legende">
              <span class="divider-h"></span>
              <span class="color__legende lead_paragraph"><?php the_sub_field('vdo__legende') ?></span>
            </div>
          <?php endif; ?>

        </div>
      </section>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
