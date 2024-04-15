<?php 
    // Maneira errada:
    /*$cont = 10;

    function regressiva($i) {
        print $i;
        regressiva($i - 1);
    }

    regressiva($count);
    */

    // Maneira correta: Usando o Caso Base, para não acontecer um loop infinito
    $cont = 10;

    function regressiva($i) {
        print "$i ";
        if ($i <= 1) {
            return; // Caso Base
        }
        else {
            regressiva($i - 1); // Caso Recursivo
        }
    }

    regressiva($cont);
?>