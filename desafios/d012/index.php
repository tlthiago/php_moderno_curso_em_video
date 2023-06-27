<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_GET['segundos'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total em segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $semanas = floor($segundos / 604800);
            $dias = floor($segundos / 86400);
            $horas = floor($segundos / 3600);
            $minutos = floor($segundos / 60);
            $rSegundos = $segundos % 60;

            echo "<p>Analisando o valor que você digitou, <strong>" . number_format($segundos, 0, ".", ".") . " segundos</strong> equivalem a um total de:
                <ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$rSegundos segundos</li>
                </ul></p>";
        ?>
    </section>
</body>
</html>