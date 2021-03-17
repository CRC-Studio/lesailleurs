<?php


/*      Initialisation & options          */

require_once( __DIR__ . '/functions/options.php');
require_once( __DIR__ . '/functions/include.php');
require_once( __DIR__ . '/functions/minimize__back.php');
require_once( __DIR__ . '/functions/minimize__front.php');
require_once( __DIR__ . '/functions/multilangue.php');
// require_once( __DIR__ . '/functions/acf-fields.php');

/*        ADD Custom Type        */

require_once( __DIR__ . '/functions/where--is--ailleurs.php');

/*        ADD Custom Type        */

require_once( __DIR__ . '/functions/custom-post-type__auteurs.php');
require_once( __DIR__ . '/functions/custom-post-type__oeuvre.php');
require_once( __DIR__ . '/functions/custom-post-type__selection.php');
require_once( __DIR__ . '/functions/custom-post-type__partenaire.php');
require_once( __DIR__ . '/functions/custom-post-type__edition.php');
require_once( __DIR__ . '/functions/custom-post-type__evenement.php');

/*        ADD Custom Taxonomy       */

require_once( __DIR__ . '/functions/custom-taxo__type-evenement.php');
require_once( __DIR__ . '/functions/custom-taxo__profession.php');
require_once( __DIR__ . '/functions/custom-taxo__nationalite.php');
require_once( __DIR__ . '/functions/custom-taxo__thematique.php');
require_once( __DIR__ . '/functions/custom-taxo__premiere.php');
require_once( __DIR__ . '/functions/custom-taxo__modalite.php');
require_once( __DIR__ . '/functions/custom-taxo__mention.php');
require_once( __DIR__ . '/functions/custom-taxo__langue.php');
require_once( __DIR__ . '/functions/custom-taxo__format.php');
require_once( __DIR__ . '/functions/custom-taxo__pays.php');


/*     Custom HTML wp_nav_menu()      */

require_once( __DIR__ . '/functions/custom_menu.php');
require_once( __DIR__ . '/functions/custom_html_wp_nav_menu.php');


/**
* Ici, on peut tester des trucs affreux ici
*/



// Fonction ACF pour Query des field dans subfiel de fiel à l'infini
// ↪ Necessaire pour la page single-auteur.php

function my_posts_where( $where ) {
	$where = str_replace("meta_key = 'slc_$", "meta_key LIKE 'slc_%", $where);
	return $where;
}
add_filter('posts_where', 'my_posts_where');
