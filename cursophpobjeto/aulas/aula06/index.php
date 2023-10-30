<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Controle Remoto</h1>
        <pre>
            <?php 
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                // $c->ligar();                
                $c->maisVolume();
                $c->abrirMenu();

            ?>
        </pre>
    </main>
</body>
</html>