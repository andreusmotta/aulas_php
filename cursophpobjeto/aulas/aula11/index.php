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
        require_once 'Pessoa.php';
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
    
        //Precisa descomentar essas linhas para o código funcionar:
        // $v1 = new Visitante();
        // $a1 = new Aluno();
        // $b1 = new Bolsista();
        // $p1 = new Professor();
        // $t1 = new Tecnico();

        $v1->setNome("Juvenal");
        $v1->setIdade(33);
        $v1->setSexo("M");

        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();

        $b1->setMatricula(1112);
        $b1->setNome("Jubileu");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->setSexo("F");
        // $b1->pagarMensalidade();

        $p1->setNome("Gerônimo");
        $p1->setSexo("M");
        $p1->setIdade(65);
        $p1->setEspecialidade("Contabilidade");
        $p1->setSalario(7000.00);

        $t1->setNome("Valdir");
        $t1->setIdade(22);
        $t1->setSexo("M");
        $t1->setRegistroProfissional(1212);
        $t1->setCurso("banco de dados");

    ?>
    <main>
        <h1>Escola</h1>
        <pre>
            <?php 
                print_r($v1);
                echo "<br>";

                print_r($a1);
                $a1->pagarMensalidade();
                echo "<br>";
                echo "<br>";

                print_r($b1);
                $b1->pagarMensalidade();
                echo "<br>";
                echo "<br>";

                print_r($p1);
                $p1->receberSalario();
                echo "<br>";
                echo "<br>";

                print_r($t1);
                $t1->praticar();
                echo "<br>";
                echo "<br>";
            ?>
        </pre>
    </main>
</body>
</html>