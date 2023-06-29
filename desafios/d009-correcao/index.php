<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? NULL;
        $peso1 = $_GET['peso1'] ?? 1;
        $valor2 = $_GET['valor2'] ?? NULL;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor:</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" required>

            <label for="peso1">1º Peso:</label>
            <input type="number" name="peso1" id="peso1" min="1" value="<?=$peso1?>" required>

            <label for="valor2">2º Valor:</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>" required>

            <label for="peso2">2º Peso:</label>
            <input type="number" name="peso2" id="peso2" min="1" value="<?=$peso2?>" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section> 
        <?php 
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($ma, 2, ",", ".")?>;</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mp, 2, ",", ".")?>.</li>
        </ul>
    </section>
</body>
</html>