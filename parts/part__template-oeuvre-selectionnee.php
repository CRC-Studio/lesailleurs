

<?php $backup_post = $post // Utile pour relancer la loop après un wp_reset_postdata(); ?>

<div class="slc__infos">
	<div class="slc__infos-top">
		<?php // Titre ?>
		<h3 class="lead_paragraph"><?php the_title(); ?></h3>

		<?php // Artites principaux ?>

		<?php	$featured_posts = get_field('oeu__main-auteurs'); ?>
		<?php if( $featured_posts ): ?>
			<span class="body liste__de__lien">
			<?php _e("Artites principaux : ","lesailleurs") ?>
			<?php foreach( $featured_posts as $post ): ?>
				<?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly. ?>
			<?php $post = $backup_post // Utile pour relancer la loop après un wp_reset_postdata(); ?>
			</span>
		<?php endif; ?>


		<?php // Année de production ?>

		<?php if( get_field('oeu__date') ): ?>
			<span class="body"><?php _e("Année de production : ","lesailleurs") ?><?php the_field('oeu__date'); ?></span>
		<?php endif; ?>
		<div class="divider-h"></div>
	</div>


	<?php // Thématiques ?>

	<div class="slc__hashtag">
		<ul>
			<?php	$featured_posts = get_field('oeu__main-auteurs'); ?>
			<?php if( $featured_posts ): ?>
				<?php foreach( $featured_posts as $post ): ?>
					<?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>
					<li><a href="<?php the_permalink(); ?>">#<?php the_title(); ?></a></li>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly. ?>
				<?php $post = $backup_post // Utile pour relancer la loop après un wp_reset_postdata(); ?>
			<?php endif; ?>
			<?php $terms = get_field('oeu__format');
			if( $terms ): ?>
			<?php foreach( $terms as $term ): ?>
				<li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>">#<?php echo esc_html( $term->name ); ?></a></li>
			<?php endforeach; ?>
		<?php endif; ?>
		<?php $terms = get_field('oeu__thematique');
		if( $terms ): ?>
		<span>
			<?php foreach( $terms as $term ): ?>
				<li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>">#<?php echo esc_html( $term->name ); ?></a></li>
			<?php endforeach; ?>
		</span>
	<?php endif; ?>
</ul>
</div>
</div>
<div class="slc__img is--zoooom--box">
	<div class="image-full__content is--fullsize">
		<?php the_post_thumbnail(); ?>
	</div>
</div>
<div class="tooltip tooltip__is--top is--followmouse">
	<div class="tooltip__content"><?php _e("En savoir plus","lesailleurs") ?></div>
</div>
<div class="slc__overlay is--fullsize"></div> <?php // Ici, on ajoute l'effet Brouillard ?>
