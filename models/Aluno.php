<?php
include '../bd/conexao.php';
    class Aluno{

        private $db;
        public function __construct(){
            $this->db=Conexao::novaConexao();
        }

        public function listarAlunos() {
            $query = $this->db->query("SELECT * FROM Alunos");
            return $query ->fetchall(PDO::FETCH_ASSOC);
        }

        public function cadastrarAluno($nome, $email, $telefone, $data_nascimento, $genero){
            $cadAluno = $this->db->prepare("INSERT INTO alunos(nome, email, telefone, data_nascimento, genero)VALUES(?,?,?,?,?)");
            $cadAluno->execute([$nome, $email, $telefone, $data_nascimento, $genero]);
        }
    }

?>