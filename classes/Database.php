<?php

/**
 * Description of Database
 *
 * @author Diego de Biagi
 */
class Database extends PDO{
    private static $DB_NAME = 'site';
    private static $DB_HOST = 'localhost';
    private static $DB_USER = 'root';
    private static $DB_PWD = '1234';
    private static $database = null;
    
    public function __construct() {
        $dsn = 'mysql:host=' . self::$DB_HOST . ';dbname=' . self::$DB_NAME;
        parent::__construct($dsn, self::$DB_USER, self::$DB_PWD);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    /**
     * 
     * @return Database Retorna a classe Database devidamente instanciada.
     */
    public static function getInstance(){
        if(self::$database === null){
            self::$database = new Database();
        }
        return self::$database;
    }
}
