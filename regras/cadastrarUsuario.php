<?php 
require_once './conexao.php';

$nome = $_POST["name"];
$email = $_POST["email"];
$senha = $_POST["password"];

$query = "CALL cadastrarUsuario(:nome, :email, :senha)";

$stmt = $conexao->prepare($sql);

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR, 100);
$stmt->bindParam(':email', $email, PDO::PARAM_STR, 100);
$stmt->bindParam(':senha', md5($senha), PDO::PARAM_STR, 100);

$stmt->execute();

$stmt->closeCursor();
?>