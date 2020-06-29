<?php

class Connection {

    private static $connection = null;

    private function __construct() {
        
    }

    public static function ConnectionDB() {
        if (self::$connection == null) {

            try {
                self::$connection = new PDO("mysql:host=localhost;dbname=DBNAME",'USER','PASS');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->exec('SET NAMES "utf8"');
            } catch (Exception $e) {
                   
                echo $e->getCode());

                exit();
            }
        }
        
        return self::$connection;
    }
}  

?>