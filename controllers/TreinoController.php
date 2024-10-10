<?php
include('../models/Treino.php');

if (isset($_GET['action'])) {
    $controller = new TreinoController();
    if ($_GET['action'] === 'cadastrar') {
        $controller->cadastrar();
    } elseif ($_GET['action'] === 'listar') {
        $controller->listar();
    } elseif ($_GET['action'] === 'editar') {
        $controller->editar($id);
    }
}

class TreinoController
 {
    #Funçao de cadastro de Treinos
    public function cadastrar()
     {
        // Corrigido para verificar corretamente o método POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verificamos se as chaves existem antes de acessá-las
           $descricao = $_POST['descricao'];
           $idAluno = $_POST['idAluno'];
           $idProfessor = $_POST['idProfessor'];
           
           if ($descricao && $idAluno && $idProfessor) {
               $alunoModel = new Treino();
               $alunoModel->cadastrarTreino($descricao, $idAluno, $idProfessor);
           }
       }
    }

    #Função de listar Treinos
    public function listar() {
        $treino = new Treino;
        $treinos = $treino->listarTreinos();
        return $treinos;
    }

    #Função de Editar Treino
    public function editar($id)
    {
        if ($_SERVER['REQUEST_METHOD' === 'POST']) {
            $id = $_POST['id'];
            $descricao = $_POST['descricao'];
            $idAluno = $_POST['idAluno'];
            $idProfessor = $_POST['idProfessor'];
            


            if ($id && $descricao && $idAluno && $idProfessor) {
                $alunoModel = new Treino();
                $alunoModel->editarTreino($id, $descricao, $idAluno, $idProfessor);

                header('Location:listTreino.php');
            } else {
                echo "Dados Invalidos !<br>";
            }
        }

    }
}
?>
