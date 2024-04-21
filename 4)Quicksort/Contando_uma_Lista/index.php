<?php 
    function contagem($lista) {
        // Verifica se a lista esta vazia
        if (empty($lista)) {
            return 0;
        }
        else {
            // Remove o primeiro elemento da lista e chama recursivamente a função.
            array_shift($lista);
            return 1 + contagem($lista);
        }
    }
    
    $minha_lista = array(1, 2, 3, 4, 5, 6, 7, 8);
    print (contagem($minha_lista));
?>