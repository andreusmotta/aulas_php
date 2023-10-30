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
        require_once 'Microfone.php';
        $m1 = new Microfone;
        $m1->cor = "Cinza";
        $m1->tipo = "Cardióide";
        $m1->conexão = "USB";
        $m1->ligado  =false;
        $m1->ligar();
        
        $m2 = new Microfone;
        $m2->cor = "Preto";
        $m2->tipo = "Dinâmico";
        $m2->conexão = "XLR";
        $m2->ligado  =false;
        $m2->desligar();
    ?>

    <main>
        <h1>Microfone Cinza</h1>
        <h2>Print R</h2>
        <?php echo print_r($m1)?>
        <br></br>

        <h2>Funcionando?</h2>
        <?php $m1->gravar()?>
    </main>

    <main>
        <h1>Microfone Preto</h1>
        <h2>Print R</h2>
        <?php echo print_r($m2)?>
        <br></br>

        <h2>Funcionando?</h2>
        <?php $m2->gravar()?>
    </main>
</body>
</html>