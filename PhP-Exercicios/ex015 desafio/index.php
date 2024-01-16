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
        $media1 = $_GET ['m1']??1;
        $media2 = $_GET ['m2']??1;
        $peso1 = $_GET ['p1']??1;
        $peso2 = $_GET ['p2']??1;
        $medias = ($media1 + $media2)/2;
        $mediap = (($media1*$peso1) + ($media2*$peso2))/($peso1 + $peso2);
    ?>
    <section>
        <main>
            <form action=" <?=$_SERVER['PHP_SELF']?> " method="get">
                <label for="m1">Media1</label>
                <input type="number" name="m1" id="m1" value="<?=$media1?>">

                <label for="m2">Media2</label>
                <input type="number" name="m2" id="m2" value="<?=$media2?>">

                <label for="p1">Peso1</label>
                <input type="number" name="p1" id="p1" value="<?=$peso1?>">

                <label for="p2">Peso2</label>
                <input type="number" name="p2" id="p2" value="<?=$peso2?>">

                <input type="submit" value="Calcular">
            </form>
        </main>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
    
            echo "<p>A media simples é $medias</p>";
            echo "<p>A media ponderada é $mediap</p>";
            ?>
        </section>

    </section>
</body>

</html>