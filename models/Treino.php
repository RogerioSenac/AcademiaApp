<?php
include ('../bd/conexao.php');
$treino = new Treino;
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
            $listTreino = $this->db->query("SELECT * FROM treinos");
            return $listTreino->fetchAll(PDO::FETCH_ASSOC);
        }catch (Exception $e) {
            error_log("Erro ao listar Treinos: ".$e->getMessage());
            return[]; //Retorne um array vazio em caso de erro
        }
    }
    
    public function buscarTreinoPorId($id)
    {
        $buscaTreino = $this->db->prepare("SELECT * FROM treinos WHERE id=?");
        $buscaTreino->execute([$id]);
        return $buscaTreino->fetch(PDO::FETCH_ASSOC);
    }

    public function editarTreino($descricao, $idAluno, $idProfessor, $id)
    {
        $editTreino = $this->db->prepare("UPDATE treinos SET descricao=?, aluno_id=?, professor_id=? WHERE id=?");
        $editTreino->execute([$descricao, $idAluno, $idProfessor, $id]);
    }

    public function deletarTreino($id)
    {
        $deletetreino = $this->db->prepare("DELETE FROM treinos WHERE id=?");
        $deletetreino->execute([$id]);
    
        header('Location: listTreino.php');
    }
}
?>