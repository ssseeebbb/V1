<?php
 	include_once "lib/swift_required.php";
echo 'coucou';
    // CONDITIONS NOM
   if ( (isset($_POST['nom'])) && (strlen(trim($_POST['nom'])) > 0) ):
        $nom = stripslashes(strip_tags($_POST['nom']));
    else:
        echo "Merci d'écrire un nom <br />";
        $nom = '';
    endif;

    // CONDITIONS SUJET
    if ( (isset($_POST['subject'])) && (strlen(trim($_POST['subject'])) > 0) ):
        $sujet = stripslashes(strip_tags($_POST['subject']));
    else:
        echo "Merci d'écrire un sujet <br />";
        $sujet = '';
    endif;

    // CONDITIONS EMAIL
    if ( (isset($_POST['mail'])) && (strlen(trim($_POST['mail'])) > 0) && (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) ):
        $email = stripslashes(strip_tags($_POST['mail']));
    elseif (empty($_POST['mail'])):
        echo "Merci d'écrire une adresse email <br />";
        $email = '';
    else:
        echo 'Email invalide :(<br />';
        $email = '';
    endif;

    // CONDITIONS MESSAGE
    if ( (isset($_POST['message'])) && (strlen(trim($_POST['message'])) > 0) ):
        $message = stripslashes(strip_tags($_POST['message']));
    else:
        echo "Merci d'écrire un message<br />";
        $message = '';
    endif;


    $objet        = "Springbok -" . $sujet;
 	$contenu      = "Nom de l'expéditeur : " . $nom . "\r\n";
    $contenu      = $message."\r\n\n";

	$from = array($email => $nom);
 	// Email recipients
 	$to = array(
       'sebastien.goldberg@hotmail.com'=>'Sebastien Goldberg'
       );
       
 	// Login credentials
 	$username = 'ssseeebbb	';
 	$password = 'Sebastien007.';

 	// Setup Swift mailer parameters
 	$transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
 	$transport->setUsername($username);
 	$transport->setPassword($password);
 	$swift = Swift_Mailer::newInstance($transport);

 	// Create a message (subject)
 	$message = new Swift_Message($objet);

 	// attach the body of the email
 	$message->setFrom($from);
 	$message->setBody($html, 'text/html');
 	$message->setTo($to);
 	$message->addPart($message, 'text/plain');
	echo 'coucou';
 	// send message 
 	if ($recipients = $swift->send($message, $failures))
 	{
     	// This will let us know how many users received this message
     	echo 'Message sent out to '.$recipients.' users';
 	}
 	// something went wrong =(
 	else
 	{
     	echo "Something went wrong - ";
     	print_r($failures);
 	}
