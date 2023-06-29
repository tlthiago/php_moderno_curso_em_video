<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" step="5" required value="<?=$valor?>">

            <p><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $sobra = $valor;
        // Total de notas de 100
        $notas100 = floor($valor / 100);
        $sobra %= 100;

        // Total de notas de 50
        $notas50 = floor($sobra / 50);
        $sobra %= 50;

        // Total de notas de 100
        $notas10 = floor($sobra / 10);
        $sobra %= 10;
        
        // Total de notas de 100
        $notas5 = floor($sobra / 5);
        $sobra %= 5;
    ?>
    <section>
        <h2>Saque de R$<?=$valor?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li> 100 x <?=$notas100?></li>
            <li> 50 x <?=$notas50?></li>
            <li> 10 x <?=$notas10?></li>
            <li> 5 x <?=$notas5?></li>
        </ul>
    </section>
</body>
</html>