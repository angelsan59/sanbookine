<?php

/* Ajouter un livre par formulaire */
function add_livre()
{
global $db;

if (isset($_POST['titre']) AND $_POST['auteur'])
{
	$titre = utf8_decode ( $_POST["titre"] );
	$auteur = utf8_decode ( $_POST["auteur"] );
	$resume = utf8_decode ( $_POST["resume"] );
$statement=$db->prepare("INSERT INTO sbk_book (titre, auteur, resume, note, lu, date_ajout, id_user, id_cat) 
VALUES(:titre, :auteur, :resume, :note, :lu, NOW(), :id_user, :id_cat)");
$statement->execute(array(
	'titre' => $titre,
	'auteur' => $auteur,
	'resume' => $resume,
	'note' => $_POST['note'],
	'lu' => $_POST['lu'],
	'id_user' => $_SESSION['id_user'],
	'id_cat' => $_POST['id_cat']
	));
	
	echo 'Le livre a bien été ajouté !';
/*$statement->execute(); */
return $statement;
$statement->closeCursor();
}
}

/* modifier un livre */
function mod_livre()
{
	global $db;
	if (isset($_POST['titre']) AND $_POST['auteur'])
	{
		$titre = utf8_decode ( $_POST["titre"] );
		$auteur = utf8_decode ( $_POST["auteur"] );
		$resume = utf8_decode ( $_POST["resume"] );
$statement=$db->prepare("INSERT INTO sbk_book (titre, auteur, resume, note, lu, date_ajout, id_user, id_cat) 
VALUES(:titre, :auteur, :resume, :note, :lu, NOW(), :id_user, :id_cat)");
$statement->execute(array(
	'titre' => $titre,
	'auteur' => $auteur,
	'resume' => $resume,
	'note' => $_POST['note'],
	'lu' => $_POST['lu'],
	'id_user' => $_SESSION['id_user'],
	'id_cat' => $_POST['id_cat']
	));
	
	echo 'Le livre a bien été ajouté !';
/*$statement->execute(); */
return $statement;
$statement->closeCursor();
		
		
	}
}

/* supprimer un livre */
function sup_livre()
{
	global $db;
	if (isset($_GET['id_livre']) AND $_SESSION['id_user']==$_GET['id_user'])
	{
		$statement=$db->prepare("DELETE FROM sbk_book WHERE id= :id_livre");
		$statement->bindParam(':id_livre', $_GET['id_livre'], PDO::PARAM_INT);
		$statement->execute();
		
		echo "<p>Le livre a bien été enlevé</p>";
		
	}
	else{echo '<p>Vous n\'avez pas le droit de supprimer ce livre ou il n\'a pas été reconnu par le système.</p>';}
	return $statement;
}

?>