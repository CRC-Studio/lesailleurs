<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php if ( is_front_page() ) {  bloginfo( 'name' ); } else { wp_title(''); echo ' | ';  bloginfo( 'name' ); } ?></title>
		<meta content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
		<!-- <meta content="" name="description">
		<meta content="" name="keywords">
		<meta name="contact" content="oripeau@la-casse.com"> -->
		<meta name="robots" content="index, follow, all">
		<meta name="googlebot" content="index, follow, all">
		<meta name="googlebot-image" content="index, follow, all">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#00233f">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#00233f">
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/js.cookie.js"></script>
		<?php wp_head(); ?>
	</head>


<body id="<?php if ( is_front_page() ) { echo "front_page";  } else{ print strtolower(get_the_title()); }; ?>" <?php body_class(); ?>>


<?php if( get_field('active--dev_mode', 'option') == 'active' ): ?>
	<?php get_template_part('template/dev_mode') ?>

<?php else:  ?>
	<main class="main">
		<?php get_template_part('parts/nav') ?>
<?php endif; ?>
