<?php 
include('../includes/header.php');
include('../controllers/AlunoController.php');
// include('../bd/conexao.php');

$aluno = new Aluno();
$alunos = $aluno->listarAlunos();
?>

<div class="container mt-5">
    <h2>Lista de Alunos</h2>
    <table class="table">
        <thead>
            <tr>
                <td scope="col">ID</td>
                <td scope="col">Nome</td>
                <td scope="col">Email</td>
                <td scope="col">Telefone</td>
                <td scope="col">Data de Nascimento</td>
                <td scope="col">Genero</td>
                <td scope="col">Data Cadastro</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($alunos as $listAluno): ?>
            <tr>
                <th scope="row"><?php echo $listAluno['id']; ?></th>
                <td><?php echo $listAluno['nome']; ?></td>
                <td><?php echo $listAluno['email']; ?></td>
                <td><?php echo $listAluno['telefone']; ?></td>
                <td><?php echo $listAluno['data_nascimento']; ?></td>
                <td><?php echo $listAluno['genero']; ?></td>
                <td><?php echo $listAluno['data_cadastro']; ?></td>
                <td>
                    <a href="editarAluno.php?id=<?php echo $listAluno['id']; ?>" class="btn btn-warning">Editar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include ('../includes/footer.php'); ?>