<?php 
    $qtda = trim(fgets(STDIN));
    $valores = explode(" ", $qtda);

    $qtd_brinquedo = intval($valores[0]); 
    $altcarlitos = intval($valores[1]);

    $altmin = trim(fgets(STDIN));
    $alturasMinimas = explode(" ", $altmin);

    $brinquedosPermitidos = 0;

    for ($i = 0; $i < $qtd_brinquedo; $i++) {
        $altMinDoBrinquedo = intval($alturasMinimas[$i]);
        
        if ($altcarlitos >= $altMinDoBrinquedo) {
            $brinquedosPermitidos++;
        }
    }

    echo $brinquedosPermitidos;
?>