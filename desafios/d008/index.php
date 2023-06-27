<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? NULL;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $rQuadrada = sqrt($numero);
            $rCubica = pow($numero, 1.0 / 3.0);
            if ($numero == NULL) {
                echo "<p>Digite o número que deseja obter as raízes</p>";
            } else {
                echo    "<p>Analisando o número $numero, temos: 
                        <ul>
                            <li>A sua raiz quadrada é <strong>" . number_format($rQuadrada, 3, ",") . "</strong>
                            <li> A sua raiz cúbica é <strong>" . number_format($rCubica, 3, ",") . "</strong>
                        </ul></p>";
            }
        ?>
    </section>
</body>
</html>