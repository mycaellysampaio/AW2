<?php

        $n = $_GET['num']; //recuperação de dados
        if($n < 0){
            echo  $n . ' é um numero negativo' . '<br>';
        }else{
            echo $n . ' é um numero positivo' . '<br>';
        }
        $p = $n / 2;
        if($p = 0){
            echo $n . ' é um numero par' . '<br>';
        }else{
            echo $n . ' é um numero impar' . '<br>';
        }
?>