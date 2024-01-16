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
        $numero = $_GET["numero"];
        $conta1 = $numero - 1;
        $conta2 = $numero + 1;

        echo "<p>O $numero foi escolhido, e seu antecessor é $conta1 e seu sucessor é $conta2</p>"
        ?>
    </section>











    <section><p><a href="javascript:history.go(-1)">Voltar para a pagina</a></p></section>
</body>

</html>