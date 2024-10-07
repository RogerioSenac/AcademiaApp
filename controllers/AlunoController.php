<?php
// include('controller.php');
include_once '../models/Aluno.php'; //Certifique-se de que o caminho está correto

if (isset($_GET['action'])) {
    $controller = new AlunoController();
    if ($_GET['action'] === 'cadastrar') {
        $controller->cadastrar();
    } elseif ($_GET['action'] === 'listar') {
        $controller->listar();
    } elseif ($_GET['action'] === 'editar') {
        $controller->editar();
    }
}

class AlunoController
{
    #Funçao de cadastro de Alunos
    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $data_nascimento = $_POST['data_nascimento'];
            $genero = $_POST['genero'];

            if ($nome && $email && $telefone && $data_nascimento && $genero) {
                $alunoModel = new Aluno();
                $alunoModel->cadastrarAluno($nome, $email, $telefone, $data_nascimento, $genero);
            }
        }
    }

    #Funçao de listar alunos
    public function listar()
    {
        // $alunoModel= $this->models('Aluno');
        $aluno = new Aluno();
        $alunos = $aluno->listarAlunos();
        return $alunos;
    }

    #Função de Editar alunos
    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD' === 'POST']) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $data_nascimento = $_POST['data_nascimento'];
            $genero = $_POST['genero'];


            if ($id && $nome && $email && $telefone && $data_nascimento && $genero) {
                $alunoModel = new Aluno();
                $alunoModel->editarAluno($id, $nome, $email, $telefone, $data_nascimento, $genero);

                header('Location:listAluno.php');
            } else {
                echo "Dados Invalidos !<br>";
            }
        }

    }
}
?>