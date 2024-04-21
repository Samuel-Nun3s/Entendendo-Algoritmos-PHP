<?php 
    function pesquisa_binaria($lista, $item) {
        $baixo = 0;
        $alto = count($lista) - 1;
        while ($baixo <= $alto) {
            $meio = floor(($baixo + $alto) / 2);
            $chute = $lista[$meio];

            if ($chute == $item) {
                return $meio;
            }

            if ($chute > $item) {
                $alto = $meio - 1;
            }
            else {
                $baixo = $meio + 1;
            }
        }
        return null;
    }

    $minha_lista = array(1, 3, 5, 7, 9);

    print (pesquisa_binaria($minha_lista, 3));
    print "<br>";
    print (pesquisa_binaria($minha_lista, 9));
?>