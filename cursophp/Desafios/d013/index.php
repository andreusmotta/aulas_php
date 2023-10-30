<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
    
    $valor = $_GET['v1'] ?? 0;
    
    $nota100 = intdiv($valor, 100);
    $sobra100 = $valor % 100;
    
    $nota50 = intdiv($sobra100, 50);
    $sobra50 = $sobra100 % 50;
    
    $nota10 = intdiv($sobra50, 10);
    $sobra10 = $sobra50 % 10;
    
    $nota5 = intdiv($sobra10, 5);
    $sobra5 = $sobra10 % 5;


    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="v1">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="v1" id="v1" min="5" step="5" value="<?php echo $valor?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?php echo number_format($valor, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?php echo $nota100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?php echo $nota50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?php echo $nota10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?php echo $nota5?></li>
        </ul>
    </section>

</body>
</html>