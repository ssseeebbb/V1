<?php
	$mdp = htmlspecialchars($_POST['password']);
	// Le mot de passe n'a pas été envoyé ou n'est pas bon
	if (!isset($_POST[$mdp]) OR $_POST[$mdp] != "kangourou")
	{
    // Afficher le formulaire de saisie du mot de passe
	}
	// Le mot de passe a été envoyé et il est bon
	else
	{
    // Afficher les codes secrets
	}

?>