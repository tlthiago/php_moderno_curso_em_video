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
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>">

            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=$valor?> realizado</h2>
        <?php 
            $notas100 = floor($valor / 100);
            $resto = $valor % 100;
            $notas50 = 0;
            $notas10 = 0;
            $notas5 = 0;
            
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:
            <ul><li> 100 x $notas100</li>
                <li> 50 x $notas50</li>
                <li> 10 x $notas10</li>
                <li> 5 x $notas5</li>
            </ul></p>";
        ?>
    </section>
</body>
</html>