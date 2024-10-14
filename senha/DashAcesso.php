<?php
include("../bd/conexao.php");
// include('../includes/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senhaUsuario'];

    try {
        // Preparar e executar a consulta SQL para verificar as credenciais
        $consulta = $conexao->prepare('SELECT * FROM acesso WHERE usuario = :usuario AND senhaUsuario = :senha');
        $consulta->execute([
            ':usuario' => $usuario,
            ':senha' => $senha
        ]);

        // Verificar se algum usuário foi encontrado
        if ($consulta->rowCount() > 0) {
            // Credenciais válidas, redirecionar para index.php
            header("Location: ../menu.php");
            exit(); // Importante para garantir que o script seja encerrado após o redirecionamento
        } else {

            // Credenciais inválidas, redirecionar de volta com mensagem de erro
            header("Location: login.php?error=invalid_credentials");
            exit();
        }
    } catch (PDOException $e) {
        // Em caso de erro, exibir mensagem
        echo "Erro: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/CSS/estilos.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img class="img" src="../Assets/imagem/icone_logo_acqua.png" alt="logo">
            <a class="navbar-brand" href="#">Academia Acqua Vida</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../quem_somos.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-login mt-5">
        <div class="login-text-center mb-5">
            <h1>Bem-vindo a Academia Acqua Vida</h1>
            <p class="lead"><span class="alerta">A Vida </span>é feita de escolhas e nós....</p>
            <p class="lead">...bem, nós escolhemos <span class="alerta">MALHAR!</span></p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Verifica se há uma mensagem de erro -->
                <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials'): ?>
                    <div class="alert alert-danger text-center" role="alert">
                        Usuário ou senha incorretos. Por favor, tente novamente.
                    </div>
                <?php endif; ?>

                <!-- Login Form -->
                <div id="loginForm">
                    <h2 class="text-center">Login</h2>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuário:</label>
                            <input type="text" id="usuario" name="usuario" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="senhaUsuario" class="form-label">Senha:</label>
                            <input type="password" id="senhaUsuario" name="senhaUsuario" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Logar</button>
                        </div>
                    </form>
                    <!-- <div class="text-center mt-3">
                        <a href="#" onclick="toggleForms()">Não tem uma conta? Cadastre-se</a>
                    </div>
                </div> -->

                <!-- Registration Form -->
                <div id="registrationForm" style="display:none;">
                    <h2 class="text-center">Cadastro</h2>
                    <form action="cadastro.php" method="post">
                        <div class="mb-3">
                            <label for="nomeCompleto" class="form-label">Nome Completo:</label>
                            <input type="text" id="nomeCompleto" name="nomeCompleto" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuário:</label>
                            <input type="text" id="usuario" name="usuario" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" id="senha" name="senha" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#" onclick="toggleForms()">Já tem uma conta? Logar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleForms() {
            var loginForm = document.getElementById("loginForm");
            var registrationForm = document.getElementById("registrationForm");

            if (loginForm.style.display === "none") {
                loginForm.style.display = "block";
                registrationForm.style.display = "none";
            } else {
                loginForm.style.display = "none";
                registrationForm.style.display = "block";
            }
        }
    </script>
</body>

</html>