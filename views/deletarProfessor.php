<?php
include("../includes/header.php");
include("../models/professor.php");

if(isset($_GET['id'])){
    $excluir= new Professor();
    $excluir->deletarProfessor($_GET['id']);
   
}
?>