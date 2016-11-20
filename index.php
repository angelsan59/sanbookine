<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html lang="fr">
<title>SanBooKine - Ma bibliotheque perso</title>
	<head>
	<link rel="stylesheet" href="css/stylemain.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
     <META CONTENT='SanBooKine' NAME='TITLE'/>
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
	</style>
	
	</head>
<body>
<?php include_once('vues/v_navbar.php'); ?>
<header>
<div id="conteneur">
    <div class="element"><img src="img/books.png" alt="books" /></div>
    <div class="element"><h1>SanBooKine</h1>
	<h2>La bibliothèque de mes lectures passées, présentes et futures</h2>
<p style="padding-bottom:10px;">Depuis l'enfance, j'ai toujours beaucoup lu, et maintenant plus que jamais. Mais combien de livres ai-je vraiment lu? Quels sont-ils? 
Ai-je aimé? Et que vais-je lire par la suite?</p></div>
    <div class="element"><img src="img/books.png" alt="books" /></div>
</div>
</header>
<div align="center">
<section id="liste">
<h2 style="padding-top:10px;padding-bottom:0px;">Derniers ajouts dans la bibliothèque</h2>
<?php 
require_once("connexion.php");
$db = Connexion::getInstance();


include_once('modeles/m_list_livres.php');
$statement = get_last_livre(10);

$donnees = $statement->fetchAll();

foreach ($donnees as $donnee)
{
       $donnee['titre'] = htmlspecialchars($donnee['titre']);
	   //echo $donnee['titre'];
}


include_once('vues/v_liste_titre_auteur.php');
$statement->closeCursor();
?>
</section></div>
<?php include_once('vues/v_footer.php'); ?>
</body>
</html>