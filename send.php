






<?php
echo "coucou";
require 'sendgrid-php/sendgrid-php.php';

$sendgrid = new SendGrid('ssseeebbb', 'Sebastien007.');

$email = new SendGrid\Email();
$email->addTo('sebastien.goldberg@hotmail.com');
$email->setFrom('foo@bar.com');
$email->setFromName('Foo Bar');
$email->setText('This is some text');


$sendgrid->send($email);

/*Dotenv::load(__DIR__);
$sendgrid_username = $_ENV['ssseeebbb'];
$sendgrid_password = $_ENV['Sebastien007.'];
$to                = $_ENV['sebastien.goldberg@hotmail.com'];
$transport  = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
$transport->setUsername($sendgrid_username);
$transport->setPassword($sendgrid_password);
$mailer     = Swift_Mailer::newInstance($transport);
$message    = new Swift_Message();
$message->setTo($to);
$message->setFrom($to);
$message->setSubject("[smtp-php-example] Owl named %yourname%");
$message->setBody("%how% are you doing?");
$header           = new Smtpapi\Header();
$header->addSubstitution("%yourname%", array("Mr. Owl"));
$header->addSubstitution("%how%", array("Owl"));
$message_headers  = $message->getHeaders();
$message_headers->addTextHeader("x-smtpapi", $header->jsonString());
try {
	  echo "lolalo";
  $response = $mailer->send($message);
  print_r($response);
  echo "lolalo";
} catch(\Swift_TransportException $e) {
  print_r($e);
  print_r('Bad username / password');
}
*/

// require 'vendor/autoload.php';
// Dotenv::load(__DIR__);
// $sendgrid_username = $_ENV['ssseeebbb'];
// $sendgrid_password = $_ENV['Sebastien007'];
// $to                = $_ENV['sebastien.goldberg@hotmail.com'];
// $sendgrid = new SendGrid($sendgrid_username, $sendgrid_password, array("turn_off_ssl_verification" => true));
// $email    = new SendGrid\Email();
// $email->addTo($to)->
//        setFrom($to)->
//        setSubject('[sendgrid-php-example] Owl named %yourname%')->
//        setText('Owl are you doing?')->
//        setHtml('<strong>%how% are you doing?</strong>')->
//        addSubstitution("%yourname%", array("Mr. Owl"))->
//        addSubstitution("%how%", array("Owl"))->
//        addHeader('X-Sent-Using', 'SendGrid-API')->
//        addHeader('X-Transport', 'web')->
//        addAttachment('./gif.gif', 'owl.gif');
// $response = $sendgrid->send($email);
// var_dump($response);

// echo "coucou";
// require("sendgrid-php.php");

// // //echo "coucou";
// // 	// initialize the SendGrid
//  	$sendgrid = new SendGrid('ssseeebbb', 'Sebastien007.');
// // //echo "coucou";
// // 	//Create a new SendGrid Email object and add your message details.
//  	$email = new SendGrid\Email();
//  	$email->addTo('sebastien.goldberg@hotmail.com')->
//         addTo('info@nexthappyhours.com')->
//         setFrom("mail")->
//         setSubject("sujet")->
//         setText("message")->
//         setHtml('<strong>Hello World!</strong>');
//  echo "coucou";
//      $sendgrid->send("sebastien.goldberg@hotmail.com");

//  echo "envoye";

// //echo "coucou";
//     // CONDITIONS NOM
//    // if ( (isset($_POST['nom'])) && (strlen(trim($_POST['nom'])) > 0) ):
//    //      $nom = stripslashes(strip_tags($_POST['nom']));
//    //  else:
//    //      echo "Merci d'écrire un nom <br />";
//    //      $nom = '';
//    //  endif;

//    //  // CONDITIONS SUJET
//    //  if ( (isset($_POST['subject'])) && (strlen(trim($_POST['subject'])) > 0) ):
//    //      $sujet = stripslashes(strip_tags($_POST['subject']));
//    //  else:
//    //      echo "Merci d'écrire un sujet <br />";
//    //      $sujet = '';
//    //  endif;

//    //  // CONDITIONS EMAIL
//    //  if ( (isset($_POST['mail'])) && (strlen(trim($_POST['mail'])) > 0) && (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) ):
//    //      $email = stripslashes(strip_tags($_POST['mail']));
//    //  elseif (empty($_POST['mail'])):
//    //      echo "Merci d'écrire une adresse email <br />";
//    //      $email = '';
//    //  else:
//    //      echo 'Email invalide :(<br />';
//    //      $email = '';
//    //  endif;

//    //  // CONDITIONS MESSAGE
//    //  if ( (isset($_POST['message'])) && (strlen(trim($_POST['message'])) > 0) ):
//    //      $message = stripslashes(strip_tags($_POST['message']));
//    //  else:
//    //      echo "Merci d'écrire un message<br />";
//    //      $message = '';
//    //  endif;




 //    $objet        = "Springbok -" . $sujet;
 // 	$contenu      = "Nom de l'expéditeur : " . $nom . "\r\n";
 //    $contenu      = $message."\r\n\n";

 // $url = 'https://api.sendgrid.com/';
 // $user = 'ssseeebbb';
 // $pass = 'Sebastien007.'; 

 // $params = array(
 //      'api_user' => $user,
 //      'api_key' => $pass,
 //      'to' => 'sebastien.goldberg@hotmail.com	',
 //      'subject' => $objet,
 //      'html' => 'testing body',
 //      'text' => $contenu,
 //      'from' => $email,
 //   );
 // $request = $url.'api/mail.send.json';
 // // Generate curl request
 // $session = curl_init($request);
 // // Tell curl to use HTTP POST
 // curl_setopt ($session, CURLOPT_POST, true);

 // // Tell curl that this is the body of the POST
 // curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // // Tell curl not to return headers, but do return the response
 // curl_setopt($session, CURLOPT_HEADER, false);
 

 // curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
 // // obtain response
 // $response = curl_exec($session);
 // curl_close($session);
 // // print everything out
?>