<?php
// $database="usersio_gsb";
// $server="mysql1.alwaysdata.com";
// $user="usersio";
// $password="mavace";


$database="usersio_gsb";
$server="localhost";
$user="root";
$password="valentin";


try{
$bdd = new PDO("mysql:host=$server; dbname=$database", $user, $password );

} catch(PDOException $e) {

    echo $e->getMessage();
}
?>