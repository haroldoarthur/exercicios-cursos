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
                <label for="v1">Dividendo</label>
                <input type="number" name="v1" id="v1" value="<?=$valor1?>">
                <label for="v2">Divisor</label>
                <input type="number" name="v2" id="v1" value="<?=$valor2?>">
                <input type="submit" value="Dividir">
            </form>
        </main>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
            $divis = $valor1 / $valor2;
            $restod = $valor1 % $valor2;
            echo "<p>Dividendo $valor1 | Divisor $valor2</p>";
            echo "<p>Resto $restod | Resultado $divis</p>";
            ?>
        </section>

    </section>
</body>

</html>