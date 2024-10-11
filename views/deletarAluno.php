<?php
include("../includes/header.php");
include("../models/aluno.php");

if(isset($_GET['id'])){
    $excluir= new Aluno();
    $excluir->deletarAluno($_GET['id']);
   
}

// include '../includes/footer.php'
?>