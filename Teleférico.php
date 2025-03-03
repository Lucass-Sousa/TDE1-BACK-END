<?php
    $c = intval(fgets(STDIN));
    $a = intval(fgets(STDIN));

    $apv = $c - 1; //alunos por viagem
    
    $viagens = ceil($a / $apv);

    echo $viagens;
?>
