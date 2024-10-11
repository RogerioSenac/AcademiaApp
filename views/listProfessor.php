<?php
include('../includes/header.php');
include('../controllers/ProfessorController.php');
// include('../bd/conexao.php');

$professor = new Professor();
$professores = $professor->listarProfessor();
?>

<div class="container mt-5">
    <h2>Lista de Professores - nosso</h2>
    <table class="table">
        <thead>
            <tr>
                <td scope="col">ID</td>
                <td scope="col">Nome</td>
                <td scope="col">Email</td>
                <td scope="col">Telefone</td>
                <td scope="col">Especialildade</td>
                <td scope="col">Data Contratação</td>
                <td scope="col">Selecione a Ação</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($professores as $professor): ?>
                <tr>
                    <th scope="row"><?php echo $professor['id']; ?></th>
                    <td><?php echo $professor['nome']; ?></td>
                    <td><?php echo $professor['email']; ?></td>
                    <td><?php echo $professor['telefone']; ?></td>
                    <td><?php echo $professor['especialidade']; ?></td>
                    <td><?php echo $professor['data_contratação']; ?></td>
                    <td>
                        <a href="editarProfessor.php?id=<?php echo $professor['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="deletarProfessor.php?id=<?php echo $professor['id']; ?>"class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja deletar este registro?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include('../includes/footer.php'); ?>