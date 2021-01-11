<?php
/*
Theme Name:     methodic.design
Description:    methodic.design
Author:         methodic.design
Author URI:     methodic.design
Template:       twentyseventeen
Tags:           responsive-layout
Version:        1.0

*/

?>

<header class="l-header row">
	<div class="col l4">
		<a href="<?php echo home_url(); ?>" class="headline"><?php bloginfo( 'name' ); ?></a>


		<!-- <div class="l-header__logo">
			<a href="<?php echo home_url(); ?>">
				<?php get_template_part('assets/img/inline', 'logo.svg'); ?>
			</a>
		</div> -->

	</div>

	<nav class="l-header__nav col l8">

		<?php	$menu_secondaire = wp_nav_menu(
					array(
							'menu'						=> 'Menu secondaire',
							'container'				=> false,
							'items_wrap' 			=> '<ul class="nav__subnav menu">%3$s</ul>',
							'echo'						=> false
						)
					);?>

		<?php if ( $menu_secondaire ): ?>
    <?php echo $menu_secondaire; ?>
			<button type="button" class="btn__menu-more-vert"><?php get_template_part('assets/img/inline', 'icon_more-vert.svg'); ?></button>
		<?php endif; ?>

		<?php wp_nav_menu( array(
		    'menu'						=> 'Menu principal',
				'container'				=> false,
				'items_wrap' 			=> '<ul class="nav__main">%3$s</ul>'
			) );
		?>



	</nav>
	<div class="nav__button">
		<span id="mobile_control_1" class="">&nbsp;</span>
		<span id="mobile_control_2" class="">&nbsp;</span>
		<span id="mobile_control_3" class="">&nbsp;</span>
	</div>
</header>
