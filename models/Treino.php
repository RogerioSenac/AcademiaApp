<?php
include ('../bd/conexao.php');
$treino = new Treino();
$treinos = $treino->listarTreinos();

class Treino{
    private $db;

    public function __construct(){
        $this->db=Conexao::novaConexao();
    }

    public function cadastrarTreino($descricao, $idAluno, $idProfessor) {
        $cadTreino = $this->db->prepare("INSERT INTO treinos (descricao, aluno_id, professor_id) VALUES (?,?,?)");
        $cadTreino->execute([$descricao, $idAluno, $idProfessor]);
    }

    public function listarTreinos() {
        try{
            $listAluno = $this->db->query("SELECT * FROM treinos");
            return $listTreino->fetchAll(PDO::FETCH_ASSOC);
        }catch (Exception $e) {
            error_log("Erro ao listar Treinos: ".$e->getMessage());
            return[]; //Retorne um array vazio em caso de erro
        }
    }
}
?>