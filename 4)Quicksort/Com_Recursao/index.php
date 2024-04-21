<?php 
    function soma() {
        $lista =  func_get_args();
        $tamanho_lista = func_num_args();
        $total = 0;
        if ($tamanho_lista == 0) {
            return $total;
        }
        else {
            $total = $lista[0];
            unset($lista[0]);
            return $total + soma(...$lista);
        }
    }

    print (soma(10, 4, 5, 7, 8, 4, 6, 4));
?>