<?php

#includes
include('../includes/header.php');
include('../models/aluno.php');

# instanciar classe de alunos
$alunoModel = new Aluno();

#Verificar se foi passa ID do URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aluno = $alunoModel->buscarAlunoPorId($id);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    
    if ($nome && $email && $telefone && $data_nascimento && $genero && $id) {
        $alunoModel->editarAluno($id, $nome, $email, $telefone, $data_nascimento, $genero);

        #retorna ao listar alunos
        header("Location: ../views/listAluno.php");
        exit;
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

#Verificar se todos os campos foram pasdsados para realizar a edição

?>

<!--Formulario para edição-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/estilo.css"
    <title>Academia Spartacus</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Alunos</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $aluno['nome']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $aluno['email']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone"
                    value="<?php echo $aluno['telefone']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"
                    value="<?php echo $aluno['data_nascimento']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $aluno['genero']; ?>"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
    
</body>
</html>

<?php include('../includes/footer.php'); ?>