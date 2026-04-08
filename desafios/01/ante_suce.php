<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 01</h1>
    </header>
    <section>
        <?php
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "
                <p>Seu número é $numero.</p>
                <p>O seu antecessor é $antecessor.</p>
                <p>O seu sucessor é $sucessor.</p> 
                <p><a href=\"javascript:history.go(-1)\">\u{2190} Voltar</a></p>
            ";
        ?>
    </section>
</body>
</html>