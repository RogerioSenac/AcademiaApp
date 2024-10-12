<?php 
include('../includes/header.php');
include('../controllers/AlunoController.php');
// include('../bd/conexao.php');

$aluno = new Aluno();
$alunos = $aluno->listarAlunos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <linK rel="stylesheet" href="../Assets/css/estilo.css"
    <title>Academia Spartacus</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Alunos</h1>
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
                    <td scope="col">Ação</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($alunos as $aluno): ?>
                <tr>
                    <th scope="row"><?php echo $aluno['id']; ?></th>
                    <td><?php echo $aluno['nome']; ?></td>
                    <td><?php echo $aluno['email']; ?></td>
                    <td><?php echo $aluno['telefone']; ?></td>
                    <td><?php echo $aluno['data_nascimento']; ?></td>
                    <td><?php echo $aluno['genero']; ?></td>
                    <td><?php echo $aluno['data_cadastro']; ?></td>
                    <td>
                        <a href="editarAluno.php?id=<?php echo $aluno['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="deletarAluno.php?id=<?php echo $aluno['id']; ?>"
                        class="btn btn-danger" 
                        onclick="return confirm('Tem certeza que deseja deletar este registro?')">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>



<?php include ('../includes/footer.php'); ?>