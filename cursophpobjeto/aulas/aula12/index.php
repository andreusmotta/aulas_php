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
        require_once 'Animal.php';
        require_once 'Ave.php';
        require_once 'Arara.php';
        require_once 'Cachorro.php';
        require_once 'Canguru.php';
        require_once 'Cobra.php';        
        require_once 'Mamifero.php';
        require_once 'Peixe.php';
        require_once 'PeixeDourado.php';
        require_once 'Reptil.php';
        require_once 'Tartaruga.php';

        $m1 = new Mamifero;
        $r1 = new Reptil;
        $p1 = new Peixe;
        $a1 = new Ave;
        $m2 = new Mamifero;
        $c1 = new Canguru;
        $k1 = new Cachorro;

        $m1->setPeso(85.3);
        $m1->setIdade(2);
        $m1->setMembros(4);
        
        $p1->setPeso(0.35);
        $p1->setIdade(1);
        $p1->setMembros(0);

        $a1->setPeso(0.89);
        $a1->setIdade(2);
        $a1->setMembros(2);

        $m2->setPeso(5.70);
        $m2->setIdade(8);
        $m2->setMembros(4);

        $c1->setPeso(55.30);
        $c1->setIdade(3);
        $c1->setMembros(4);
        
        $k1->setPeso(3.94);
        $k1->setIdade(5);
        $k1->setMembros(4);
    ?>
    <main>
        <h1>Animais</h1>
        <pre>
            <?php 
                echo "Ações";
                echo "<br>";
                echo "<br>";

                print_r($m1);
                $m1->locomover();
                echo "<br>";
                $m1->alimentar();
                echo "<br>";
                $m1->emitirSom();
                echo "<br>";
                echo "<br>";

                print_r($p1);
                $p1->locomover();
                echo "<br>";
                $p1->alimentar();
                echo "<br>";
                $p1->emitirSom();
                echo "<br>";
                $p1->soltarBolha();
                echo "<br>";
                echo "<br>";

                print_r($a1);
                $a1->locomover();
                echo "<br>";
                $a1->alimentar();
                echo "<br>";
                $a1->emitirSom();
                echo "<br>";
                $a1->fazerNinho();
                echo "<br>";
                echo "<br>";

                print_r($m2);
                $m2->locomover();
                echo "<br>";
                $m2->alimentar();
                echo "<br>";
                $m2->emitirSom();
                echo "<br>";
                echo "<br>";

                print_r($c1);
                $c1->locomover();
                echo "<br>";
                $c1->alimentar();
                echo "<br>";
                $c1->emitirSom();
                echo "<br>";
                $c1->usarBolsa();
                echo "<br>";
                echo "<br>";

                print_r($k1);
                $k1->locomover();
                echo "<br>";
                $k1->alimentar();
                echo "<br>";
                $k1->emitirSom();
                echo "<br>";
                $k1->abanarCauda();
                echo "<br>";
                echo "<br>";
            ?>
        </pre>
    </main>
</body>
</html>