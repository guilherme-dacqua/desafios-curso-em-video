<!DOCTYPE html>
<html lang="pt--br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- Valor atual do salário mínimo -->
        <?php
            $url = "http://www.ipeadata.gov.br/api/odata4/ValoresSerie(SERCODIGO='MTE12_SALMIN12')";
            $response = file_get_contents($url);
            $dados = json_decode($response, true);
            $indice = count($dados["value"]) - 1;
            $salario_min = $dados["value"][$indice]["VALVALOR"];
        ?>

        <header>
            <h1>Calculadora de Salário Mínimo</h1>
        </header>
        <main>
            <form action=<?= $_SERVER["PHP_SELF"] ?> method="post">
                <label for="valor">Valor</label>
                <input type="number" name="valor">
                <input type="submit" value="Calcular">
            </form>
        </main>

    <section>
        <?php
            $valor = $_POST["valor"] ?? 0;
                if ($valor < $salario_min) {
                    echo "Esse valor corresponde a menos de um salário mínimo.";
                } else {
                    $quantidade = $valor / $salario_min;
                    $quantidade = explode(".", $quantidade);
                    $quantidade = $quantidade["0"];
                    $resto = $valor % $salario_min;

                    echo "  
                        R$$valor,00 corresponde a $quantidade salário(s) mínimo(s) e R$$resto,00.
                    ";
                }
        ?>
    </section>
</body>
</html>