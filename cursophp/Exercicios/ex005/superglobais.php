<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "QUINTA", time() + 3600);
                
                session_start();
                $_SESSION["teste"] = "FUNCIONOU!!1!";

                echo "<h1>Superglobais GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobais POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobais REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobais COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobais SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobais ENVIROMENT</h1>";
                var_dump($_ENV);

                echo "<h1>Superglobais SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobais GLOBALS(num tem underline mesmo)</h1>";
                var_dump($GLOBALS);

            ?>
        </pre>
    </main>
</body>
</html>