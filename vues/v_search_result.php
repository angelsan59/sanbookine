
<?php
foreach ($donnees as $donnee)
{
	$donnee['titre'] = htmlspecialchars($donnee['titre']);
			$donnee['auteur'] = htmlspecialchars($donnee['auteur']);
?>
<div class="livre">
    <ul>
        <li><a href="fiche_livre.php?id_livre=<?php echo $donnee['id']; ?>"><?php echo $donnee['titre']; ?></a> de  <?php echo $donnee['auteur']; ?></li>
    </ul>
    
    <p>
   
</div>
<?php
}
?>
