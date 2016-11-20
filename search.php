<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html lang="fr">
<title>SanBooKine - Recherche de livre</title>

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
	</style>
	
	</head>
<body>
<?php include_once('vues/v_navbar.php'); ?>
<header>
<div id="conteneur">
    <div class="element"><img src="img/books.png" alt="books" /></div>
    <div class="element"><h1>SanBooKine</h1>
	<h2>Recherche</h2>
</div>
    <div class="element"><img src="img/books.png" alt="books" /></div>
</div>
</header>
<?php include_once("vues/v_menu.php"); ?>
<div align="center">
<section id="liste">

<?php 
require_once("connexion.php");
$db = Connexion::getInstance();



if (isset($_POST['requete']))
	{
		include_once('modeles/m_search.php');
		
		$statement = search_all();
		
		$donnees = $statement->fetchAll();


include_once('vues/v_search_result.php');
$statement->closeCursor();
		}
else
{
	include_once('vues/v_search_form.php');
}

		
?>
</section></div>
<?php include_once('vues/v_footer.php'); ?>
</body>
</html>