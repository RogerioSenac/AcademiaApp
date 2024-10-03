<?php
include('../bd/conexao.php');
// $professor = new Professor();
// $professores = $professor->listarProfessor();


class Professor{
    private $db;
    public function __construct(){
        $this->db=Conexao::novaConexao();
    }

    public function cadastrarProfessor($nome, $email, $telefone, $especialidade) {
        $cadProf = $this->db->prepare("INSERT INTO professores(nome, email, telefone, especialidade)VALUES (?,?,?,?)");
        $cadProf->execute([$nome, $email, $telefone, $especialidade]);
    }

    public function listarProfessor(){
       try{
        $listProfessor = $this->db->query("SELECT * FROM professores");
        return $listProfessor->fetchAll(PDO::FETCH_ASSOC);
       } catch (Exception $e){
        error_log("Erro ao listar professores: ". $e->getMessage());
        return[]; //Retorne um array vazio em caso de erro
       } 
    }
}
?>