<?php
require_once 'DatabaseInterface.php';

class Database implements DatabaseInterface{
// Create and manipulation with database

    private $hostname = 'localhost',
            $dbName = 'simplecrudDB',
            $username = 'root',
            $password = 1,
            $pdo;

    function __construct()
    {
        // Create Database if not exist
        try{
            $this->pdo = new PDO("mysql:host=$this->hostname", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("CREATE DATABASE IF NOT EXISTS `$this->dbName`;");
        } catch (PDOException $e){
            echo "Error:" + $e->getMessage();
        }
    }

    public function create(){
        return null;
    }
    public function read(){
        return null;
    }
    public function update(){
        return null;
    }
    public function delete(){
        return null;
    }

    function __destruct()
    {

    }
}
?>

