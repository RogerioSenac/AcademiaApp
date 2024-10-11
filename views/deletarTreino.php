<?php
include("../includes/header.php");
include("../models/treino.php");

if(isset($_GET['id'])){
    $excluir= new Treino();
    $excluir->deletartreino($_GET['id']);
   
}
?>