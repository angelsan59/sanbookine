<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html lang="fr">
<title>SanBOOKine - cosultation des livres</title>

	<head>
	<link rel="stylesheet" href="css/stylemain.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
     <META CONTENT='SanBOOKine' NAME='TITLE'/>
    <META CONTENT='AngelSan' NAME='AUTHOR'/>
    <META CONTENT='angelsan@gmail.com' NAME='OWNER'/>
    <META CONTENT='Bibliothèque de mes lectures passées, prsentes et futures' NAME='SUBJECT'/>
    <META CONTENT='Bibliothèque de mes lectures passées, prsentes et futures' NAME='DESCRIPTION'/>
    <META CONTENT='livre, lecture, book, reading, read, roman' NAME='KEYWORDS'/>
    <META CONTENT='FR' NAME='LANGUAGE'/>
    <META CONTENT='AngelSan' NAME='COPYRIGHT'/>
    <META CONTENT='All' NAME='ROBOTS'/>
    <META CONTENT='5 DAYS' NAME='REVISIT-AFTER'/>
    <META CONTENT='NO-CACHE' HTTP-EQUIV='PRAGMA'/>
	<meta charset="utf-8" />
	<link rel="SHORTCUT ICON" href="favicon.ico">
	
	<style>
	body{background-image: url("img/fond.jpg");}
	#liste{
		display: inline-block;
background-color: #fff;
border: 1px solid #ccc;	
 border-radius: 25px;
 box-shadow:8px 8px 10px #aaa;
 padding:20px;
	}
	</style>
	
	</head>
<body>
<?php include_once('vues/v_navbar.php'); ?>
<header>
<h1>SanBooKine</h1>
<p><a href="consultation.php?lu=oui" class="button">Livres lus</a> | <a href="consultation.php?lu=non" class="button">Livres à lire</a></p>

</header>
<div align="center">
<section id="liste">
<?php 
require_once("connexion.php");
$db = Connexion::getInstance();

if (isset($_GET['id_livre']))
	{
include_once('modeles/m_list_livres.php');

$statement = get_livre($_GET['id_livre']);

		if($donnees = $statement->fetch())
{
			$donnee['titre'] = htmlspecialchars($donnees['titre']);
			$donnee['auteur'] = htmlspecialchars($donnees['auteur']);
			$donnee['resume'] = utf8_encode($donnees['resume']);
			$resume=htmlspecialchars($donnee['resume']);
	include_once('vues/v_livre.php');
}

else {echo 'Pas de numéro de livre, retournez à la liste. ';}

$statement->closeCursor();
	}
?>
</section></div>
</body>
</html>