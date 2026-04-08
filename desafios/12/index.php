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
        <h1>Caixa Eletrônico</h1>
    </header>
    <?php
        $valor = $_REQUEST["valor"] ?? 0;
        // 100,00
            $cem = intdiv($valor, 100);
            $modulo = $valor % 100;
        // 50,00
            $cinquenta = intdiv($modulo, 50);
            $modulo = $modulo % 50;
        // 20,00
            $vinte = intdiv($modulo, 20);
            $modulo = $modulo % 20;
        // 10,00
            $dez = intdiv($modulo, 10);
        // 5,00
            $cinco = intdiv(($modulo % 10), 5);
    ?>
    <main>
        <p>
            <form action=<?= $_SERVER["PHP_SELF"] ?> method="post">
                <label for="valor">Valor</label>
                <input type="number" name="valor" step="5" required>
                <input type="submit" value="Calcular">
            </form>
        </p>
        <?php
            echo "
                <p>
                    <img src=\"nota_100.png\" width=\"130\" height=\"60\"/> X$cem
                    <br>
                    <img src=\"nota_50.png\" width=\"130\" height=\"60\"/> X$cinquenta
                    <br>
                    <img src=\"nota_20.png\" width=\"130\" height=\"60\"/> X$vinte
                    <br>
                    <img src=\"nota_10.png\" width=\"130\" height=\"60\"/> X$dez
                    <br>
                    <img src=\"nota_5.png\" width=\"130\" height=\"60\"/> X$cinco
                </p>
            ";
        ?>
    </main>
</body>
</html>