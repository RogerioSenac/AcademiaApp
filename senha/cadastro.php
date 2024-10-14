<?php
include('../bd/conexao.php');

$nome = $_POST['nomeCompleto'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$cadUser = $instance->prepare ("INSERT INTO acesso (nomeUsuario, emailUsuario, usuario, senhaUsuario) VALUES (?,?,?,?)");
$cadUser->execute([$nome, $email, $usuario, $senha]);

header("Location: DashAcesso.php");
?>