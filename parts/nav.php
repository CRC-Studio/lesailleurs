

<?php	$primary_menu = wp_nav_menu(
	array(
		'menu'						=> 'Menu principal',
		'theme_location'  => 'primary-menu',
		'items_wrap' 			=> '<ul class="nav__main display1 is--not--hover">%3$s</ul>',
		'container'				=> true,
		'echo'						=> false
	)
);
$secondary_links = wp_nav_menu(
	array(
		'menu'						=> 'Liens secondaires',
		'theme_location'  => 'secondary-links',
		'items_wrap' 			=> '<ul class="is--not--hover">%3$s</ul>',
		'container'				=> false,
		'echo'						=> false
	)
);
$language_menu = wp_nav_menu(
	array(
		'menu'						=> 'Language Menu',
		'theme_location'  => 'language-menu',
		'items_wrap' 			=> '<ul class="is--not--hover">%3$s</ul>',
		'container'				=> false,
		'echo'						=> false
	)
);
?>



<header class="l-header row">
	<div class="l3 l-header__logo">
		<a href="<?php echo home_url(); ?>" class="headline">
			<?php
				// bloginfo( 'name' );
				get_template_part('assets/img/inline', 'logo.svg');
			?>
		</a>
	</div>
	<div class="l-header__baseline l3">
		<span><?php _e("LE FESTIVAL","lesailleurs") ?></span>
		<span><?php _e("QUI EXPLORE L'IMMERSION","lesailleurs") ?></span>
	</div>

	<div class="l-header__nav-fixed">
		<?php // menu Changement de ville ?>

		<div class="l-header__nav-editons">
			<!-- <span class="body">Explorer</span>
			<div class="divider-h"></div>
			<span class="body">Paris</span>
			<label class="switch tooltip--hover">
				<input type="checkbox">
				<span class="slider round"></span>
				<div class="tooltip tooltip_top">
					<div class="tooltip__content">Coming Soon!</div>
				</div>
			</label>
			<span>Arles</span> -->
		</div>

		<div class="l-header__nav-r">

			<?php // menu Changement de Langues ?>

			<?php if ( $language_menu ): ?>
				<div class="l-header__nav-language isv--parent">
					<?php echo $language_menu; ?>
				</div>
			<?php endif; ?>

			<?php // button Menu ?>

			<div class="nav__button">
				<span id="mobile_control_1" class="">&nbsp;</span>
				<span id="mobile_control_2" class="">&nbsp;</span>
				<span id="mobile_control_3" class="">&nbsp;</span>
			</div>
		</div>
	</div>




	<?php // menu Fullscreen ?>


	<?php // couverture ?>

	<div class="l-header__nav cover__big">
		<div class="l-header__scene cover__color09">
			<?php $images = get_field('edt__menu-imgs', HOMEPAGEID); ?>
			<?php if ($images): ?>
				<?php $rand = array_rand($images, 1); // On choisi une image au hasard dans la galerie ?>
				<div class="image-full">
					<div class="image-full__content">
						<img src="<?php echo $images[$rand]['url']; ?>" alt="<?php echo $images[$rand]['alt']; ?>" />
					</div>
				</div>
			<?php else: ?>
				<div class="cover__is--empty"></div>
			<?php endif; ?>
		</div>

		<?php // menus ?>

		<div class="l-header__content">

			<?php // menu principal ?>

			<?php if ( $primary_menu ): ?>
				<nav class="l-header__nav-main">
					<?php echo $primary_menu; ?>
				</nav>
			<?php endif; ?>

			<?php // menu secondaire ?>

			<?php if( have_rows('edt__menu',HOMEPAGEID) ): ?>
				<div class="divider"></div>
				<nav class="nav__secondaire color__legende is--not--hover">
					<?php while( have_rows('edt__menu',HOMEPAGEID) ): the_row(); ?>
						<?php
						$link = get_sub_field('edt__menu-url',HOMEPAGEID);
						if( $link ):
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<li>
								<a class="lead_paragraph" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							</li>
						<?php endif; ?>
					<?php endwhile; ?>
				</nav>
			<?php endif; ?>

			<?php // liens secondaire ?>

			<?php if ( $secondary_links ): ?>
				<div class="l-header__links row body">
					<?php echo $secondary_links; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

</header>
