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
        $preco = $_GET ['preco'];
        $porcentagem = $_GET ['porcentagem'];
        $precofinal = $preco + ($preco / 100 * $porcentagem);
    ?>
    <section>
        <main>
            <form action=" <?=$_SERVER['PHP_SELF']?> " method="get">
                <label for="preco">Preco do produto</label>
                <input type="number" name="preco" id="preco" value="<?=$preco?>">

                <label for="porcentagem">Porcentagem de reajuste</label>
                <input type="number" name="porcentagem" id="porcentagem" value="<?=$porcentagem?>">

                <input type="submit" value="Calcular">
            </form>
        </main>
        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
    
            echo "<p>O produto teve um reajuste de $porcentagem % e custa agora $precofinal </p>";

            ?>
        </section>

    </section>
</body>

</html>