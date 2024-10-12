<?php
include('../includes/header.php');
include('../controllers/TreinoController.php');

$treino = new Treino();
$treinos = $treino->listarTreinos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/estilo.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="container mt-5">
    <h1>Lista de Treinos</h1>
    <table class="table">
        <thead>
            <tr>
                <td scope="col">ID</td>
                <td scope="col">Descrição</td>
                <td scope="col">Aluno</td>
                <td scope="col">Professor</td>
                <td scope="col">Selecione a Ação</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($treinos as $treino): ?>
            <tr>
                <th scope="row"><?php echo $treino['id']; ?></th>
                <td><?php echo $treino['descricao']; ?></td>
                <td><?php echo $treino['aluno_id']; ?></td>
                <td><?php echo $treino['professor_id']; ?></td>
                <td>
                    <a href="editarTreino.php?id=<?php echo $treino['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="deletarTreino.php?id=<?php echo $treino['id']; ?>"
                    class="btn btn-danger" 
                    onclick="return confirm('Tem certeza que deseja deletar este registro?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>