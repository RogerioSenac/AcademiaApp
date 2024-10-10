<?php

#includes
include('../includes/header.php');
include('../models/professor.php');

# instanciar classe de professors
$professorModel = new professor();

#Verificar se foi passa ID do URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $professor = $professorModel->buscarprofessorPorId($id);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $especialidade = $_POST['especialidade'];
    
    if ($nome && $email && $telefone && $especialidade && $id) {
        $professorModel->editarprofessor($id, $nome, $email, $telefone, $especialidade);

        #retorna ao listar professors
        header("Location: ../views/listprofessor.php");
        exit;
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

#Verificar se todos os campos foram pasdsados para realizar a edição

?>

<!--Formulario para edição-->

<div class="container mt-5">
    <h2>Editar professors</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $professor['nome']; ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $professor['email']; ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone"
                value="<?php echo $professor['telefone']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="especialidade" class="form-label">Especialidade</label>
            <input type="text" class="form-control" id="especialidade" name="especialidade"
                value="<?php echo $professor['especialidade']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>