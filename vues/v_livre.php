
<section class="livre">
    <p style="font-family: 'Oswald', sans-serif;font-size:2em;margin-top:0px;margin-bottom:0px;"><?php echo $titre; ?><?php
		if (isset($_SESSION['id_user']) && $_SESSION['id_user']==$donnee['id_user'])
		{ ?>
		<a href="mod_livres.php?id_livre=<?php echo $donnees['id']; ?>">
		<i class="fa fa-pencil" style="color:#ff9006; margin-left:5px;font-size:16px;"></i></a> 
		<a href="sup_livre.php?id_livre=<?php echo $donnees['id']; ?>&id_user=<?php echo $donnees['id_user']; ?>" onclick="return confirm('Etes-vous sûr ?');">
		<i class="fa fa-times-circle" style="color:#ba0404;font-size:16px;"></i></a></li>
		
		<?php }
		?></p>
	<p style="text-align:right;">par  <?php echo $auteur; ?></p>
	<p style="font-size:0.9em;"><?php 
	
	if($donnees['lu']=='oui')
	{echo 'Déjà lu';}

	else{echo 'A lire';}
	 ?>
    - Note : <?php echo $donnees['note']; ?>/5 - Ajouté le <?php
echo $donnees['jour'] . '/' . $donnees['mois'] . '/' . $donnees['annee'];
?> - <b><?php echo $donne['nom_cat']; ?></b></p>
   <fieldset>
   <p style="font-family: 'tahoma', sans-serif;font-size:1em;margin-top:0px;letter-spacing: -0.8px;"><?php echo $resume; ?></p>
   </fieldset>
</section>

