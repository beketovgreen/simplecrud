<?php
require_once 'dblogin.php';

try{
    $pdo = PDO('mysql:host='+$db_localhost+';dbname='+$db_database, $db_username, $db_password );

}catch (PDOException $e){
    echo "Connecting fall";
}
$page = isset($_GET['add'])?$_GET['add']:'';
if ($page == 'add'){



}


?>