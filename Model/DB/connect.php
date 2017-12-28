<?php header('Content-type: text/html; charset=utf-8');?>
<?php
/**
 * Classe implémentant le singleton pour PDO
 * @author Savageman modifié par Moi
**/

class PDO2bis extends PDO
{
    private static $db_config = array();
   /* private static $db_config['SGBD']     = 'mysql';
    private static $db_config['HOST']     = 'localhost';
    private static $db_config['DB_NAME']  = 'airazur';
    private static $db_config['USER']     = 'root';
    private static $db_config['PASSWORD'] = '';
    private static $db_config['CHARSET']  = 'utf8mb4';
    private static $db_config['OPTIONS']  = array
    (
        // Activation des exceptions PDO :
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // Change le fetch mode par défaut sur FETCH_ASSOC ( fetch() retournera un tableau associatif ) :
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );*/


    /* Constructeur : héritage public obligatoire par héritage de PDO */
    final private function __construct()
    {
    }
    // End of PDO2::__construct() */

    final public function __clone()
    {
        trigger_error("Le clonage n'est pas autorisé.", E_USER_ERROR);
    }

    /* Singleton */
    final public static function getInstance()
    {
        if (!isset(self::$_instance))
        {
            try
            {
                self::$_instance = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD, SQL_CHARSET);
            }
            catch (PDOException $e)
            {
                echo $e;
            }
            /*finally
            {
                self::$_instance -> closeCursor();
            }*/
        }
        return self::$_instance; 
    }
}

