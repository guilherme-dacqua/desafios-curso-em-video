<!DOCTYPE html>
<html lang="pt--br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        $divisor = $_POST["divisor"] ?? 1;
        $dividendo = $_POST["dividendo"] ?? 0;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
            <form action=<?= $_SERVER["PHP_SELF"]?> method="post">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" min="0" value=<?= $dividendo ?>>
                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" min="1" value=<?= $divisor ?>>
                <input type="submit" value="Analisar">  
            </form>
    </main>

    <section>
        <h2>Resultado</h2>
            <?php

                $quociente = intdiv($dividendo, $divisor);
                $modulo = $dividendo % $divisor;

                echo "
                  <table class=\"divisao\">
                    <tr>
                        <td>$dividendo</td>
                        <td>$divisor</td>
                    </tr>
                    <tr>
                        <td>$modulo</td>
                        <td>$quociente</td>
                    </tr>
                  </table>  
                ";
            ?>
    </section>    
</body>
</html>