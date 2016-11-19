<?php

function loggin()
{
	if (isset($_POST['pseudo']) AND isset($_POST['pass']))
	{
		global $db;
		$statement=$db->prepare("SELECT id,pseudo,pass FROM sbk_user WHERE pseudo = :pseudo AND pass= :pass");
		$statement->execute(array('pseudo' => $_POST['pseudo'], 'pass' => $_POST['pass']));
		
		if ($donnees = $statement->fetch())
		{
			echo 'Bonjour' . $donnees['pseudo'] . ', vous êtes désormais connecté pour cette session et pouvez donc gérer les livres.';
			
			$_SESSION['pseudo'] = $donnees['pseudo'];
			$_SESSION['pass'] = $donnees['pass'];
			$_SESSION['id_user'] = $donnees['id'];
			header('Location: admin.php');
		}
		else
		{
			echo 'Le système ne vous a pas reconnu, veuillez réessayer.';
		}
		
	return $statement;	
	}	
	else
	{
		echo 'Veuillez donner un pseudo et un mot de passe.<br/>';
	}

}

?>