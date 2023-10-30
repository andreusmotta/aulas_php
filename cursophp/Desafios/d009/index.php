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
        $num1 = $_GET['n1'] ?? 1;
        $num2 = $_GET['n2'] ?? 1;
        $peso1 = $_GET['p1'] ?? 1;
        $peso2 = $_GET['p2'] ?? 1;
        $mediaA = ($num1 + $num2) / 2;
        $mediaP = ($num1 * $peso1 + $num2 * $peso2) / ($peso1 + $peso2);

    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Primeiro número</label>
            <input type="number" name="n1" id="n1" required value="<?php echo $num1?>">
            <label for="n1">Primeiro peso</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?php echo $peso1?>">
            <label for="n1">Segundo número</label>
            <input type="number" name="n2" id="n2" required value="<?php echo $num2?>">
            <label for="n1">Segundo Peso</label>
            <input type="number" name="p2" id="p2" min="1" required value="<?php echo $peso2?>">

            <input type="submit" value="Calcular as médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando so valores <?php echo $num1?> e <?php echo $num2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores <?php echo $num1?> e <?php echo $num2?> é igual a <?php echo number_format($mediaA, 2, ",", ".")?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong>  com pesos <?php echo $peso1?> e <?php echo $peso2?> é igual a <?php echo number_format($mediaP, 2, ",", ".")?>.</li>
        </ul>
    </section>
</body>
</html>