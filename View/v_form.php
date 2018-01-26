<?php header('Content-Type: text/html; charset=utf-8'); ?>
<div class="row">
	<div class="col-sm-1-12">
		<form action="index.php?page=rec" method="post">
			<input type="hidden" name="Vol" value="<?php print $_REQUEST['vol']; ?>">
			<label>Prénom du client : </label>
			<input type="text" name="fname" placeholder="Prénom du client">
			<label>Nom du client : </label>
			<input type="text" name="name" placeholder="Nom du client">
			<br />
			<label>Adresse : </label>
			<input type="text" name="adr" placeholder="Adresse du client">
			<label>Telephone : </label>
			<input type="tel" maxlength="10" name="tel" placeholder="Téléphone du client">
			<label>Adresse courriel : </label>
			<input type="email" name="mel" placeholder="courriel du client">
			<input class="btn btn-outline-info" type="submit" value="Enregistrer">
		</form>
	</div>
