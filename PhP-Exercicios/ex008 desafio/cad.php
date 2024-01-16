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
        $valorapi = "https://economia.awesomeapi.com.br/json/USD";
        $precoatual = file_get_contents($valorapi);
        $precofinal = json_decode($precoatual, true);

        $usdToBrlRate = $precofinal[0]['bid'];

        $numero = $_GET ["numero"];
        
        $conversor = $numero / $usdToBrlRate;

        echo "Os seus BRL$ $numero valem USD$ $conversor";


        ?>







    <p><a href="javascript:history.go(-1)">Voltar para a pagina</a></p></section>
</body>

</html>