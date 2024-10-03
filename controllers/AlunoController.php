<?php
// include('controller.php');
include_once '../models/Aluno.php'; //Certifique-se de que o caminho está correto

//Verifique se a ação foi passada na URL
if(isset($_GET['action']) && $_GET['action'] === 'cadastrar'){
    // echo "chamando a função cadastrar()!<br>";  // Depuração: Verificar se a rota está funcionando
    $controller = new AlunoController();
    $controller->cadastrar();
}

if(isset($_GET['action']) && $_GET['action'] === 'listar'){
    // echo "chamando a função listar()!<br>";  // Depuração: Verificar se a rota está funcionando
    $controller = new AlunoController();
    $controller->listar();
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

    #Função de registrar Treinos
    public function registrarTreinos($alunoId, $treinoId)
    {
        $treinoModel = $this->model('Treino');
        $treinoModel->registrarTreino($alunoId, $treinoId);
        header('Location: ../views/aluno/treinos/' . $alunoId);
    }
}
?>