
<?php if( have_rows('gal') ): ?>
  <?php while( have_rows('gal') ): the_row(); ?>


  <div class="gal row">
    <?php
    $images = get_sub_field('gal__gal');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $images ): ?>
    <ul class="gal__images is--not--hover">
      <?php foreach( $images as $image_id ): ?>
        <li class="gal__image is--lightbox">
          <div class="image-full__ratio-1-1">
            <div class="image-full__content is--fullsize">
              <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <?php if( get_sub_field('gal__legende') ): ?>
    <div class="gal_legende l4 m4">
      <span class="color__legende body"><?php the_sub_field('gal__legende') ?></span>
    </div>
  <?php endif; ?>
  </div>

<?php endwhile; ?>
<?php endif; ?>
