<?php 
require_once '../conexao.php';

$nome = $_POST["name"];
$email = $_POST["email"];
$senha = $_POST["password"];
$senha = md5($senha);

$query = 'CALL cadastrarUsuario(:nome, :email, :senha)';
// $query = "insert into usuario (nome, email, senha)
// values ('nome', 'email', 'senha');";

$stmt = $conexao->prepare($query);

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

$stmt->execute();

$stmt->closeCursor();

header('Location: ../telas/login.html');
?>