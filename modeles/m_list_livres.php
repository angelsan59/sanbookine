<?php

/* Selectionner un livre */
function get_livre($id_livre)
{
global $db;
$statement=$db->prepare("SELECT id,titre, auteur,resume,note,lu,DAY(date_ajout) AS jour, 
MONTH(date_ajout) AS mois, YEAR(date_ajout) AS annee,id_user,id_cat FROM sbk_book WHERE id= :id_livre");
$statement->bindParam(':id_livre', $id_livre, PDO::PARAM_INT);
$statement->execute();
return $statement;
}

/* recherche catégorie du livre */
function get_cat($id_cat)
{
global $db;
$statement1=$db->prepare("SELECT * FROM sbk_categorie WHERE id= :id_cat");
$statement1->bindParam(':id_cat', $id_cat, PDO::PARAM_INT);
$statement1->execute();
return $statement1;
}

/* Liste titre - auteur de tous les livres par auteur et titre, sélection lu ou à lire */
function get_list_livre($lu)
{
global $db;
$statement=$db->prepare("SELECT id,titre, auteur,id_user FROM sbk_book WHERE lu= :lu ORDER BY auteur,titre");
$statement->bindParam(':lu', $lu, PDO::PARAM_INT);
$statement->execute();
return $statement;
}

/* Liste de tous les livres par ordre d'auteur et titre */
function get_all_livre()
{
global $db;
$statement=$db->prepare("SELECT id,titre, auteur, id_user FROM sbk_book ORDER BY auteur,titre");
//$statement->bindParam(':lu', $lu, PDO::PARAM_INT);
$statement->execute();
return $statement;
}

/* Liste des derniers livres, le nombre est paramétrable */
function get_last_livre($nblivres)
{
global $db;
$statement=$db->prepare("SELECT id,titre, auteur, id_user FROM sbk_book ORDER BY id DESC LIMIT 0,:nblivres");
$statement->bindParam(':nblivres', $nblivres, PDO::PARAM_INT);
$statement->execute();
return $statement;
}

?>