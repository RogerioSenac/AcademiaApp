<?php
include '../models/professor.php'; //Certifique-se de que o caminho esta correto

/*Verifique se a ação foi passada pela URL*/
if (isset($_GET['action']) && $_GET['action'] === 'cadastrar') {
    // echo "chamando a função cadastrar()!<br>";  // Depuração: Verificar se a rota está funcionando
    $controller = new ProfessorController();
    $controller->cadastrar();
}

if (isset($_GET['action']) && $_GET['action'] === 'listar') {
    //Chamando a função listar() // Depuração : Verificar se a rota está funcionando
    $controller = new ProfessorController();
    $controller->listar();


}


class ProfessorController
{
    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $especialidade = $_POST['especialidade'];

            if ($nome && $email && $telefone && $especialidade) {
                $profModel = new Professor();
                $profModel->cadastrarProfessor($nome, $email, $telefone, $especialidade);
            }
        }
    }

    #Funçao de listar professor

    public function listar()
    {
        $professor = new Professor();
        $professores = $professor->listarProfessor();
        return $professores;
    }
}
?>