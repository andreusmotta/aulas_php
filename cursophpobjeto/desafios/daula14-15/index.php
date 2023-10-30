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
        
        require_once 'Gafanhoto.php';
        require_once 'Video.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Naira", 38, "F", "nairalima");
        $g[1] = new Gafanhoto("Vivian", 35, "F", "vivination");

        $vis[0] = new Visualizacao($g[0], $v[2]); // A Naira vai assistir o vídeo de HTML 5.
        $vis[1] = new Visualizacao($g[0], $v[1]); // A Naira agora vai assistir o vídeo de PHP.

        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);

    ?>

    <main>
        <h1>Videos do Youtube</h1>
        <pre>
            <?php 
                print_r($v);
                echo "<br>";
                echo "<br>";
                print_r($g);
                echo "<br>";
                echo "<br>";
                print_r($vis);
            ?>
        </pre>
    </main>
</body>
</html>