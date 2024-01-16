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
        $salariomin = 1412;
    ?>
    <section>
        <main>
            <form action=" <?=$_SERVER['PHP_SELF']?> " method="get">
                <label for="v1">Quanto voce ganha?</label>
                <input type="number" name="v1" id="v1" value="<?=$valor1?>">
                <input type="submit" value="Calcular">
            </form>
        </main>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
            $salarios = $valor1 / $salariomin;
            $resto = $valor1 % $salariomin;

            echo "<p>Voce ganha ".intval($salarios)." Salarios minimos + $resto reais</p>";
            ?>
        </section>

    </section>
</body>

</html>