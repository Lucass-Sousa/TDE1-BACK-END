<?php
    echo "Informe a capacidade: ";
    $c = intval(fgets(STDIN));
    echo "Informe a quantidade de alunos: ";
    $a = intval(fgets(STDIN));

    $apv = $c - 1; //alunos por viagem
    
    $viagens = ceil($a / $apv);

    echo "Será feita $viagens viagem(ns) para levar todos"
?>
