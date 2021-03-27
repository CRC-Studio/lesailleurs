<li class="eve__eve row" onclick="location.href='<?php the_permalink(); ?>'">


	<?php //Sortir la Taxo Filtres pour qu'ils puissent être utilisé en JS ?>
	<?php $terms = get_field('eve__filtre');
	if( $terms ): ?>
	<div class="eve__filtres">
		<ul>
		<?php foreach( $terms as $term ): ?>
			<li class="eve__filtre"><?php echo esc_html( $term->name ); ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>



	<div class="col l2">
		<p class="body"><?php the_field('eve__start');?>
			<br><a href="<?php the_field('eve__lieu-url') ?>" target="_blank"><?php the_field('eve__lieu');?></a><?php if( get_field('eve__lieu') ): ?>, <?php the_field('eve__lieu-ville') ?><?php endif; ?></p>
		</div>
		<div class="col l6 eve__info">
			<div class="eve__img">
				<div class="image-full__ratio-1-1">
					<div class="image-full__content is--fullsize">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
			<div class="eve__title">
				<h2 class="display1"><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="col l4 eve__desc-courte">
			<p class="caption color__legende"><?php the_field('eve__desc-courte'); ?></p>
		</div>
		<div class="eve__overlay is--fullsize">
			<div class="col l4 eve__overlay--content">
				<?php $terms = get_field('eve__modalite');
				if( $terms ): ?>
				<span class="liste__de__lien">
					<?php foreach( $terms as $term ): ?>
						<a class="lead_paragraph color__legende"><?php echo esc_html( $term->name ); ?></a>
					<?php endforeach; ?>
				</span>
			<?php endif; ?>
			<span class="subheading"><?php _e("En savoir plus","lesailleurs") ?> →</span>
		</div>
	</div>
</li>
