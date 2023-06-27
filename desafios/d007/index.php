<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? NULL;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">

            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $qtSalario = $salario / 1380;
            $resto = $salario % 1380;

            if ($salario == NULL) {
                echo "<p>Digite o seu salário acima.</p>";
            } else {
                echo "<p>Quem recebe um salário de R$" . number_format($salario, 2, ",", ".") . " ganha <strong>" . floor($qtSalario) . " salários mínimos</strong> + R$ " . number_format($resto, 2, ",", ".") . ".</p>";
            }
        ?>
    </section>
</body>
</html>