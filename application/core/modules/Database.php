<?php
/**
 * Created by PhpStorm.
 * User: phil
 * Date: 27/08/17
 * Time: 20:56
 */

class Database implements DatabaseInterface
{

    private static $hostname = 'localhost';
    private static $dbName = 'simplecrudDB';
    private static $username = 'root';
    private static $password = 1;
    private static $pdo = null;

    function __construct()
    {
        $this->createDatabase();
    }


    private static function createDatabase()
    {
        // Create DATABASE and TABLES if not exist
        try{
            self::$pdo = new PDO("mysql:host=".self::$hostname, self::$username, self::$password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->exec("CREATE DATABASE IF NOT EXISTS`".self::$dbName."`; USE ".self::$dbName.";
                                        CREATE TABLE IF NOT EXISTS user(user_id SMALLINT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                                                        name CHAR(32) NOT NULL,
                                                                        surname CHAR(32) NOT NULL,
                                                                        email CHAR(32) NOT NULL);");
        } catch (PDOException $e){
            echo "Error:" + $e->getMessage();
        }
    }
    public function create($n, $s, $em)
    {
        try{
            self::$pdo->exec("INSERT INTO `user` VALUES($n, $s, $em)");
        }catch (Exception $e){
            echo "Error:" + $e->getMessage();
        }

    }
    public function read()
    {
        try{
            self::$pdo->exec("SELECT * FROM user;");
        }catch (Exception $e){
            echo "Error:" + $e->getMessage();
        }

    }
    public function update($id){
    }

    public function delete($id){

    }

    function __destruct()
    {
    }
}

//"CREATE DATABASE IF NOT EXISTS`".self::$dbName."`; USE".self::$dbName.";".
//""

?>