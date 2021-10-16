<?php
$severname = "localhost";
$username = "root";
$password = "";
$myDB = "teste";

try{
    $conn =new PDO("mysql:host=$severname;dbname=$myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}

?>