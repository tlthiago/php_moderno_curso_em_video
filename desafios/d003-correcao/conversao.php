<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            const COTACAO = 5.17;
            $real = $_GET["numero"] ?? 0;
            $dolar = (int) $real / COTACAO;

            echo "<p>Seus R\$". number_format($real, 2, ",", ".") . " equivalem a <strong>US\$ " . number_format($dolar, 2, ",", ".") . "</strong></p>";

            //Modo profissional utilizando a forma de internalização do PHP - Biblioteca intl (Internallization PHP)
            // $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            // echo "<p>Seus ". numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>