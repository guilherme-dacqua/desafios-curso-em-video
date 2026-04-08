<?php 
    /*
        1. Função para mudar o fuso horário do servidor;
        2. Função para resgatar o dia e hora atual. 
        3. Variáveis;
            - Arrays;
            - Listas;
            - Variáveis simples.
        4. Função para revelar uma variável.
    */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>
        <?php echo "O dia de hoje é: " . date("d/m/Y") . "<br>" ?>
    </h1>
    <h2>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            echo "Agora, são " . date("G:i:s") . " segundo o fuso " . date("T");

            //phpinfo();

            $array = array(0 => 7, 1 => 2, 2 => 3);
            // $array_float = (float) $array[0];
            $array_float = 0;
            var_dump($array_float);

            $sobrenome = "Dall Acqua";
            echo 'Guilherme \$sobrenome';
        ?>
    </h2>
</head>
<body>
</body>
</html>