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
        <h1>Desafio 04</h1>
    </header>
    <section>
        <form action="real.php" method="post">
            <label>Escreva um número do tipo Real:</label>
            <input type="number" name="numero" id="idnumero" step="0.000000001">
                <!-- O atributo "step" delimita o intervalo entre os números -->
            <input type="submit" value="Enviar">
        </form>
    </section>    
</body>
</html>