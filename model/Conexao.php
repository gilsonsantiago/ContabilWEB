<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Gilson
 */


include_once 'config.php';

class Conexao {
   
    private static $PDO;
     
    public static function conectar()
    {
        
        if (!isset(self::$PDO))
        {
           self::$PDO  = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD ); 
           
           return self::$PDO; 
        }
           else
        {
           return self::$PDO;           
        }
        
     }
     
     public static function deconectar()
     {
         return self::$PDO = '';    
     }
}
