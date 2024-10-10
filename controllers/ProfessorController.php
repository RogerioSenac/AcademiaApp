<?php
// include('controller.php');
include_once '../models/professor.php'; //Certifique-se de que o caminho está correto

if (isset($_GET['action'])) {
    $controller = new professorController();
    if ($_GET['action'] === 'cadastrar') {
        $controller->cadastrar();
    } elseif ($_GET['action'] === 'listar') {
        $controller->listar();
    } elseif ($_GET['action'] === 'editar') {
        $controller->editar();
    }
}

class professorController
{
    #Funçao de cadastro de professors
    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $especialidade = $_POST['especialidade'];
           

            if ($nome && $email && $telefone && $especialidade) {
                $professorModel = new professor();
                $professorModel->cadastrarprofessor($nome, $email, $telefone, $especialidade, );
            }
        }
    }

    #Funçao de listar professors
    public function listar()
    {
        // $professorModel= $this->models('professor');
        $professor = new professor();
        $professors = $professor->listarprofessor();
        return $professors;
    }

    #Função de Editar professors
    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD' === 'POST']) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $especialidade = $_POST['especialidade'];
           


            if ($id && $nome && $email && $telefone && $especialidade) {
                $professorModel = new professor();
                $professorModel->editarProfessor($id, $nome, $email, $telefone, $especialidade);

                header('Location:listprofessor.php');
            } else {
                echo "Dados Invalidos !<br>";
            }
        }

    }
}
?>