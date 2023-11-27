<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD 2.0</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        header {
            background-color: #E8E8E8;
            color: white;
            padding: 10px;
        }

        footer {
            background-color: #D30000;
            text-align: center;
            margin: none;
            color: #FFFFFF;
            padding: 10px;        }

        header img {
            width: 300px;
            height: 80px;
            margin-right: 60px;
        }
        h1{
            text-align: center;
        }
        
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <img src="imagens/gov_cps.png" alt="Logo" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=login">Entrar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?page=novo">Cadastrar-se</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class=" border-light mb-3 d-flex align-itens-center">


                <div class="cl mt-5">
                    <?php
                    include("config.php");
                    switch (@$_REQUEST["page"]) {
                        case "novo":
                            include("novo-usuario.php");
                        break;
                        case "salvar":
                            include("salvar-usuario.php");
                            break;
                        case "login":
                            include("login-usuario.php");
                        break;
                        default:
                            print "<h1>Bem vindo ao Sistema CRUD 2.0!</h1> <br>";
                            print "<p> O portal CRUD foi criado como um projeto interdisciplinar para ensinar aos <br>
                                      alunos a utilizar uma interface web para manipular banco de dados. <br>
                                      Foram utilizados as linguagens PHP, HTML, JS, e sql no desenvolvimento do <br>
                                      projeto. <br> <br>
                                      <strong>C</strong>reate <br>
                                      <strong>R</strong>ead <br>
                                      <strong>U</strong>date <br>
                                      <strong>D</strong>elate <br>";

                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <footer><strong>&copy; Gaby Moraes</strong></footer>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>