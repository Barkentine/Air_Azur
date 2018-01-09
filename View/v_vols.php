<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
	require_once '../Model/DB/connect.php';
	$pdo = connect::getInstance();
	$TousLesVols = $pdo->query('SELECT * FROM airazur;'); // Check if the table is correct.
?>
<div class="row">
	<div class="col-sm-1-12">
	<table>
	<tr>
		<th>Vol numéro</th>
		<th>Départ</th>
		<th>Arrivée</th>
	</tr>
	<tr>
<?php
	while($row = $TousLesVols->fetch(PDO::FETCH_OBJ))
			/*<option value='<?php $row->bookID ?>'><?php $row->bookTitle ?></option>*/
	{?>
	<td><<?php $row->numeroVol ?>/td> <?php // Check if all labels are good. ?>
		<td><<?php $row->departVol ?>/td>
		<td><<?php $row->arriveeVol ?>/td>
<?php } ?>
	</tr>
	</table>
	</div>
