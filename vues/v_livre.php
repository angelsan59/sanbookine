
<section class="livre">
    <h2><?php echo $donnee['titre']; ?></h2>
	<?php 
	
	if($donnees['lu']=='oui')
	{echo 'Déjà lu';}

	else{echo 'A lire';}
	 ?>
	<p>par  <?php echo $donnee['auteur']; ?></p>
   
   <p>Note : <?php echo $donnees['note']; ?>/5</p>
   
   <p><?php echo $donnee['resume']; ?></p>
   <p>Ajouté le <?php echo $donnees['date_ajout']; ?></p>
</section>

