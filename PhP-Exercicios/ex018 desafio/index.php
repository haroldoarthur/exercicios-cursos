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
    $total = $_GET['seg'];
    ?>
    <section>
        <main>
            <form action=" <?= $_SERVER['PHP_SELF'] ?> " method="get">
                <label for="seg">Quantidade de segundos</label>
                <input type="number" name="seg" id="seg" value="<?= $total?>">

                <input type="submit" value="Calcular">
            </form>
        </main>

        <?php
            $sobra = $total;
            //total semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;
            //total dia
            $dia = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;
            //total horas
            $hora = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;
            //total minutos
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            //total segundos
            $segundos = $sobra;
        ?>

        <section id="resultado">
            <h2>Resultado</h2>
            <ul>
                <li><?=$semana?> semanas</li>
                <li><?=$dia?> dias</li>
                <li><?=$hora?> horas</li>
                <li><?=$minuto?> minutos</li>
                <li><?=$segundos?> segundos</li>
            </ul>
        </section>

    </section>
</body>

</html>