<?php
//2) Você deve fazer uma página html que passe dois numeros n e k como parametros via post e 
//armazene num num vetor e exiba para os usuários os k números múltiplos de n.
        $n = $_POST['n']; //recuperação de dados
        $k = $_POST['k']; //recuperação de dados
        $r = 0;
        $i = 0;
        //$r = resposta
        //$i = numero pelo qual $n será multiplicado

        $array = [$n, $k];

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
        echo '<br>';

        
        do{
            echo " ";
            $r = $n * $i;
            echo $r . '<br>';
            $i++;
            $r = 0;
        } while($i < $n);
        
?>