<?php

/* Recherche globale */
function search_all()
{
global $db;
	if(isset($_POST['requete']) && $_POST['requete'] != NULL)
	{
		$requete = htmlspecialchars($_POST['requete']);
		
		$statement=$db->prepare("SELECT id,titre, auteur FROM sbk_book WHERE titre LIKE '%$requete%' OR auteur LIKE '%$requete%' 
OR resume LIKE '%$requete%' ORDER BY auteur,titre");
		/*$statement->execute(array('requete' => $requete));*/
		$statement->execute();
		return $statement;	
	}

	else{echo 'Pas de requete';}
	
}











?>