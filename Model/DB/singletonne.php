<?php header('Content-type: text/html; charset=utf-8');?>
<?php
/**
 * Generic Singleton class.
 * @author Moi
**/

class Singletonne
{
	private static $monInstance;
	private static $monInstanceEstb = null;

	// Constructor
	final private function __construct()
	{
		// Do not forget to edit the config.inc.php file with the good parameters.
		require_once 'config.inc.php';
		try
		{
			self::$monInstance = new PDO($SGBD.':host='.$HOST.';dbname='.$DB_NAME.';charset='.$CHARSET, $USER, $PASSWORD.'');
		}
		catch (Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
	}

	final public function __clone()
	{
		throw new Exception("Can not clone a singleton");
	}

	final public function __destruct()
	{
		self::$monInstance = null;
	}

	/* Singleton */
	final public static function getInstance()
	{
		if (!isset(self::$monInstanceEstb))
		{
			try
			{
				self::$monInstanceEstb = new Singletonne();
			}
			catch (PDOException $e)
			{
				echo $e;
			}
		}
		return self::$monInstanceEstb;
	}

	public function query($req)
	{
		$r = self::$monInstance->query($req);
		return $r;
	}
}

