<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        //Capturando os dados da retroalimentação
        $valor1 = $_GET ['v1'];
        $valor2 = $_GET ['v2'];
    ?>
    <section>
        <main>
            <form action=" <?=$_SERVER['PHP_SELF']?> " method="get">
                <label for="v1">Valor1</label>
                <input type="number" name="v1" id="v1" value="<?=$valor1?>">
                <label for="v2">Valor2</label>
                <input type="number" name="v2" id="v1" value="<?=$valor2?>">
                <input type="submit" value="Somar">
            </form>
        </main>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
            $soma = $valor1 + $valor2;
            echo "<p> A soma entre os valores $valor1 e $valor2 é igual a $soma </p>";
            ?>
        </section>

    </section>
</body>

</html>