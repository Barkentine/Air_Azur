<?php header('Content-Type: text/html; charset=utf-8'); ?>
<div class="row">
	<div class="col-sm-1-12">
		<form action="index.php?page=upt" method="post">
			<input type="hidden" name="Client" value="<?php print $_REQUEST['idClient']; ?>">
			<label>Prénom du client : </label>
			<input type="text" name="fname" placeholder="Prénom du client" value="<?php echo $row['prenom_client']; ?>">
			<label>Nom du client : </label>
			<input type="text" name="name" placeholder="Nom du client" value="<?php echo $row['nom_client']; ?>">
			<br />
			<label>Adresse : </label>
			<input type="text" name="adr" placeholder="Adresse du client" value="<?php echo $row['adresse_client']; ?>">
			<label>Telephone : </label>
			<input type="tel" name="tel" maxlength="10" placeholder="Téléphone du client" value="<?php echo $row['tel_client']; ?>">
			<label>Adresse courriel : </label>
			<input type="email" name="mel" placeholder="courriel du client" value="<?php echo $row['courriel_client']; ?>">
			<input class="btn btn-outline-primary" type="submit" value="Éditer">
		</form>
	</div>
