<?php 
    function sauda($nome) {
        print "Ola, $nome !<br>";
        sauda2($nome);
        print "preparando para dizer tchau...<br>";
        tchau();
    }

    function sauda2($nome) { 
        print "Como vai $nome ?<br>";
    }

    function tchau() {
        print "ok, tchau!";
    }

    $nome = "Maggie";

    sauda($nome);
?>