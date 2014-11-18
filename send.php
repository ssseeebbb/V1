<?php

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

 $url = 'https://api.sendgrid.com/';
 $user = 'ssseeebbb';
 $pass = 'Sebastien007.'; 

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'sebastien.goldberg@hotmail.com	',
      'subject' => $objet,
      'html' => 'testing body',
      'text' => $contenu,
      'from' => $email,
   );
echo 'request';
 $request = $url.'api/mail.send.json';
echo'session';
 // Generate curl request
 $session = curl_init($request);
echo'curl-setopt';
 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);
echo'curl-setopt2';

 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
echo'curl-setopt3';

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 
 echo 'curl-setopt4';

 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
echo'response';
 // obtain response
 $response = curl_exec($session);
 echo 'curl-close';
 curl_close($session);
 // print everything out
echo $response;

?>