<?php 
require_once '../conexao.php';

$nome = $_POST['name'];
$descricao = $_POST['description'];
$imagem = $_POST['image'];
$url_filme = $_POST['url'];
$idfilme = $_GET['id'];


$query = "CALL editarFilme(:nome, :descricao, :imagem, :url_filme, :idfilme)";

$stmt = $conexao->prepare($query);

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->bindParam(':imagem', $imagem, PDO::PARAM_STR);
$stmt->bindParam(':url_filme', $url_filme, PDO::PARAM_STR);
$stmt->bindParam(':idfilme', $idfilme, PDO::PARAM_INT);

$stmt->execute();

$stmt->closeCursor();

header('Location: ../index.php');
?>