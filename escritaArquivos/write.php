<?php
    $texto = $_POST["texto"];
    if(isset($texto));
    echo "já foi setada pelo menos uma vez <br>";

    $myfile = fopen("arquivo.txt", "a+") or die ("Unable to open file!");
    fwrite($myfile, $texto);
    fwrite($myfile, "\n");
    fclose($myfile);
    echo($texto );
    
?>