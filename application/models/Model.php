<?php

class Model implements DatabaseInterface
{
    private $hostname = 'localhost',
        $dbName = 'simplecrudDB',
        $username = 'root',
        $password = 1,
        $pdo;

    function __construct()
    {
        $this->createDatabse();
    }

    private function createDatabse()
    {
        // Create DATABASE and TABLES if not exist
        try{
            $this->pdo = new PDO("mysql:host=$this->hostname", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("CREATE DATABASE IF NOT EXISTS `$this->dbName`;
                                        USE `$this->dbName`;
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
        $this->pdo->exec("INSERT INTO `user` VALUES($n, $s, $em)");
    }
    public function read($n, $s, $em)
    {
        return null;
    }
    public function update($n, $s, $em){
        return null;
    }
    public function delete($n, $s, $em){
        return null;
    }

    function __destruct()
    {
    }
}
?>