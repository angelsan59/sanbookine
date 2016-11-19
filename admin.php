<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html lang="fr">
<title>SanBooKine- Gestion des livres</title>

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
	#derniers{
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

<h2>Gestion des livres</h2>
<p><a href="add_livres.php" class="button" onclick="return confirm('Etes-vous sûr ?');">Ajouter un livre</a></p>
</header>
<div align="center">
<section id="derniers">
<h2>Derniers ajouts à la bibliothèque</h2>
<?php 
echo 'pseudo : ' . $_SESSION['pseudo'] . ' ' . $_SESSION['pass']  . ' ' . $_SESSION['id_user'];
?>
</section></div>
</body>
</html>