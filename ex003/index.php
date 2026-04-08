<?php
    // 1. Formulários HTML;
    // 2. "Heredoc" e "Nowdoc";
    // 3. Determinar o tipo de uma variável;
    //    a. settype($var, "integer");
    //    b. $var = (integer) $var;
    // 4. Atalho para comentar código (Contrl + ;);
    // 5. Atalho para procurar funcionalidades (Ctrl + Shift + P).
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <link rel="stylesheet" href="style.css">
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome">
            <input type="submit" value="Enviar">
        </form>
    </section>
    <?php
        // $sobrenome = "Felippe Dall Acqua";
        // echo <<< TESTE
        //     Olá, eu sou o Guilherme $sobrenome!
        // TESTE;

        // echo <<< 'TESTE'
        //     Olá, eu sou o Guilherme $sobrenome!
        // TESTE;
        
        // echo "<h1>";
        // $var = 1;
        // $var =(float) $var;
        // settype($var, "integer");
        // var_dump($var);
        // echo "</h1>";
    ?>
</body>
</html>