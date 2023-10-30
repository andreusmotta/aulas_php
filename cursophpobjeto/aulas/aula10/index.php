<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        //Se for testar esse código, descomente a parte comentada abaixo.
        // $p1 = new Pessoa();
        // $p2 = new Aluno();
        // $p3 = new Professor();
        // $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Fabiana");

        $p1->setSexo("M");
        $p4->setSexo("F");

        $p2->setCurso("Informática");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");

        $p3->receberAum(550.50);
        $p4->mudarTrabalho();
        $p2->cancelarMatr();
        
    ?>
    <main>
        <h1>Pessoas</h1>
        <pre>
            <?php 
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

            ?>
        </pre>
    </main>
</body>
</html>