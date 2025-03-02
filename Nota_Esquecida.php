<?php
    echo "Digite a nota lembrada: \n";
    $a = intval(fgets(STDIN));
    echo "Digite a média lembrada: \n";
    $m = intval(fgets(STDIN));
    $b = (2*$m ) - $a;
    echo "A nota esquecida é $b";
?>