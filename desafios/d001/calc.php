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
            // $_REQUEST == $_GET, $_POST, $_COOKIES
            $numero = $_GET["numero"];

            echo "<p>O número escolhido é <strong>$numero</strong>";
            echo "<p> O seu antecessor é " . $numero - 1;
            echo "<p> E seu sucessor é " . $numero + 1;
        ?>

        <p><a href="javascript:history.go(-1)"><- Voltar</a></p>
    </main>
</body>
</html>