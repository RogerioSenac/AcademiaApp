<?php
#includes
include('../includes/header.php');
include('../models/treino.php');

# instanciar classe de alunos
$treinoModel = new Treino();

#Verificar se foi passa ID do URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $treino = $treinoModel->buscarTreinoPorId($id);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $idAluno = $_POST['idAluno'];
    $idProfessor = $_POST['idProfessor'];
    
    if ($descricao && $idAluno && $idProfessor && $id) {
        $treinoModel->editarTreino($descricao, $idAluno, $idProfessor, $id);

        #retorna ao listar alunos
        header("Location: ../views/listTreino.php");
        exit;
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

#Verificar se todos os campos foram pasdsados para realizar a edição

?>

<!--Formulario para edição-->

<div class="container mt-5">
    <h2>Editar Treinos</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $treino['descricao']; ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="idAluno" class="form-label">Id Aluno</label>
            <input type="text" class="form-control" id="idAluno" name="idAluno" value="<?php echo $treino['aluno_id']; ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="idProfessor" class="form-label">Id Professor</label>
            <input type="text" class="form-control" id="idProfessor" name="idProfessor"
                value="<?php echo $treino['professor_id']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>