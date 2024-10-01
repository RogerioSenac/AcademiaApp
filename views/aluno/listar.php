<?php 
include('../../includes/header.php');
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
            <?php foreach($alunos as $listAluno):?>
                <tr>
                    <th scope="row"><?php echo $listAluno['id'];?></th>
                    <th scope="row"><?php echo $listAluno['nome'];?></th>
                    <th scope="row"><?php echo $listAluno['email'];?></th>
                    <th scope="row"><?php echo $listAluno['telefone'];?></th>
                    <th scope="row"><?php echo $listAluno['data_nascimento'];?></th>
                    <th scope="row"><?php echo $listAluno['genero'];?></th>
                    <th scope="row"><?php echo $listAluno['data_cadastro'];?></th>
                </tr>
                <?php endforeach ?>
        </tbody>
    </table>    
</div>

<?php include ('../../includes/footer.php')?>