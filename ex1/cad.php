<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>

        <h1>Resultado do processamento</h1>

    </header>
    <main>

        <?php 
            $nome = $_GET["nome"]; // $_REQUEST funciona para os cookie, post e get.
            $sobrenome = $_GET["sobrenome"];
            echo "<p>É um prazer ti conhecer <strong>$nome $sobrenome</strong>!";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar à pagina anterior</a></p>

    </main>
</body>
</html>