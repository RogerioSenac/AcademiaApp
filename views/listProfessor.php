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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7">Nenhum professor encontrado.</td>
            </tr>
            <?php foreach($professores as $listProfessor): ?>
            <tr>
                <th scope="row"><?php echo $listProfessor['id']; ?></th>
                <td><?php echo $listProfessor['nome']; ?></td>
                <td><?php echo $listProfessor['email']; ?></td>
                <td><?php echo $listProfessor['telefone']; ?></td>
                <td><?php echo $listProfessor['especialidade']; ?></td>
                <td><?php echo $listProfessor['data_contratação']; ?></td>
                <td>
                    <a href="editarProfessor.php?id=<?php echo $listProfessor['id']; ?>" class="btn btn-warning">Editar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include ('../includes/footer.php'); ?>