<?php

// Hyödynnetään PDO-käärintäluokkaa, joka mahdollistaa SQL-kyselyiden
// suorittamisen yhden PDO-yhteyden kautta.
// Koodi on kopioitu osoitteesta https://phpdelusions.net/wrapper

// Viedään config-tiedoissa määritellyt tietokantaasetukset vakioiksi.
define('DB_HOST', $config['db']['host']);
define('DB_NAME', $config['db']['dbname']);
define('DB_USER', $config['db']['username']);
define('DB_PASS', $config['db']['password']);
define('DB_CHAR', 'utf8');

class DB
{
    protected static $instance = null;

    public function __construct() {}
    public function __clone() {}

    public static function instance()
    {
        if (self::$instance === null)
        {
            $opt  = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => TRUE,
            );
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
            self::$instance = new PDO($dsn, DB_USER, DB_PASS, $opt);
        }
        return self::$instance;
    }

    public static function __callStatic($method, $args)
    {
        return call_user_func_array(array(self::instance(), $method), $args);
    }

    public static function run($sql, $args = [])
    {
        $stmt = self::instance()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
