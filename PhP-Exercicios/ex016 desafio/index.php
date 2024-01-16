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
        $anoatual = 2024;
        $anonaceu = $_GET ['ano1'];
        $idadeano = $_GET ['ano2'];
        $idadeatual = $anoatual - $anonaceu;
        $idadenoano = $idadeano - $anonaceu;
    ?>
    <section>
        <main>
            <form action=" <?=$_SERVER['PHP_SELF']?> " method="get">
                <label for="ano1">Ano em que vc nasceu</label>
                <input type="number" name="ano1" id="ano1" value="<?=$anonaceu?>">

                <label for="ano2">Emqual ano quer saber sua idade?</label>
                <input type="number" name="ano2" id="ano2" value="<?=$idadeano?>">

                <input type="submit" value="Calcular">
            </form>
        </main>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
    
            echo "<p>Sua idade hoje é $idadeatual</p>";
            echo "<p>A sua idade no ano $idadeano será $idadenoano</p>";
            ?>
        </section>

    </section>
</body>

</html>