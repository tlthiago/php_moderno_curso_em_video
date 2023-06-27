<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $percentual = $_GET['percentual'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" step="0.01">

            <label for="percentual">Qual será o percentual de reajuste? (<strong><?=$percentual?>%</strong>)</label>
            <input type="number" min="0" max="100" name="percentual" id="percentual" value="<?=$percentual?>">

            <!-- <label for="reajuste" id="reajuste">Qual será o percentual de reajuste? (<strong>0%</strong>)</label>
            <input type="range" min="0" max="100" name="reajuste" id="reajuste" value=""> -->

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $reajuste = ($percentual * $preco) / 100;
            $precoReajustado = $preco + $reajuste;

            echo "<p>O produto que custava R$" . number_format($preco, 2, ",", ".") . ", com <strong>$percentual% de aumento</strong> vai passar a custar <strong>R$" . number_format($precoReajustado, 2, ",", ".") . "</strong> a partir de agora.</p>";
        ?>
    </section>
</body>
</html>