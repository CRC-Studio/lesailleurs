
<?php if( have_rows('acn') ): ?>
  <?php while( have_rows('acn') ): the_row(); ?>

    <?php // Extraction des données ?>

    <?php if( have_rows('acn__grp01') ): ?>
      <?php while( have_rows('acn__grp01') ): the_row(); ?>

        <?php $acn__link = get_sub_field('acn__link'); ?>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('acn__grp02') ): ?>
      <?php while( have_rows('acn__grp02') ): the_row(); ?>

        <?php $acn__titre = get_sub_field('acn__titre'); ?>
        <?php $acn__repeater = get_sub_field('acn__repeater'); ?>

      <?php endwhile; ?>
    <?php endif; ?>



<?php // Block accordion ?>


    <section class="acn">
      <div class="col l4">
        <h2 class="display1"><?php echo $acn__titre;?></h2>

        <?php // Reapeter Lien ?>

        <?php if( $acn__link ): ?>
          <div class="acn__links">
            <span>D’autres questions ?</span>
            <div class="divider"></div>
            <ul>
              <?php foreach( $acn__link as $links ) : ?>
                <?php
                $link = $links['acn__link-url'];
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <li class="acn__link"><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                <?php endif; ?>
              <?php endforeach ?>
            </ul>
          </div>

        <?php endif; ?>

      </div>

      <?php // Reapeter accordion ?>

      <?php if( $acn__repeater ): ?>
        <ul class="acn__acn col l8">
          <?php foreach( $acn__repeater as $row ) : ?>
            <li class="accordion">
              <div class="accordion__titre">
                <h3 class="display1"><?php echo $row['acn__subtitle']; ?></h3>
                <div class="accordion__icon">
                  <?php get_template_part('assets/img/inline', 'icon_arrow_accordion.svg'); ?>
                </div>
              </div>
              <div class="accordion__container lead_paragraph">
                <?php echo $row['acn__content']; ?>
              </div>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif; ?>


    </section>
  <?php endwhile; ?>
<?php endif; ?>
