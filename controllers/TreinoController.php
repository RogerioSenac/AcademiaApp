<?php
include('../models/Treino.php');

if (isset($_GET['action']) && $_GET['action'] == 'cadastrar') {
    $controller = new TreinoController();
    $controller->cadastrar();  
}

class TreinoController {
    public function cadastrar() {
        // Corrigido para verificar corretamente o método POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verificamos se as chaves existem antes de acessá-las
            $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
            $idAluno = isset($_POST['idAluno']) ? $_POST['idAluno'] : null;
            $idProfessor = isset($_POST['idProfessor']) ? $_POST['idProfessor'] : null;

            // Verificação para garantir que todos os dados necessários estão presentes
            if ($descricao && $idAluno && $idProfessor) {
                $treinomodel = new Treino();
                $treinomodel->cadastrarTreino($descricao, $idAluno, $idProfessor);
            } else {
                // Aqui você pode adicionar um tratamento de erro, se necessário
                echo "Dados incompletos. Verifique se todos os campos estão preenchidos.";
            }
        }
    }
}
?>
