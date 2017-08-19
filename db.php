<?php
require_once 'dblogin.php';

try{
    $pdo = PDO('mysql:host=localhost;dbname=crud', $db_username, $db_password );

}catch (PDOException $e){
    echo "Connecting fall";
}
?>