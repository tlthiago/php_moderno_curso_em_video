<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_GET["numero"] ?? 0;
            $dolar = (int) $real / $cotacao;

            echo "<p>Seus R\$". number_format($real, 2, ",", ".") . " equivalem a <strong>US\$ " . number_format($dolar, 2, ",", ".") . "</strong></p>";
            echo "<p><strong>Cotação atual: $cotacao</strong></p>"

            //Modo profissional utilizando a forma de internalização do PHP - Biblioteca intl (Internallization PHP)
            // $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            // echo "<p>Seus ". numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
        ?>

        <p>*Sendo obtida diretamente do site do <a href="https://www.bcb.gov.br/"><strong>Banco Central do Brasil</strong></a></p>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>