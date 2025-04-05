<?php

class connexionPdo {
    private static $cnxPDO=null;
    private const HOST='localhost';
    private const DB_NAME='db';
    private const PWD='';
    private const USER='root';

    private function __construct()
    {
        try {
            self::$cnxPDO = new PDO('mysql:host='. self::HOST.';dbname='. self::DB_NAME,self::USER,self::PWD);
        }catch (PDOException $e){
       
            die($e->getMessage());
         
        }
    }

    public static function getInstance()
    {
        if(!self::$cnxPDO)
        {
            new connexionPdo();
        }
        return self::$cnxPDO;
       
    }
  
}