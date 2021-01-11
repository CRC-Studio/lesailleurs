
<?php

	require_once("../../../../wp-load.php");

	$site = $_POST['url'];
	$redirection = rtrim($_POST['the_permalink'],'/')."?message=done";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$compagny = $_POST['compagny'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$format = $_POST['format'];
	$date = $_POST['date'];
	$heure = $_POST['heure'];
	$nbPersonne = $_POST['nb-personne'];

	$formcontent="Bonjour, \n \n vous venez de recevoir un message via le formulaire de contact de $site. \n Le message est de $fname $lname. \n \n Entreprise : $compagny  \n Email : $email \n Téléphone: $phone \n \n ------------------------  \n \n Détail de la réservation : \n Date : $date  \n Heure : $heure \n Format: $format \n Nombre de personne : $nbPersonne \n \n ------------------------  \n \n $message \n \n";
	$subject = $_POST['subject'];
	$mailheader = "From: $email \r\n";


	if ( empty($email) || empty($message) || empty($subject) ) :
  	die;
	endif;


	if( have_rows('email__formulaire','option') ):
	    while ( have_rows('email__formulaire','option') ) : the_row();
					mail( get_sub_field('email__destinataire','option'), $subject, $formcontent, $mailheader) or die("Error!");
	    endwhile;
	endif;

	header('location:'.$redirection);
?>
