<!DOCTYPE html>
<html lang="pt--br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 03</h1>
    </header>
    <section>
            <?php
                $data = date("m-d-Y");
                
                // API:
                $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='$data'&\$top=100&\$format=json";
                $response = file_get_contents($url);
                $dados = json_decode($response, true);
                $cotacao = $dados["value"]["0"]["cotacaoCompra"];

                // Cálculo/Exibição:
                $conversao = $_POST["valor"] / $cotacao;
                $conversao_frmtd = round($conversao, 2);
                echo "
                    <p>Seu valor em dólar é US$$conversao_frmtd</p>
                    <p><a href=\"javascript:history.go(-1)\">Voltar<a/></p>
                ";  
            ?>
    </section>    
</body>
</html>