<?php
$severname = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host = $severname", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE teste";
    $conn -> exec($sql);
    echo "Database created successfully<br>";
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>