<?php

        $n = $_POST['n']; //recuperação de dados
        $k = $_POST['k']; //recuperação de dados
        $r = 0;
        $i = 0;
        //$r = resposta
        //$i = numero pelo qual $n será multiplicado

        $parametros = Array($n, $k);

        for($i = 0; $i<=$k; $i++){
            $r = $n * $i;

            echo $n . ' x ' . $i . ' = ' . $r . '<br>';
        }

        echo '<br>';
        for($i = 0; $i<=$k; $i++){
                if($i % $n == 0){
                    echo $i . ' é multiplo de ' . $n . '<br>';
                }
        }
        
?>