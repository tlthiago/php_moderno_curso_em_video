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
        <h1>Analisador de Números Real</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            $parteInteira = floor($numero);
            $parteFracionaria = $numero - $parteInteira;

            echo "<p>Analisando o número <strong>$numero</strong> informado pelo usuário:";

            echo "<li>A parte inteira do número é <strong>$parteInteira</strong>";
            echo "<li>A parte fracionário do número é <strong>$parteFracionaria</strong>";
        ?>

        <p><a href="javascript:history.go(-1)"><- Voltar</a></p>
    </main>
</body>
</html>