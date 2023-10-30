<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>CRUD em PHP</title>
</head>
<body>    
    <!-- Início do Script do js do bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Fim do Script do js do bootstrap -->
    
    <!-- Início da Barra de navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicial</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo Usuário</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar Usuários</a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>
        </div>
    </div>
    </nav>
    <!-- Fim da Barra de navegação -->

    <!-- Novo container do bootstrap -->
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php 
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("novo-usuario.php");
                        break;
                        case "listar":
                            include("listar-usuario.php");
                        break;
                        case "salvar":
                            include("salvar-usuario.php");
                        break;
                        case "editar":
                            include("editar-usuario.php");
                        break;
                        default:
                        echo "<h1>Bem vindos!!!</h1>";
                        
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>