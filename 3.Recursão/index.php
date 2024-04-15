<?php 
    // Chave sendo o numero 10.
    function procure_pela_chave($caixa) {
        $total_de_caixas = count($caixa);

        for ($i = 0; $i < $total_de_caixas; $i ++) {
            $chave = $caixa[$i];
            if ($chave !== 10) {
                continue;
            }
            else {
                print "Achei a chave";
                return;
            }

        }
        print "Chave não encontrada!";
    }

    $possiveis_chaves = array(5, 4, 10, 7, 8, 12);

    procure_pela_chave($possiveis_chaves);
?>