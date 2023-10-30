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
        $preço = $_GET['p1'] ?? 0;
        $reajuste = $_GET['a1'] ?? 0;
        $final = (($preço * $reajuste) / 100) + $preço;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="p1">Preço do produto (R$)</label>
            <input type="number" name="p1" id="p1" min="0.10" step="0.01" value="<?php echo $preço?>">
            <label for="a1">Qual será o percentual de reajuste? (<strong><span id="p">?%</span></strong>)</label>
            <!-- <input type="number" name="a1" id="a1" min="0" value="<?php echo $reajuste?>"> -->
            <input type="range" name="a1" id="a1" min="0" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?php echo number_format($preço, 2, ",", ".")?>, com <strong><?php echo $reajuste?>% de aumento</strong> vai passar a custar <strong>R$<?php echo number_format($final, 2, ",", ".")?></strong> a partir de agora</p>
    </section>

    <script>
        // Declarações automáticas
        mudaValor()

        function mudaValor() {
            p.innerText = a1.value;
        }
    </script>
</body>
</html>