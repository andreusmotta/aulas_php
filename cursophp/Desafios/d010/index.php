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
        $atual = date("Y");
        $nasc = $_GET["a1"] ?? $atual;
        $ano = $_GET["a2"] ?? $atual;
        $idade = $ano - $nasc;        
    ?>
    
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="a1">Em que ano você nasceu?</label>
            <input type="number" name="a1" id="a1" required max="<?php echo ($atual)-1?>" value="<?php echo ($nasc)-1?>">
            <label for="a2">Quer saber sua idade em qual ano? (Atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="a2" id="a2" required value="<?php echo $ano?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?php echo $nasc?> vai ter <strong><?php echo $idade?> anos</strong> em <?php echo $ano?>.</p>
    </section>
</body>
</html>