<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoInicio = $_GET['anoInicio'] ?? 2000;
        $anoFim = $_GET['anoFim'] ?? 2023;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoInicio">Em que ano você nasceu?</label>
            <input type="number" name="anoInicio" id="anoInicio" value="<?=$anoInicio?>">

            <label for="anoFim">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=date('Y')?></strong>)</label>
            <input type="number" name="anoFim" id="anoFim" value="<?=$anoFim?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
            $idade = abs($anoInicio - $anoFim);
        ?>
        <h2>Resultado</h2>
        <?php 
            echo "<p>Quem nasceu em $anoInicio vai ter <strong>$idade anos</strong> em $anoFim!</p>";
        ?>
    </section>
</body>
</html>