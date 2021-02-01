

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

	<div class="l-header__nav">
		<div class="l6 l-header__scene"></div>
		<nav class="l6">
		<?php wp_nav_menu( array(
		    'menu'						=> 'Menu principal',
				'theme_location'  => 'primary-menu',
				'items_wrap' 			=> '<ul class="nav__main">%3$s</ul>',
				'container'				=> true
			) );
		?>
	</nav>
	</div>
	<div class="nav__button">
		<span id="mobile_control_1" class="">&nbsp;</span>
		<span id="mobile_control_2" class="">&nbsp;</span>
		<span id="mobile_control_3" class="">&nbsp;</span>
	</div>
</header>
