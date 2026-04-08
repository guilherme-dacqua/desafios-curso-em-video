<?php
    // 1. Receber as variáveis de um formulário HTML;
    // 2. Operador de coalescência nula "??";
    // 3. Comando em JavaScript para voltar a página anterior.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Retorno do formulário</h1>
    </header>
    <main>
        <?php
            $nome = $_REQUEST["nome"] ?? "Desconhecido";
            $sobrenome = $_REQUEST["sobrenome"] ?? $nome;
            echo "Bem vindo, $nome $sobrenome. Estou aprendendo PHP."
        ?>
            <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>