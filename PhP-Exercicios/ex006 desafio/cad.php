<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <section> <h1>Conta</h1>
         <?php
             
        $numero = $_GET ["numero"];
        $gerador = rand(1,100);
        
        if($gerador > $numero){
            echo "<p> O numero gerado $gerador é maior que $numero </p>";
        } else {
            echo "<p>O numero gerado $gerador é menor que $numero </p>";
        }
        ?>
    </section>











    <section><p><a href="javascript:history.go(-1)">Voltar para a pagina</a></p></section>
</body>

</html>