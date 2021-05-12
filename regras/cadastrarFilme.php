<?php 
require_once '../conexao.php';
session_start();

$nome = $_POST['name'];
$descricao = $_POST['description'];
$imagem = $_POST['image'];
$url_filme = $_POST['url'];
$catalogo_idcatalogo = $_SESSION["idCatalogo"];

$query = "CALL cadastrarFilme(:nome, :descricao, :imagem, :url_filme, :catalogo_idcatalogo)";

$stmt = $conexao->prepare($query);

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->bindParam(':imagem', $imagem, PDO::PARAM_STR);
$stmt->bindParam(':url_filme', $url_filme, PDO::PARAM_STR);
$stmt->bindParam(':catalogo_idcatalogo', $catalogo_idcatalogo, PDO::PARAM_INT);

$stmt->execute();

$stmt->closeCursor();

header('Location: ../index.php');
?>