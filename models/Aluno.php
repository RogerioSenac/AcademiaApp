<?php
include('../bd/conexao.php');

class Aluno {
    private $db;

    public function __construct() {
        $this->db = Conexao::novaConexao();
    }

    public function cadastrarAluno($nome, $email, $telefone, $data_nascimento, $genero) {
        $cadAluno = $this->db->prepare("INSERT INTO alunos(nome, email, telefone, data_nascimento, genero) VALUES (?, ?, ?, ?, ?)");
        $cadAluno->execute([$nome, $email, $telefone, $data_nascimento, $genero]);
    }
    

    public function listarAlunos() {
        try {
            $listAluno = $this->db->query("SELECT * FROM alunos");
            return $listAluno->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Erro ao listar alunos: " . $e->getMessage());
            return []; // Retorne um array vazio em caso de erro
        }
    }
}

// Instanciar a classe e listar alunos
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
                <td scope="col">Gênero</td>
                <td scope="col">Data Cadastro</td>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($alunos)): ?>
                <tr>
                    <td colspan="7">Nenhum aluno encontrado.</td>
                </tr>
            <?php else: ?>
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
