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
        <h1>Calculadora de Tempo</h1>
    </header>

    <?php
        $segundos = $_REQUEST["segundos"] ?? 0;
        // Semanas:
            $semanas = intdiv($segundos, 604800);
            $modulo = $segundos % 604800;
        // Dias:
            $dias = intdiv($modulo, 86400);
            $modulo = $modulo % 86400;
        // Horas:
            $horas = intdiv($modulo, 3600);
            $modulo = $modulo % 3600;
        // Minutos:
            $minutos = intdiv($modulo, 60);
            $modulo = $modulo % 60;
        // Segundos
            $segundos2 = $modulo;
    ?>

    <main>
        <form action=<?= $_SERVER["PHP_SELF"] ?> method="post">
            <label for="segundos">Segundos para calcular</label>
            <input type="number" name="segundos" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <footer>
        <h2>Resultados</h2>
        <?php
            $segundos = number_format($segundos, 0, "", ".");
            echo "
                <ul>
                    <p>$segundos segundos equivalem a...</p>
                    <p>
                        Semanas: $semanas <br>
                        Dias: $dias<br>
                        Horas: $horas<br>
                        Minutos: $minutos<br>
                        Segundos: $segundos2<br>
                    </p>
                </ul>    
            ";
        ?>
    </footer>
</body>
</html>