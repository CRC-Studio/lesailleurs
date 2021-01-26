
<?php if( have_rows('bigl') ): ?>
  <?php while( have_rows('bigl') ): the_row(); ?>

    <section class="biglinks">
      <div class="row bigl__titre">
        <h2 class="subheading"><?php the_sub_field('bigl__titre') ?></h2>
        <div class="divider"></div>
      </div>
    <?php if( have_rows('bigl__liens') ): ?>

        <ul class="bigl__links">
          <?php while( have_rows('bigl__liens') ): the_row(); ?>
            <li class="bigl__link">
              <span class="col l12 display3"><a href="<?php the_sub_field('bigl__url'); ?>" target='_blank'><?php the_sub_field('bigl__texte'); ?></a></span>
              <span class="col l12 subheading"><?php the_sub_field('bigl__caption'); ?></span>
            </li>
          <?php endwhile; ?>

    <?php endif; ?>

  </ul>
</section>
  <?php endwhile; ?>
<?php endif; ?>
