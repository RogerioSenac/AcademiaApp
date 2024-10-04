<?php
include('../includes/header.php');
include('../controllers/TreinoController.php');

$treino = new Treino();
$treinos = $treino->listarTreinos();
?>

<div class="container mt-5">
    <h2>Lista de Treinos</h2>
    <table class="table">
        <thead>
            <tr>
                <td scope="col">ID</td>
                <td scope="col">Descrição</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($treinos as $listTreino): ?>
            <tr>
                <th scope="row"><?php echo $listTreino['id']; ?></th>
                <td><?php echo $listTreino['descricao']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>