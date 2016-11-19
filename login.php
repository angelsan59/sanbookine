<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html lang="fr">
<title>SanBooKine - Login</title>

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
	</head>
<body>
<?php include_once('vues/v_navbar.php'); ?>
<header>
<h1>SanBooKine</h1>
<h2>Page de login</h2>
<p>Pour le but de la démonstration, entrez "demo" et "demo". Vous pourrez alors essayer la gestion de livres.</p>
</header>
<div align="center">
<section id="login">

<?php 

if (isset($_SESSION['pseudo']) AND isset($_SESSION['pass']) AND isset($_SESSION['id_user']))
{ ?>
	<p>Vous êtes déjà entré dans le système, <a href="deconnexion.php">voulez-vous vous déconnecter?</a> Vous serez redirigé vers la page d\'accueil</p>
<?php
}
else
{
	require_once("connexion.php");
	$db = Connexion::getInstance();

	include_once('modeles/m_login.php');
	$statement = loggin();

include_once('vues/v_login_form.php');
}

?>
</section>
</div>
</body>
</html>