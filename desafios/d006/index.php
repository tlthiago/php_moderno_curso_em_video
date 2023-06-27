<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? NULL;
        $divisor = $_GET['divisor'] ?? NULL;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            if ($dividendo == NULL && $divisor == NULL) {
                echo "<p>Digite os valores que deseja dividir!</p>";
            } else {
                echo    "<p>    Dividendo: $dividendo<br>
                                Divisor: $divisor<br>
                                Quociente: " . $dividendo / $divisor . "<br>
                                Resto: " . $dividendo % $divisor . "
                        </p>";
            }
        ?>
    </section>
</body>
</html>