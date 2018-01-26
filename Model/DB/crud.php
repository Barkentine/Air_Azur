<?php
/**
 * Class to use the DB connected from singletonne.php
 * @author Moi
**/
class CRUD
{
	public function readAll($table)
	{
		require_once "singletonne.php";
		$pdo = Singletonne::getInstance();
		$data = $pdo->query("SELECT * FROM $table;");
		$TousLesVols = $data->fetchAll();
		$pdo->__destruct();
		return $TousLesVols;
	}

	public function readOne($table,$id=id,$num)
	{
		require_once "singletonne.php";
		$pdo = Singletonne::getInstance();
		$datum = $pdo->query("SELECT * FROM $table WHERE $id=$num;");
		$uneLigne = $datum->fetch();
		$pdo->__destruct();
		return $uneLigne;
	}

	//public static function write($f,$n,$a,$t,$m,$v)
	public function write($array)
	{
		require_once "singletonne.php";
		$pdo = Singletonne::getInstance();
		//$leClient = $pdo->query("INSERT INTO client(nom_client, prenom_client,adresse_client,tel_client,courriel_client,Vol_client) VALUES ('$n','$f','$a','$t','$m','$v');");
		$leClient = $pdo->query("INSERT INTO client(nom_client, prenom_client,adresse_client,tel_client,courriel_client,Vol_client) VALUES ('$array[name]','$array[fname]','$array[adr]','$array[tel]','$array[mel]','$array[Vol]');");
		$pdo->__destruct();
		return null;
	}

	public function del($id)
	{
		require_once "singletonne.php";
		$pdo = Singletonne::getInstance();
		$leClient = $pdo->query("DELETE FROM client WHERE id_client=$id;");
		$pdo->__destruct();
		return null;
	}

	public function updt($array)
	{
		require_once "singletonne.php";
		$pdo = Singletonne::getInstance();
		$unClient = $pdo->query("UPDATE client SET nom_client='$array[name]',prenom_client='$array[fname]',adresse_client='$array[adr]',tel_client='$array[tel]',courriel_client='$array[mel]' WHERE id_client='$array[Client]';");
		$pdo->__destruct();
		return null;
	}
}
