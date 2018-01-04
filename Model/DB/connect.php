<?php header('Content-type: text/html; charset=utf-8');?>
<?php
/**
 * Generic Singleton class.
 * @author Moi
**/

class connect
{
	private static $_instance = null;
	private $conn;

	// Constructor
	final private function __construct()
	{
		// Do not forget to edit the config.inc.php file with the good parameters.
		require_once 'config.inc.php';
		try
		{
			$this->_instance = new PDO($SGBD.':host='.$HOST.';dbname='.$DB_NAME.';charset='.$CHARSET,
						$USER,
						$PASSWORD.';');
			echo 'Connected to database'; // echo a message saying we have connected. Comment once all is working.
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
		self::$_instance->_connection->close();
		// self::$_instance = null;
	}

	/* Singleton */
	final public static function getInstance()
	{
		if (!isset(self::$_instance))
		{
			try
			{
				self::$_instance = new Singleton();
			}
			catch (PDOException $e)
			{
				echo $e;
			}
		}
		return self::$_instance;
	}

	public function query($query)
	{
		return $this->PDOInstance->query($query);
	}
}

