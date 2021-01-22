


<div class="dev_overlay is--activate">
	<div class="message">
		<h1>methodic.design</h1>
		<p>Un studio de design graphique et de webdesign qui se développe doucement.</p>
		<p>"Le graphisme est l’art d’agencer les informations visuelles de façon harmonieuses et rendre la lecture didactiques. L’harmonie se révèle lorsque les éléments d’une composition ont un juste rapports les uns avec les autres. Typographies, formes, couleurs sont autant d’élèments que le graphiste doit gérer."</p>


		<div class="is--bottom">
			<a href="https://twitter.com/MethodicDesign" target="_blank">twitter</a> |
			<a href="https://www.instagram.com/methodic.design/" target="_blank">instagram</a> |
			<a href="https://www.pinterest.fr/methodicdesign/" target="_blank">pinterest</a> |
			<a href="https://methodicdesign.tumblr.com/" target="_blank">tumblr</a> |
			<a href="http://www.behance.net/methodicdesign" target="_blank">behance</a>
			<p>ouverture | 09—2018</p>
		</div>
	</div>
	<div class="log">
		<h1>Journal de développement</h1>

		<?php $loop = new WP_Query(
			array(
			'post_type' 		=> 'Journal',
			'meta_key' 			=> 'journal_date',
			'orderby' 			=> 'meta_value_num',
			'public'			=> true,
			'post_status'		=> 'publish',
			'posts_per_page'	=> -1
			)
		); while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="log__entrie">
			<span class="log__date"><?php the_field('journal_date'); ?></span>
			<span class="log__text"><?php the_field('journal_texte'); ?></span>
		</div>


		<?php endwhile; wp_reset_query(); ?>

	</div>
	<div class="center">
		<div class="circle"></div>
	</div>
</div>



<main class="main" style="display: none">
