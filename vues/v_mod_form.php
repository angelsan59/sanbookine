
<section id="form">
<form action="mod_livres.php?id_livre=<?php echo $_GET['id_livre']; ?>" method="post">
	<fieldset>
		<label for="titre">Titre</label><br/>
			<input type="text" name="titre" id="titre" value="<?php echo $donnee['titre']; ?>" /><br /><br/>
			<label for="auteur">Auteur</label><br/>
			<input type="text" name="auteur" id="auteur" value="<?php echo $donnee['auteur']; ?>" /><br /><br/>
			Avez-vous lu le livre ?
<input type="radio" name="lu" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="lu" value="non" id="non" /> <label for="non">Non</label>
	</fieldset><br />
	<fieldset>
	Catégorie<br />
		<select name="id_cat">
			<option value="<?php echo $donnees['id_cat']; ?>"><?php echo $donne['nom_cat']; ?></option>
			<option value="1">Général</option>
			<option value="2">Historique</option>
			<option value="3">Fantastique</option>
			<option value="4">Science Fiction</option>
			<option value="5">Thriller</option>
			<option value="6">Policier</option>
			<option value="7">Romance</option>
			<option value="8">Classiques</option>
			<option value="9">Jeunes</option>
		</select>
			<br /><br/>
			Note de 0 (nul) à 5 (super)<br />
		<select name="note">
			<option  value="<?php echo $donnees['note']; ?>"><?php echo $donnees['note']; ?></option>
			<option value="0">Nul</option>
			<option value="1">Assez ennuyeux</option>
			<option value="2">Pas mal</option>
			<option value="3">Bien</option>
			<option value="4">Formidable, on ne le lache plus</option>
			<option value="5">A relire régulièrement</option>
		</select>	
			
	</fieldset><br />
	<fieldset>
	Resumé<br />
		<textarea name="resume" rows="8" cols="45"><?php echo $resume; ?></textarea>
	</fieldset><br />
	<input type="hidden" name="id_livre" value="<?php echo $donnees['id']; ?>" />
	<div align="center"><input type="submit" value="Modifier le livre"></div>
	
</form>

</section>
