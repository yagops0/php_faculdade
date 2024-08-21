<?php 
    //CRIANDO CONSTANTES
    define("nome", "Pedro Sampaio");
    echo "Seu nome é ".nome;
    //MANIPULANDO VETOR

    $disc = array("logica", "php", "lhn", "c");
    echo "O total de elementos é = ".count($disc). "<br>";
    echo "O primeiro elemento é = ". reset($disc). "<br>";
    echo "O último elemento é = " .end($disc). "<br>";
    echo "O índice do elemento atual é = ". key($disc). "<br>";
    sort($disc);
    echo $disc[0]. "<br>". $disc[1]. "<br>". $disc[2]."<br>". $disc[3];

?>