<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
	require_once "Model/DB/crud.php";
	require_once "Controller/c_functions.php";

	include("View/v_header.php");

	// If action is not defined set it to *accueil*.
	if(!isset($_REQUEST['page']))
	{
		$page = 'accueil';
	}
	else
	{
		$page = $_REQUEST['page'];
	}

	switch ($page)
	{
		//case 'value':
		case 'accueil':
			include("View/v_homepage.php");
			break;
		case 'vols':
			$rows = c_Functions::readAll('vol');
			include("View/v_vols.php");
			break;
		case 'form':
			include("View/v_form.php");
			break;
		case 'rec':
			c_Functions::record();
			break;
		case 'resers':
			$rows = c_Functions::readAll('client');
			include("View/v_resers.php");
			break;
		case 'del':
			c_Functions::del();
			break;
		case 'edform':
			$row = c_Functions::readOne('client', 'id_client');
			include("View/v_edform.php");
			break;
		case 'upt':
			c_Functions::upd();
			break;
		default:
			break;
	}
	include("View/v_footer.php") ;
?>

