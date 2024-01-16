<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 40px;
        }
    </style>
</head>

<body>
    <?php
    //Capturando os dados da retroalimentação
    $saque = $_GET['saque'] ?? 0;
    ?>
    <section>
        <main>
            <form action=" <?= $_SERVER['PHP_SELF'] ?> " method="get">
                <label for="saque">Caixa eletronico</label>
                <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
                <p style="font-size: 0.7em;"><sup>*</sup>Nodas disponiveis: R$100 R$50 R$20 R$10 R$5 R$1</p>

                <input type="submit" value="Sacar">
            </form>
        </main>

        <?php
            $sobra = $saque;
            //saque 100
            $tot100 = floor($sobra /100);
            $sobra %= 100;
            //saque 50
            $tot50 = floor($sobra / 50);
            $sobra %= 50;
            //saque 10
            $tot10 = floor($sobra / 10);
            $sobra %= 10;
            //saque 5 
            $tot5 = floor($sobra / 5);
            $sobra %= 5;
        ?>

        <section id="resultado">
            <h2>O caixa vai te entregar as seguintes notas</h2>
            <ul>
                <l1><img src="img/100-reais.jpg" alt="" class="nota">x<?=$tot100?></l1>
                <l1><img src="img/50-reais.jpg" alt="" class="nota">x<?=$tot50?></l1>
                <l1><img src="img/10-reais.jpg" alt="" class="nota">x<?=$tot10?></l1>
                <l1><img src="img/5-reais.jpg" alt="" class="nota">x<?=$tot5?></l1>
            </ul>
        </section>

    </section>
</body>

</html>