<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // $num = 010;
        // echo "O valor da variável é $num ";

        // $v = 300;
        // var_dump($v); //Utilizar para exibir o tipo da variável além do valor

        // $num = (int) 3e2; // = 3 x 10² - (int) utilizado para forçar a declaração do tipo (coerção)
        // echo "O valor é $num ";
        // var_dump($num);

        // $num = (int) "950";
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);
        // echo "O valor para casado é $casado";

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {
            private String $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>