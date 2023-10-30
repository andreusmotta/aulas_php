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
        $num = $_GET['num'] ?? 1;

        // $raiz2 = sqrt($num);
        $raiz2 = $num ** (1/2);
        $raiz3 = $num ** (1/3);
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?php echo $num?>">
            <input type="submit" value="Calcular raizes">            
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "<p>Analizando o número <strong>$num</strong></p>, temos:";     
            echo "<ul><li>A sua raiz quadrada de é <strong>". number_format($raiz2, 3, ",", ".") ."</strong></ul></li>";
            echo "<ul><li>A sua raiz cúbica é <strong>". number_format($raiz3, 3, ",", ".") ."</strong></ul></li>";
        ?>
    </section>
</body>
</html>