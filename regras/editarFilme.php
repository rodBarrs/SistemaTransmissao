<?php 
require_once './conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];
$url_filme = $_POST['url_filme'];
$idfilme = $_POST['idfilme'];

$query = "CALL cadastrarFilme(:nome, :descricao, :imagem, :url_filme, :idfilme)";

$stmt = $conexao->prepare($sql);

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->bindParam(':imagem', $imagem, PDO::PARAM_STR);
$stmt->bindParam(':url_filme', $url_filme, PDO::PARAM_STR);
$stmt->bindParam(':idfilme', $idfilme, PDO::PARAM_INT);

$stmt->execute();

$stmt->closeCursor();
?>