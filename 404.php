<?php

get_header(); ?>
<?php get_template_part('parts/nav') ?>

<main class="main l-error">
	<section class="cover cover__big cover__color02">
		<div class="cover__container cover__text isv--parent">
			<div class="cover__content">
				<h1 class="cover__title display3"><?php _e("Erreur","lesailleurs") ?></h1>
				<div class="cover__divider divider"></div>
				<span class="cover__subheading lead_paragraph"><?php _e("Vous arrivez sur les rivages du Styx. Après s'étendent les Terra Incognita.","lesailleurs") ?><br>  <a href="<?php echo home_url(); ?>"><?php _e("Retour à la page d'accueil","lesailleurs") ?></a>.</span>
			</div>
		</div>
		<div class="cover__container cover__image">
			<div class="cover__is--empty"></div>
		</div>

	</section>
</main>

<?php get_footer(); ?>
