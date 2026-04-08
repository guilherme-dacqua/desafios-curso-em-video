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
        <h1>Médias</h1>
    </header>

    <?php
        $primeiro = $_REQUEST["primeiro"] ?? 0;
        $primeiro_peso = $_REQUEST["primeiro_peso"] ?? 1;
        $segundo = $_REQUEST["segundo"] ?? 0;
        $segundo_peso = $_REQUEST["segundo_peso"] ?? 1;
        $aritmetica = ($primeiro + $segundo) / 2;
        $ponderada = ($primeiro * $primeiro_peso + $segundo * $segundo_peso) / ($primeiro_peso + $segundo_peso); 
    ?>

    <main>
        <form action=<?= $_SERVER["PHP_SELF"] ?> method="post">
            <label for="primeiro">1° Valor</label>
            <input type="number" name="primeiro" required>
            <label for="primeiro_peso">1° Peso</label>
            <input type="number" name="primeiro_peso" min="1" required>
            <label for="segundo">2° Valor</label>
            <input type="number" name="segundo" required>
            <label for="segundo_peso">2° Peso</label>
            <input type="number" name="segundo_peso" min="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <footer>
        <h2>Resultados</h2>
        <?php
            echo "
                <ul>
                    <li>Média Aritmética: $aritmetica</li>
                    <li>Média Ponderada: $ponderada</li>
                </ul>
            ";
        ?>
    </footer>
</body>
</html>