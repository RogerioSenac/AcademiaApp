<?php
    class AlunoController extends Controller{
        #Funçao de cadastro de Alunos
        public function cadastrar() {
            $this->view('../views/aluno/cadastro');
        }

        #Funçao de listar alunos
        public function listar(){
            $alunoModel= $this->models('Aluno');
            $alunos = $alunoModel->getAll();
            $this ->view('../views/listar',['alunos'=>"$alunos"]);
        }

        #Função de registrar Treinos
        public function registrarTreinos($alunoId, $treinoId) {
            $treinoModel = $this->models('Treino');
            $treinoModel -> registrarTreino($alunoId,$treinoId);
            header('Location: ../views/aluno/treinos/'.$alunoId);
        }

    }


?>