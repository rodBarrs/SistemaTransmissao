<?php 
require_once '../conexao.php';

$nome = $_POST["name"];
$email = $_POST["email"];
$senha = $_POST["password"];
$senha = md5($senha);

$query = "CALL cadastrarUsuario(:nome, :email, :senha)";
// $query = "insert into usuario (nome, email, senha)
// values ('nome', 'email', 'senha');";

$stmt = $conexao->prepare($query);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);

$stmt->execute();

$stmt->closeCursor();

header('Location: ../telas/login.html');
?>