<?php
// include('controller.php');
include_once '../models/Aluno.php'; //Certifique-se de que o caminho está correto

$acao = $_GET['action'];


//Verique se a ação foi passada pela URL
if(isset($_GET['action'])&& $_GET['action'] ===$acao) {
    // echo "Chamando a função cadastrar()!<br>"; //Depuração verificação se a rota está funcionando
    $controller = new AlunoController();
    if($acao=='cadastrar'){
        $controller->cadastrar();
    }elseif ($acao=='listar'){
        $controller->listar();
    }elseif ($acao=='editar') {
        $controller->editar();
    }elseif ($acao=='excluir') {
        $controller->excluir();
    }else{
    echo "Nenhuma ação foi passada!<br>"; // Depuraçao : se não houve ação
    }
}

    class AlunoController {
        #Funçao de cadastro de Alunos
        public function cadastrar() {
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $data_nascimento = $_POST['data_nascimento'];
                $genero = $_POST['genero'];

                if($nome && $email && $telefone && $data_nascimento && $genero){
                    $alunoModel = new Aluno();
                    $alunoModel->cadastrarAluno($nome, $email, $telefone, $data_nascimento, $genero);
             }
        }
    }

        #Funçao de listar alunos
        public function listar(){
            // $alunoModel= $this->models('Aluno');
            $alunoModel= new Aluno();
            $alunos = $alunoModel->listarAlunos();
            print_r(($alunos));
            return $alunos;           
        }

        #Função de registrar Treinos
        public function registrarTreinos($alunoId, $treinoId) {
            $treinoModel = $this->model('Treino');
            $treinoModel -> registrarTreino($alunoId,$treinoId);
            header('Location: ../views/aluno/treinos/'.$alunoId);
        }

    }
?>