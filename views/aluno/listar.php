<?php 
include('../../includes/header.php');
// include('../../bd/conexao.php');

$alunos = (new Aluno())->listarAlunos(); // Certifique-se de que esta linha está aqui
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
            <?php if (empty($alunos)): ?>
                <tr>
                    <td colspan="7">Nenhum aluno encontrado.</td>
                </tr>
            <?php else: ?>
                <!-- var_dump($alunos); -->
                <?php foreach($alunos as $listAluno): ?>
                    <tr>
                        <th scope="row"><?php echo $listAluno['id']; ?></th>
                        <td><?php echo $listAluno['nome']; ?></td>
                        <td><?php echo $listAluno['email']; ?></td>
                        <td><?php echo $listAluno['telefone']; ?></td>
                        <td><?php echo $listAluno['data_nascimento']; ?></td>
                        <td><?php echo $listAluno['genero']; ?></td>
                        <td><?php echo $listAluno['data_cadastro']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>    
</div>

<?php include ('../../includes/footer.php'); ?>
