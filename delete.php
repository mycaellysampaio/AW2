<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "teste"

try {
    $conn =new PDO("mysql:host=$severname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE DATABASE teste";
    $conn -> exec($sql);
    echo "Database deleted successfully<br>";
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>