<?php 
require_once("connexion.php");
$db = Connexion::getInstance();

include_once('modeles/m_lire_livres.php');
$statement = get_livre();

$donnees = $statement->fetchAll();

foreach ($donnees as $donnee)
{
       $donnee['titre'] = htmlspecialchars($donnee['titre']);
	   //echo $donnee['titre'];
}


include_once('vues/v_lire_livres.php');
$statement->closeCursor();
?>