<?php
include('../bd/conexao.php');
$professor = new Professor();
$professores = $professor->listarProfessor();

// Instanciar a classe e listar alunos
// $professor = new ProfessorController;

class Professor
{
    private $db;
    public function __construct() 
    {
        $this->db = Conexao::novaConexao();
    }

    public function cadastrarProfessor($nome, $email, $telefone, $especialidade) 
    {
        $cadProf = $this->db->prepare("INSERT INTO professores(nome, email, telefone, especialidade)VALUES (?,?,?,?)");
        $cadProf->execute([$nome, $email, $telefone, $especialidade]);
    }

    public function listarProfessor()
    {
       try{
            $listProfessor = $this->db->query("SELECT * FROM professores");
            return $listProfessor->fetchAll(PDO::FETCH_ASSOC);
       } catch (Exception $e){
            error_log("Erro ao listar professores: ". $e->getMessage());
            return[]; //Retorne um array vazio em caso de erro
       } 
    }

    public function buscarProfessorPorId($id) 
    {
        $buscaProfessor = $this->db->prepare("SELECT * FROM professores WHERE id=?");
        $buscaProfessor->execute([$id]);
        return $buscaProfessor->fetch(PDO::FETCH_ASSOC);
    }

    public function editarProfessor($id,$nome, $email, $telefone, $especialidade,) 
    {
        $editProfessor = $this->db->prepare("UPDATE professores SET nome=?, email=?, telefone=?, especialidade=? WHERE id=?");
        $editProfessor->execute([$nome, $email, $telefone, $especialidade,$id]);
    }
}
?>