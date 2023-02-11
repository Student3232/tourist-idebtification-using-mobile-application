<?php
$dbUser= 'root';
$dbHost= 'localhost'; 
$dbPassword='';
$dbName= 'webdev3a';

try{
    $connect = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
    echo "Database Connected to: $dbName";
} catch (\Throwable $th) {
    echo $th;

}

?>