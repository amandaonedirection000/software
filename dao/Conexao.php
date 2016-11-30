<?php

class Conexao {
    
    public static $instance;
    
    private function __construct() {
        //
    }
    
    public static function getInstance() {
        if(!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=127.0.0.1;"
            . "dbname=informati",  "root",  "", array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
        }
        return self::$instance;
    }
}
