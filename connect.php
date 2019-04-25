<?php
$dsn = "mysql:host=localhost;dbname=gojicream";
$user = "root";
$pass = "";
try {
    
    $con = new PDO($dsn, $user, $pass);
}

catch(PDOException $e) {
    //echo 'failed ' . $e->getMassage(); 
}

$con->query("SET NAMES utf8");

$con->query("SET CHARACTER SET utf8");

?>

