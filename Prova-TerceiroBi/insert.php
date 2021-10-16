<?php
$nome = $_POST['nome'];
$email = $_POST['email'];

$severname = "localhost";
$username = "root";
$password = "";
$myDB = "teste";


try{
    $conn =new PDO("mysql:host=$severname;dbname=$myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO usuario(nome, email)
    VALUES (' $nome', '$email')";

    $conn->exec($sql);
    echo "New record created successfully";
}catch(PDOException $e){
    echo "Connection failed" . $e->getMessage();
}

?>