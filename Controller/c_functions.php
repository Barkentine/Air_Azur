<?php
class c_Functions
{
	function check($data)
	{
		if (is_array($data))
		{
			$data = array_map('trim', $data);
			$data = array_map('stripslashes', $data);
			$data = array_map('htmlspecialchars', $data);
		}
		else
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
		}
		return $data;
	}

	public function readAll($table)
	{
		$resultats = CRUD::readAll($table);
		return $resultats;
	}

	public function readOne($table, $pk)
	{
		$id = c_Functions::check($_REQUEST['idClient']);
		$resultat = CRUD::readOne($table, $pk, $id);
		return $resultat;
	}

	public function record()
	{
		//$n = htmlspecialchars($_REQUEST['name']);
		//$f = htmlspecialchars($_REQUEST['fname']);
		//$a = htmlspecialchars($_REQUEST['adr']);
		//$t = htmlspecialchars($_REQUEST['tel']);
		//$m = htmlspecialchars($_REQUEST['mel']);
		//$v = htmlspecialchars($_REQUEST['Vol']);
		$newpost = c_Functions::check($_REQUEST);
		CRUD::write($newpost);
		header('Location:index.php?page=vols');
	}

	public function del()
	{
		$idC = c_Functions::check($_REQUEST['idClient']);
		CRUD::del($idC);
		header('Location:index.php?page=resers');
	}

	public function upd()
	{
		$oldpost = c_Functions::check($_REQUEST);
		CRUD::updt($oldpost);
		return null;
	}
}
?>
