<?php

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


    // PREPARATION DES DONNEES

    $destinataire = "sebastien.goldberg@gmail.com";
    $objet        = "Springbok -" . $sujet;
    $contenu      = "Nom de l'expéditeur : " . $nom . "\r\n";
    $contenu      = $message."\r\n\n";

    $headers  = "From: {$email}" . "\r\n"; // ici l'expediteur du mail
    $headers .= 'Content-Type: text/plain; charset="ISO-8859-1"; DelSp="Yes"; format=flowed \r\n';
    $headers .= 'Content-Disposition: inline \r\n';
    $headers .= 'Content-Transfer-Encoding: 7bit \r\n';
    $headers .= 'MIME-Version: 1.0';





    // SI LES CHAMPS SONT MAL REMPLIS
    if ( (empty($nom)) && (empty($sujet)) && (empty($email)) && (!filter_var($email, FILTER_VALIDATE_EMAIL)) && (empty($message)) ):
        echo 'echec :( <br /><a href="index.html">Retour au formulaire</a>';
    // ENCAPSULATION DES DONNEES
    else:
        if(mail($destinataire,$sujet,utf8_decode($message))){;
            echo 'Formulaire envoyé';
        }
        else{
            echo 'Echec de lenvoi du formulaire'.$destinataire.'     '.$sujet.'    '.$message.'      ';
        }
    endif;

?>