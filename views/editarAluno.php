<?php

#includes
include('../includes/header.php');
include('../models/aluno.php');

# instanciar classe de alunos
$alunoModel = new Aluno();

#Verificar se foi passa ID do URL
if(isset ($_GET['id'])){
    $id=$_GET['id'];
    $aluno=$alunoModel->buscarAluno($id);
    #Verifica se o id foi passado
    $if($aluno){
        echo "Aluno não encontrado";
    }else {
        echo "ID do aluno não informado";
    }
}

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $data_nascimento=$_POST['data_nascimento'];
    $genero=$_POST['genero'];
}

#Verificar se todos os campos foram pasdsados para realizar a edição
if($nome && $email && $telefone && $data_nascimnto && $genero){
    $alunoModel->editarAluno($id, $nome, $email, $telefone, $data_Nascimento, $genero);

    #retorna ao listar alunos
    header("Location:listAluno.php");
    exit;
}else{
    echo "Por favor, preencha todos os campos.";
}
?>

<!--Formulario para edição-->

<div class="Container mt-5">
    <h2>Editar Alunos</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $aluno['nome']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $aluno['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $aluno['telefone']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $aluno['data_nascimento']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Genero</label>
            <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $aluno['genero']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>

<?php include('../include/footer.php'); ?>