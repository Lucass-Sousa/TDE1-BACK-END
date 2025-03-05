<?php
    $n = intval(fgets(STDIN));

    $matriz = [];
    for ($a = 0; $a < $n; $a++) {
        $matriz[$a] = array_map('intval', explode(' ', trim(fgets(STDIN))));
    }

    $ordem = array_fill(0, $n, -1);
    $usado = array_fill(0, $n, false);

    for ($a = 0; $a < $n; $a++) {
        $mlrPsc = -1;
        $mlrVlr = -1;

        for ($b = 0; $b < $n; $b++) {
            if (!$usado[$b] && $matriz[$a][$b] > $mlrVlr) {
                $mlrVlr = $matriz[$a][$b];
                $mlrPsc = $b;
            }
        }

        $ordem[$a] = $mlrPsc + 1;
        $usado[$mlrPsc] = true;
    }

    echo implode(" ", $ordem);
?>