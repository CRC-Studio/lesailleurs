
<?php if( have_rows('doc') ): ?>
  <?php while( have_rows('doc') ): the_row(); ?>


    <?php if( get_sub_field('doc__titre') || get_sub_field('doc__intro') || get_sub_field('doc__docs') ): ?>


    <section class="doc bigm">

      <?php // Gestion de l'introduction ?>

      <div class="row m1 l5 doc__intro">
        <?php if( get_sub_field('doc__titre') ): ?>
          <div class="row doc__titre">
            <h2 class="subheading"><?php the_sub_field('doc__titre') ?></h2>
            <div class="divider"></div>
          </div>
        <?php endif; ?>
        <?php if( get_sub_field('doc__intro') ): ?>
          <div class="row doc__block-text lead_paragraph">
            <?php the_sub_field('doc__intro'); ?>
          </div>
        <?php endif; ?>
      </div>

      <?php // Gestion des documents avec avec un fields Flexible Content.  ?>
      <?php // ↳ On utilise des Flexible Content au cas où des docs seront héberger Ailleurs  ?>

      <div class="row doc__docs">

        <?php if( have_rows('doc__docs') ): ?>
          <?php while( have_rows('doc__docs') ): the_row(); ?>

            <?php if( get_row_layout() == 'doc__local' ): ?>
              <?php $file = get_sub_field('doc__file');
              if( $file ): ?>
              <a href="<?php echo $file['url']; ?>" target="_blank">


              <?php if( have_rows('doc__group02') ): ?>
                <?php while( have_rows('doc__group02') ): the_row(); ?>
                  <?php $image = get_sub_field('doc__cover'); ?>
                  <?php  $isf__vit = random_int(1, 3); ?>


                  <div class="doc__doc <?php the_sub_field('doc__size'); ?> is--float <?php if (isset($isf__vit)) {echo " isf__vit".$isf__vit;}; ?>">
                    <div class="doc__wrapper">
                      <div class="doc__container">
                        <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                      </div>
                      <div class="doc__overlay is--fullsize">
                        <div>
                          <p class="lead_paragraph"><?php the_sub_field('doc__title'); ?></p>
                          <span class="subheading"><?php the_sub_field('sous-titre'); ?></span>
                        </div>
                        <span class="doc__read-more subheading">↘ Télécharger</span>
                      </div>
                    </div>
                  </div>

                <?php endwhile; ?>
              <?php endif; // Endif du doc__group02  ?>
              </a>
            <?php endif; // Endif du if( $file ): ?>
          <?php endif; // Endif if( get_row_layout() == 'doc__local' ): ?>


        <?php endwhile; ?>
      <?php endif; ?>


    </div>

  </section>
  <?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
