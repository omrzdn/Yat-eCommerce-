<?php 
//data source name

$dsn= 'mysql:host=localhost;dbname=shop';
$user='root';
$pass='';
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
//try to connect to database
try{
    $con = new PDO($dsn,$user,$pass,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo 'you are connected to database wellcome ';
}
//if cannot connect to database
//e==error
catch(PDOException $e){
    // echo 'failed to connect'.$e->getMessage();

}




?>