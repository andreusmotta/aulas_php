<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>   
    <?php 
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;
        $c1->destampar();

        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->tampar();
     
    ?>
    
    <main>
        <h1>Caneta Azul</h1>
        <h2>Var Dump</h2>        
        <?php var_dump($c1);?>    
        <br></br>

        <h2>Print R</h2>
        <?php print_r($c1);?>    
        <br></br>
    
        <h2>Chamando o método Rabiscar:</h2>
        <?php $c1->rabiscar()?>
    </main>
    
    <main>
        <h1>Caneta Verde</h1>
        <h2>Var Dump</h2>        
        <?php var_dump($c2);?>    
        <br></br>

        <h2>Print R</h2>
        <?php print_r($c2);?>    
        <br></br>
    
        <h2>Chamando o método Rabiscar:</h2>
        <?php $c2->rabiscar()?>
    </main>
    
</body>
</html>