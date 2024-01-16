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
        $formula1 = $numero / 4.8;

        echo "<p>Os seus R$ $numero equivalem a US$ $formula1 </p>";
        


        ?>







    <p><a href="javascript:history.go(-1)">Voltar para a pagina</a></p></section>
</body>

</html>