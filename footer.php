
<footer class="l-footer row">
		<?php	$footer_links = wp_nav_menu(
			array(
				'menu'						=> 'Liens Footer',
				'theme_location'  => 'footer-links',
				'items_wrap' 			=> '<ul class="row is--not--hover">%3$s</ul>',
				'container'				=> false,
				'echo'						=> false
			)
		);?>
		<?php	$secondary_links = wp_nav_menu(
			array(
				'menu'						=> 'Liens secondaires',
				'theme_location'  => 'secondary-links',
				'items_wrap' 			=> '<ul>%3$s</ul>',
				'container'				=> false,
				'echo'						=> false
			)
		);?>


	<?php if ( $footer_links ): ?>
		<section class="row l-footer__nav display1">
			<?php echo $footer_links; ?>
		</section>
	<?php endif; ?>


	<?php if ( $secondary_links ): ?>
		<section class="row l-footer__rs">
			<?php echo $secondary_links; ?>
		</section>
	<?php endif; ?>

	<?php wp_footer(); ?>
</footer>
</body>
</html>
