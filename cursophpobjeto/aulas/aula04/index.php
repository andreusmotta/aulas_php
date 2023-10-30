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

    // $c1 = new Caneta();
    // $c1->setModelo("BIC");
    // $c1->setPonta(0.5);

    $c1 = new Caneta ("BIC", "Azul", 0.5);

    var_dump($c1);
   ?>    
   <main>
        <h1>Caneta</h1>
        <pre>
            <!-- <?php echo "Eu tenho uma caneta ". $c1->getModelo() ." de ponta ". $c1->getPonta() .""?> -->
            <!-- Dá pra fazer usando as chaves tamnbém: -->
            <?php echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"?>
            <br></br>
            <?php print_r($c1)?>            
        </pre>
   </main>
</body>
</html>