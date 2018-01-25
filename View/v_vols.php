<?php header('Content-Type: text/html; charset=utf-8'); ?>
<div class="row">
	<div class="col-sm-1-12">
	<table class="table table-stripped">
	<thead class=thead-dark"">
	<tr>
		<th>Numéro du vol</th>
		<th>Départ</th>
		<th>Arrivée</th>
	</tr>
	</thead>
	<tbody>
<?php
	foreach($rows as $value)
	{
?>
	<tr>
	<td><?php print $value['num_vol']; ?></td>
	<td><?php print $value['date_depart_vol']; ?></td>
	<td><?php print $value['date_arrivee_vol']; ?></td>
	<td><a class="btn btn-outline-success" href="index.php?page=form&vol=<?php print $value['num_vol']; ?>"><span class=""></span>Réserver le vol <?php print $value['num_vol']; ?></a></td>
	</tr>
<?php } ?>
	</tbody>
	</table>
	</div>
