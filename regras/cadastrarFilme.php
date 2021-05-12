<?php 
require_once '../conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];
$url_filme = $_POST['url_filme'];
$catalogo_idcatalogo = $_POST['catalogo_idcatalogo'];

$query = "CALL cadastrarFilme(:nome, :descricao, :imagem, :url_filme, :catalogo_idcatalogo)";

$stmt = $conexao->prepare($sql);

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->bindParam(':imagem', $imagem, PDO::PARAM_STR);
$stmt->bindParam(':url_filme', $url_filme, PDO::PARAM_STR);
$stmt->bindParam(':catalogo_idcatalogo', $catalogo_idcatalogo, PDO::PARAM_INT);

$stmt->execute();

$stmt->closeCursor();
?>