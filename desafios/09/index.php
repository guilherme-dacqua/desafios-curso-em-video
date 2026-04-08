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
        <h1>Idades</h1>
    </header>

    <?php
        $nascimento = $_POST["nascimento"] ?? 0;
        $ano = $_POST["ano"] ?? 0;
        $compr_nasc = strlen($nascimento);
        $compr_ano = strlen($ano);
          if ($compr_ano < 4 || $compr_nasc < 4) {
            $texto = "Valores incompatíveis! Os anos devem estar no formato 0000.";
          } elseif ($nascimento > $ano) {
                $texto = "Valores incompatíveis! O ano do seu nascimento não pode ser o maior valor.";
            } else {
                $idade = $ano - $nascimento;
                $texto = "Sua idade em $ano é $idade ano(s).";
            }
    ?>

    <main>
        <form action=<?= $_SERVER["PHP_SELF"] ?> method="post">
            <label for="nascimento">Ano do seu nascimento</label>
            <input type="number" name="nascimento" required>
            <label for="ano">Você quer saber a sua idade em que ano?</label>
            <input type="number" name="ano" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <footer>
        <h2>Resultados</h2>
        <?= $texto ?>
    </footer>
</body>
</html>