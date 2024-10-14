<?php
include('../bd/conexao.php');

class {

}

private $db;
public function __construct()
{
    $this->db = Conexao::novaConexao();
}

$nome = $_POST['nomeCompleto'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$cadUser = $this->db->prepare ("INSERT INTO acesso (nomeUsuario, emailUsuario, usuario, senhaUsuario) VALUES (?,?,?,?)");
$cadUser->execute([$nome, $email, $usuario, $senha]);

header("Location: DashAcesso.php");
?>