<?php
class Database {
    private static $host       ='localhost';
    private static $username   ='root';
    private static $password   ='';
    private static $db         ='admin';

    public static function connection(){
        $db= new PDO("mysql:host=".self::$host.";dbname=".self::$db,self::$username,self::$password);
        return $db;
    }

    public static function query($sql){
        $db = self::connection();
        $result=$db->query($sql);
        if(stripos($sql,'select')!==false){
            return $result->fetch();;    
        }
    }

}
//$con=new Database();


?>