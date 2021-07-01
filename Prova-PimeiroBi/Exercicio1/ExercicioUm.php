<?php
//1) você deve fazer uma página html com um campo de formulário em que você passa um número via método de submissão get 
//e um script em php que recupere esse parâmentro e retorna se o número é par ou impar e se é positivo ou negativo

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