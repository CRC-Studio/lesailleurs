


<?php if( have_rows('ebs') ): ?>
  <?php while( have_rows('ebs') ): the_row(); ?>

    <?php $ebs__grp01 = get_sub_field('ebs__grp01'); ?>
    <?php $ebs__grp02 = get_sub_field('ebs__grp02'); ?>


    <?php if ($ebs__grp01['ebs__link'] || $ebs__grp02['ebs__titre'] || $ebs__grp02['eds__editor'] ): ?>


    <section class="ebs bigm <?php echo esc_attr( $ebs__grp01['ebs__readmore'] ); ?> white--isnt--white">
      <div class="ebs__container col l8 m1">

        <?php if( have_rows('ebs__grp01') ): ?>
          <?php while( have_rows('ebs__grp01') ): the_row(); ?>

            <?php // Repeater Ajout de liens ?>

            <?php if( have_rows('ebs__link') ): ?>
              <div class="ebs__links">
                <ul>
                  <?php while( have_rows('ebs__link') ): the_row(); ?>
                    <li>
                      <?php
                      $link = get_sub_field('ebs__link-url');
                      if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                      <?php endif; ?>
                    </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>

        <div class="ebs__content">
          <?php if( have_rows('ebs__grp02') ): ?>
            <?php while( have_rows('ebs__grp02') ): the_row(); ?>

              <?php // Ajout du titre ?>

              <?php if( get_sub_field('ebs__titre') ): ?>
                <div class="row ebs__titre">
                  <h2 class="subheading"><?php the_sub_field('ebs__titre') ?></h2>
                  <div class="divider"></div>
                </div>
              <?php endif; ?>

              <?php // Go pour un peu de Flexible Content ?>

              <?php if( have_rows('eds__editor') ): ?>
                <?php while( have_rows('eds__editor') ): the_row(); ?>


                  <?php // Flexible Content : bloc texte ?>
                  <?php if( get_row_layout() == 'bloc_texte' ): ?>
                    <div class="row ebs__block-text lead_paragraph">
                      <?php the_sub_field('bloc_texte'); ?>
                    </div>



                    <?php // Flexible Content : bloc texte ?>
                  <?php elseif( get_row_layout() == 'bloc_grand_texte' ): ?>
                    <div class="row ebs__block-gd-text display1">
                      <?php the_sub_field('bloc_grand_texte'); ?>
                    </div>



                    <?php // Flexible Content : citation ?>
                  <?php elseif( get_row_layout() == 'bloc_citation' ): ?>
                    <div class="row ebs__block-citation">
                      <div class="ebs__citation display1">
                        <?php the_sub_field('bloc_citation'); ?>
                      </div>
                      <?php if( get_sub_field('bloc_citation_legende') ): ?>
                        <div class="ebs__divider">
                          <div class="divider-h"></div>
                        </div>
                        <span class="color__legende body"><?php the_sub_field('bloc_citation_legende') ?></span>
                      <?php endif; ?>
                    </div>



                    <?php // Flexible Content : Gallery  ?>
                  <?php elseif( get_row_layout() == 'bloc_image' ): ?>

                  </div>
                </div>
                <?php get_template_part('blocks/block__galerie-img') ?>
                <?php if( $link ): ?>
                  <div class="ebs__container col l6 m3">
                  <?php else: ?>
                    <div class="ebs__container col l8 m1">
                    <?php endif; ?>
                    <div class="ebs__content">
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>

              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
        <?php if( $link ): ?>
          <div class="ebs__container col l6 m3">
          <?php else: ?>
            <div class="ebs__container col l8 m1">
          <?php endif; ?>
            <div class="ebs__content">
              <button class="btn btn--outline ebs__readmore-btn"><?php _e("En savoir plus","lesailleurs") ?></button>
            </div>
          </div>

        <div class="ebs__overlay is--fullsize"></div>

      </section>

    <?php endif; ?>

    <?php endwhile; ?>
  <?php endif; ?>
