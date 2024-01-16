<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $nome = $_GET["nome"] ?? "sla po";
        $sobrenome = $_GET["sobrenome"] ?? "paia";
        echo "<p>É um prazer te conhecer, $nome $sobrenome! Este é o meu site!";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a pagina</a></p>
</body>
</html>