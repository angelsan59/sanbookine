<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html lang="fr">
<title>SanBooKine - A propos de</title>

	<head>
	<link rel="stylesheet" href="css/stylemain.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	p{padding:10px;}
	</style>
	
	</head>
<body>
<?php include_once('vues/v_navbar.php'); ?>
<header>
<div id="conteneur">
    <div class="element"><img src="img/books.png" alt="books" /></div>
    <div class="element"><h1>SanBooKine</h1>
	<h2>A propos du projet</h2>
</div>
    <div class="element"><img src="img/books.png" alt="books" /></div>
</div>
</header>

<?php include_once("vues/v_menu.php"); ?>

<div align="center">
<section id="liste">
<p>L'idée de bibliothèque personnelle me trotte depuis longtemps dans la tête. Je lis énormément, mais je voulais avoir
une trace de ce que je lis, un peu comme mon blog de loisirs créatifs me sert de portfolio. J'ai regardé ce qui était disponible 
sur le marché, mais rien ne me convient vraiment.</p>
<p>Mais voilà que ma formation de conception développement informatique m'amène sur la piste du php/mysql. Et c'est l'occasion rêvée de 
pratiquer en live !</p>
<p>Pour l'instant, l'appli est un peu basique, mais elle s'étoffera avec le temps. Je pense notament à ajouter des images de couverture,
 des liens, etc...</p>
 <p> N'hésitez pas à m'envoyer vos commentaires et vos idées à sandrine point ociepka at gmail.com</p>
</section></div>
<?php include_once('vues/v_footer.php'); ?>
</body>
</html>