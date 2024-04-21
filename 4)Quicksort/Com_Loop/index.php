<?php 
    function soma() {
        $lista = func_get_args();
        $total = 0;
        foreach ($lista as $valor) {
            $total += $valor;
        }
        return $total;
    }

    print (soma(1, 2, 3, 4));
?>