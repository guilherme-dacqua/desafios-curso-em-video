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
        <h1>Calculadora de Raízes</h1>
    </header>
    <main>
        <form action=<?= $_SERVER["PHP_SELF"]?> method="post">
            <input type="number" name="valor">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $valor = $_REQUEST["valor"];
            $raiz_quadrada = sqrt($valor);
            $raiz_quadrada = round($raiz_quadrada, 5);
            $raiz_cubica = pow($valor, 1.0/3.0);
            $raiz_cubica = round($raiz_cubica, 5);
            
            echo "
                Raíz quadrada: $raiz_quadrada <br>
                Raíz cúbica: $raiz_cubica
            ";
        ?>
    </section>
</body>
</html>