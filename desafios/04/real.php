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
            <?php
                $numero = $_POST["numero"];
                $numero = number_format($numero, 3, ",", ".");  
                $classificacao = explode(",", $numero);
                    $inteiro = $classificacao["0"];
                    $decimal = $classificacao["1"];
                echo "
                    <p>Parte inteira: $inteiro</p>
                    <p>Parte decimal: 0,$decimal</p>
                ";
            ?>
    </section>    
</body>
</html>