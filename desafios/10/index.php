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
        <h1>Reajuste de Preço</h1>
    </header>

    <?php
        $preco = $_POST["preco"] ?? 0;
        $reajuste = $_POST["reaj"] ?? 0;
        $reajuste = $reajuste / 100 + 1.0;
        $preco_final = $reajuste * $preco;
        $preco_final = number_format($preco_final, 2, ",", ".");
    ?>

    <main>
        <form action=<?= $_SERVER["PHP_SELF"] ?> method="post">
            <label for="preco">Preço do produto</label>
            <input type="number" name="preco" step="0.01" required>
            <label for="reaj">Percentual de reajuste (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" oninput="mudaValor()">
            <input type="submit" value="Calcular">
        </form>
    </main>
        <script>
            mudaValor()
            function mudaValor() {
                p.innerText = reaj.value;
            }
        </script>
    <footer>
        <h2>Resultados</h2>
        <?= "O preço final será R$$preco_final" ?>
    </footer>
</body>
</html>