<?php
    function gerarNumeroAleatorio() {
        $numero = rand(0, 100);
        echo "<p>O valor gerado foi <strong>$numero</strong></p>";
    }

    gerarNumeroAleatorio();
?>