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
        $percentual = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" min="0" max="100" step="1" name="reajuste" id="reajuste" oninput="mudaValor()" value="<?=$percentual?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $reajuste = ($preco * $percentual) / 100;
        $precoReajustado = $preco + $reajuste;
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$percentual?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($precoReajustado, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
    <script>
        mudaValor();

        function mudaValor() {
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>