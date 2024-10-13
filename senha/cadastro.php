<?php
include("../bd/conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nomeCompleto'];
$usuario = $_POST['usuario'];

$cadUser = $conexao->prepare ("INSERT INTO acesso (emailUsuario, senhaUsuario, nomeUsuario, usuario) VALUES (?,?,?,?)");
$cadUser->execute([$email, $senha, $nome, $usuario]);
header("Location: DashAcesso.php");


?>