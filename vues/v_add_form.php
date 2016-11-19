
<section id="form">
<form action="add_livres.php" method="post">
	<fieldset>
		<label for="titre">Titre</label><br/>
			<input type="text" name="titre" id="titre" /><br /><br/>
			<label for="auteur">Auteur</label><br/>
			<input type="text" name="auteur" id="auteur" /><br /><br/>
			Avez-vous lu le livre ?
<input type="radio" name="lu" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="lu" value="non" id="non" /> <label for="non">Non</label>
	</fieldset><br />
	<fieldset>
	Catégorie<br />
		<select name="id_cat">
			<option value=""></option>
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
			<option value=""></option>
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
		<textarea name="resume" rows="8" cols="45"></textarea>
	</fieldset><br />
	
	<div align="center"><input type="submit" value="Ajouter le livre"></div>
	
</form>

</section>
