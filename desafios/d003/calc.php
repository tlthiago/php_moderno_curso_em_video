<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            const DOLAR = 5.22;
            $valor = (int) $numero / DOLAR;
            $valorFormatado = number_format($valor, 2);

            echo "<p>Seus R$ $numero equivalem a <strong>US$ $valorFormatado</strong>";
            echo "<p><strong>*Cotação fixa de R$ 5,22</strong> informada diretamente no código.";
        ?>

        <p><a href="javascript:history.go(-1)"><- Voltar</a></p>
    </main>
</body>
</html>