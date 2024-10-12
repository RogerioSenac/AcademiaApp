<?php
include('./bd/conexao.php');
include('./includes/header.php');

session_start(); // Inicia a sessão para usar variáveis de sessão

// Verifica se o usuário está logado
// if (!isset($_SESSION['usuario'])) {
//     header('Location: senha/DashAcesso.php'); // Redireciona para a página de login se não estiver logado
//     exit();
// }

$usuario = $_SESSION['usuario']; // Atribui o valor do usuário logado à variável $usuario
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Academia Fonte Vida</title>
</head>

<body>
    <div class="navbar_menu">

    </div>
    <div class="container my-4">
        <div class="row mb-3">
            <div class="mensagem col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1><span>Bem-vindo, <?php echo htmlspecialchars($usuario); ?>!</span></h1> <!-- Exibe o nome do usuário -->
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-1">
                <div class="card card-um">
                    <img class="card-img-top" src="Assets/imagem/atleta_fem_vintage.jpeg">
                    <div class="card-body">
                        <h1 class="card-text">Controle de Alunos.</h1>
                        <a href="./views/cadAluno.php" class="btn btn-primary">Cadastrar</a>
                        <a href="./views/listAluno.php" class="btn btn-secondary">Consultar</a>

                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-1">
                <div class="card card-um">
                    <img class="card-img-top" src="Assets/imagem/spartacus.jpeg">
                    <div class="card-body">
                        <h1 class="card-text">Controle de Instrutores.</h1>
                        <a href="./views/cadProfessor.php" class="btn btn-primary">Cadastrar</a>
                        <a href="./views/listProfessor.php" class="btn btn-secondary">Consultar</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-1">
                <div class="card card-um">
                    <img class="card-img-top" src="Assets/imagem/atleta_coresfortes.jpg">
                    <div class="card-body">
                        <h1 class="card-text">Controle dos Treinos.</h1>
                        <a href="./views/cadTreino.php" class="btn btn-primary">Cadastrar</a>
                        <a href="./views/listTreino.php" class="btn btn-secondary">Consultar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-..." crossorigin="anonymous"></script>
</body>

</html>