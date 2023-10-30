<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        $min = 1380.60;
        $sal = $_GET['sal'] ?? $min;
        $tot = intdiv($sal, $min);
        $dif = $sal % $min;

        // echo "Quem ganha $sal por mês, ganha um totam de $tot salários mínimos + $dif.";
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">            
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?php echo $sal?>" step="0.01">
            <p>Consideraqndo o salário mínimo de <strong>R$</p>
            <?php echo number_format($min, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">            
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p> Quem recebe um salário de R\$". number_format($sal, 2, ",", ".") ." ganha <strong>$tot salários mínimos</strong> + R\$ ". number_format($dif, 2, ",", ".") .".<p>"
        ?>
    </section>
</body>
</html>