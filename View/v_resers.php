<?php header('Content-Type: text/html; charset=utf-8'); ?>
<div class="row">
	<div class="col-sm-1-12">
	<table class="table table-stripped">
	<thead class=thead-dark"">
	<tr>
		<th>Numéro du vol</th>
		<th colspan="2">Prénom &amp; Nom du client</th>
		<th colspan="3">Coordonnées du client</th>
	</tr>
	</thead>
	<tbody>
<?php
	foreach($rows as $value)
	{
?>
	<tr>
	<td><?php print $value['vol_client']; ?></td>
	<td><?php print $value['prenom_client']; ?></td>
	<td><?php print $value['nom_client']; ?></td>
	<td><?php print $value['adresse_client']; ?></td>
	<td><?php print $value['tel_client']; ?></td>
	<td><?php print $value['courriel_client']; ?></td>
	<td><form action="index.php?page=edform" method="post">
			<input type="hidden" name="idClient" value="<?php print $value['id_client']; ?>">
			<input class="btn btn-outline-warning" type="submit" value="Modifier">
	</form></td>
	<td><form action="index.php?page=del" method="post">
			<input type="hidden" name="idClient" value="<?php print $value['id_client']; ?>">
			<input class="btn btn-outline-danger" type="submit" value="Supprimer">
	</form></td>
	</tr>
<?php } ?>
	</tbody>
	</table>
	</div>
