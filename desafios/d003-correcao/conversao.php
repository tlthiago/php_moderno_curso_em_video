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
        <h1>Resultado do processamento</h1>
        <?php 
            const COTACAO = 5.17;
            $real = $_GET["numero"] ?? 0;
            $dolar = (int) $real / COTACAO;
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ". numfmt_format_currency($padrão, $real, "BRL") . " equivalem a 
            " . numfmt_format_currency($padrão, $dolar, "USD");
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>