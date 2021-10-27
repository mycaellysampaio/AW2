<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("location: index.php");
    exit;
}
echo "Seja Bem-Vindo à Sua Área Privada";

?>

