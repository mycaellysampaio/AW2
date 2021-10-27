<?php
$severname = "localhost";
$username = "username";
$password = "password";
$dbname = "teste"

try{
    $conn =new PDO("mysql:host=$severname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE TABLE usuario (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(50)
        )";
    
    $conn->exec($sql);
    echo "Table usuario created seccessfully";
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn = = null;
?>