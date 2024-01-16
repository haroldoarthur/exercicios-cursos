<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <section> <h1>Analisador de nuemro real</h1>
         <?php

        $numero = $_GET ["numero"];
        echo "Analisando o numero $numero";
        
        $inteiro = (int) $numero;
        $fra = $numero - $inteiro;

        echo "<p> A parte inteira é $inteiro </p>";
        echo "<p> A parte fracionaria é $fra </p>";












        ?>
    <p><a href="javascript:history.go(-1)">Voltar para a pagina</a></p></section>
</body>

</html>