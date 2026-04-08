<!DOCTYPE html>
<html lang="pt--br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios em PHP</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script>
        function atualizarPagina() {
            
        }
    </script> -->
</head>
<body>
    <header>
        <h1>Desafio 02</h1>
    </header>
    <section>
        <?php 
            echo "
                <p>Gerando um número aleatório entre 0 e 100...</p>
                <p>O valor gerado foi <strong>" . rand(0, 100) . "</strong></p>
                <p><button onclick=\"location.reload()\">\u{1F503} Gerar novamente</button></p>      
            ";
        ?>
    </section>    
</body>
</html>