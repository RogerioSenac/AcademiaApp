<?php
include('../bd/conexao.php');
$aluno = new Aluno();
$alunos = $aluno->listarAlunos();
// include('../controlles/AlunoController.php');
// Instanciar a classe e listar alunos
// $aluno = new AlunoController;

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
?>