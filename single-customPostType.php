<?php

get_header(); ?>

<?php $loop = new WP_Query(
			array(
			'post_type' 		=> 'customPostType',
			'order'  			=> 'desc',
      'post_parent' => 0,
			'posts_per_page'	=> -1
			)
		);
		if ($loop->have_posts()) :?>
    <section class="row">
      <div class="col l12">
          <h2 class="display1">Discover our other services</h2>
      </div>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


      <article class="col l4">
      	<a href="<?php the_permalink() ?>" title="Voir : <?php the_title()?>" class="no--hover">

          <h3 class="display1"><?php the_title()?></h3>
      		<?php
      			$excerpt = get_the_excerpt();
      			if(strlen($excerpt) > 250) $excerpt = substr($excerpt, 0, 250).'...';
      		 ?>

          <p><?php echo $excerpt; ?></p>

          <a href="<?php the_permalink() ?>" class="btn btn--outline">read more</a>
      	</a>
      </article>

      <?php endwhile; ?>
    </section>
<?php endif; wp_reset_query(); ?>


<?php get_footer(); ?>
