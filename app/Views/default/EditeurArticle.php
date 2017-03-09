<?php

?>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	
		<h1>Créer un nouvel article</h1>
		<form action="" method='post'>
			<label>Titre</label>
			<input type="text" name="TITREARTICLE"/><br/>
			<label>Image</label>
			<input name="FEATUREDIMAGEARTICLE" type="file"/><br/>
			<label>Contenu de l'article</label>
		<textarea name="CONTENUARTICLE" rows="10" cols="80"></textarea><br/>
		<label for="IDCATEGORIE">Categorie</label>
			<select name="IDCATEGORIE" required>
				<option value="2">Business</option>
				<option value="3">Computing</option>
				<option value="4">Tech</option>
			</select><br/>
		<input type="submit"/>	<br/>
		</form>	
		<script type="text/javascript">
			CKEDITOR.replace('CONTENUARTICLE');
		</script>
		<!--`IDARTICLE`, `IDAUTEUR`, `IDCATEGORIE`, `TITREARTICLE`, `CONTENUARTICLE`, `FEATUREDIMAGEARTICLE`, `SPECIALARTICLE`, `SPOTLIGHTARTICLE`, `DATECREATIONARTICLE -->
