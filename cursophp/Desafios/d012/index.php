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
        $total = $_GET['s1'] ?? 0;
        // $total = 1235983;
        
        $semanas = intdiv($total, 604800);
        $semanasResto = $total % 604800;

        $dias = intdiv($semanasResto, 86400);
        $diasResto = $semanasResto % 86400;
      
        $horas = intdiv($diasResto, 3600);
        $horasResto = $diasResto % 3600;

        $minutos = intdiv($horasResto, 60);
        $minutosResto = $horasResto % 60;

        $segundos = $minutosResto;
    ?>    

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="s1">Qual é o total em segundos?</label>    
            <input type="number" name="s1" id="s1" min="0" value="<?php echo $total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?php echo number_format($total, 0, ",", ".")?> segundos </strong>equivalem a um total de:</p>
        <ul>
            <li><?php echo $semanas?> semanas.</li>
            <li><?php echo $dias?> dias.</li>
            <li><?php echo $horas?> horas.</li>
            <li><?php echo $minutos?> minutos.</li>
            <li><?php echo $segundos?> segundos.</li>            
        </ul>
    </section>

</body>
</html>