<?php 
    function buscamenor($arr) {
        $menor = $arr[0];
        $menor_indice = 0;
        $indice = count($arr);

        for ($i = 1; $i < $indice; $i += 1) {
            if ($arr[$i] < $menor) {
                $menor = $arr[$i];
                $menor_indice = $i;
            }
        }
        return $menor_indice;
    }

    function ordenacaoporselecao($arr) {
        $indice = count($arr);

        for ($i = 0; $i < $indice; $i += 1) {
            $menor = buscamenor($arr);
            $novoarr[] = $arr[$menor];
            array_splice($arr, $menor, 1);
        }
        return $novoarr;
    }

    $arr_desordenado = array(5, 3, 6, 2, 10);

    $arr_ordenado = ordenacaoporselecao($arr_desordenado);

    print_r($arr_ordenado);
?>