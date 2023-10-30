<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once 'Mamifero2.php';
        require_once 'Animal2.php';
        require_once 'Cachorro2.php';
        require_once 'Lobo2.php';

        // $c = new Mamifero2;
        // $c = new Lobo2;
        $c = new Cachorro2;


    ?>
    <main>
        <h1>Sons de mamiferos</h1>
        
        <?php 
            $c->reagirFrase("Olá");
            echo "<br>";
            echo "<br>";
            $c->reagirFrase("Vai Apanhar!");
            echo "<br>";
            echo "<br>";
            $c->reagirHora(11,45);
            echo "<br>";
            echo "<br>";
            $c->reagirHora(21,00);
            echo "<br>";
            echo "<br>";
            $c->reagirDono(true);
            echo "<br>";
            echo "<br>";
            $c->reagirDono(false);
            echo "<br>";
            echo "<br>";
            $c->reagirIdadePeso(2,12.5);
            echo "<br>";
            echo "<br>";
            $c->reagirIdadePeso(17,4.5);
            echo "<br>";
            echo "<br>";
        ?>
        
    </main>
</body>
</html>