
<?php

	require_once("../../../../wp-load.php");

	$site = $_POST['url'];
	$redirection = rtrim($_POST['the_permalink'],'/')."?message=done";

	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$sujet = $_POST['sujet'];
	$message = $_POST['message'];

	$formcontent="Bonjour à tous, \n \n$nom ($email ) vient d'envoyer un message via le formulaire de contact de $site : \n \n <b>Message :</b>\n$message \n \n";
	$mailheader = "From: $email \r\n";


	if ( empty($email) || empty($message) || empty($sujet) ) :
  	die("Error!");
	endif;

	$all_users = get_users();
	foreach ($all_users as $user) {
		mail( esc_html($user->user_email), $sujet, $formcontent, $mailheader) or die("Error!");
	}

	header('location:'.$redirection);
?>
