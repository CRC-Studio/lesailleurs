

<?php	$primary_menu = wp_nav_menu(
	array(
		'menu'						=> 'Menu principal',
		'theme_location'  => 'primary-menu',
		'items_wrap' 			=> '<ul class="nav__main display1">%3$s</ul>',
		'container'				=> true,
		'echo'						=> false
	)
);
$secondary_links = wp_nav_menu(
	array(
		'menu'						=> 'Liens secondaires',
		'theme_location'  => 'secondary-links',
		'items_wrap' 			=> '<ul>%3$s</ul>',
		'container'				=> false,
		'echo'						=> false
	)
);
$language_menu = wp_nav_menu(
	array(
		'menu'						=> 'Language Menu',
		'theme_location'  => 'language-menu',
		'items_wrap' 			=> '<ul>%3$s</ul>',
		'container'				=> false,
		'echo'						=> false
	)
);
?>



<header class="l-header row">
	<div class="l3">
		<a href="<?php echo home_url(); ?>" class="headline tooltip--hover">
			<?php bloginfo( 'name' ); ?>
			<div class="tooltip tooltip_top">
				<div class="tooltip__content">A tooltip</div>
			</div>
		</a>
	</div>
	<div class="l-header__baseline l3">
		<span>LE FESTIVAL</span>
		<span>QUI EXPLORE L'IMMERSION</span>
	</div>



	<div class="nav__button">
		<span id="mobile_control_1" class="">&nbsp;</span>
		<span id="mobile_control_2" class="">&nbsp;</span>
		<span id="mobile_control_3" class="">&nbsp;</span>
	</div>

	<?php // menu Changement de Villes ?>
	<div class="l3">
		
	</div>


	<?php // menu Changement de Langues ?>

	<?php if ( $language_menu ): ?>
		<div class="l-header__nav-language l3">
			<?php echo $language_menu; ?>
		</div>
		<?php endif; ?>



	<?php // menu Fullscreen ?>

	<div class="l-header__nav">
		<div class="l6 l-header__scene"></div>
		<div class="l6 l-header__content">

			<?php // menu principal ?>

			<?php if ( $primary_menu ): ?>
				<nav class="l-header__nav-main">
					<?php echo $primary_menu; ?>
				</nav>


				<div class="divider"></div>
			<?php endif; ?>

			<?php // menu secondaire ?>



			<?php // liens secondaire ?>


			<?php if ( $secondary_links ): ?>
				<div class="l-header__links row body">
					<?php echo $secondary_links; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

</header>
