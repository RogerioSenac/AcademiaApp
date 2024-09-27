<?php
// include('controller.php');
include_once '../models/Aluno.php'; //Certifique-se de que o caminho está correto

//Verique se a ação foi passada pela URL
if(isset($_GET['action'])&& $_GET['action'] ==='cadastrar') {
    // echo "Chamando a função cadastrar()!<br>"; //Depuração verificação se a rota está funcionando
    $controller = new AlunoController();
    $controller->cadastrar();
}else{
    echo "Nenhuma ação foi passada!<br>"; // Depuraçao : se não houve ação
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
            //         try{
            //         }catch (exception $e) {
            //             echo "Erro ao cadastrar o aluno: ". $e->getMessage();
            //         }
            //     }else{
            //         echo "Dados inválidos!<br>";
            //     }
            // }else{
            //     echo "Metodo não é POST!<br>";
             }
        }
    }

        #Funçao de listar alunos
        public function listar(){
            $alunoModel= $this->model('Aluno');
            $alunos = $alunoModel->listarAlunos();
            $this ->view('../views/listar',['alunos'=>"$alunos"]);
        }

        #Função de registrar Treinos
        public function registrarTreinos($alunoId, $treinoId) {
            $treinoModel = $this->model('Treino');
            $treinoModel -> registrarTreino($alunoId,$treinoId);
            header('Location: ../views/aluno/treinos/'.$alunoId);
        }

    }


?>