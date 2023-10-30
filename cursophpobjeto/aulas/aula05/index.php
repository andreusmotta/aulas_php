<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();            
            $p2 = new ContaBanco();

            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setNumConta(1111);

            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setNumConta(2222);
            
            $p1->depositar(300);
            $p2->depositar(500);

            // $p1->pagarMensal();
            // $p2->pagarMensal();

            $p1->sacar(350);
            $p2->sacar(650);

            $p1->fecharConta();
            echo "<br></br>";
            $p2->fecharConta();
            echo "<br></br>";

            print_r($p1);            
            print_r($p2);
            
        ?>
    </pre>
</body>
</html>