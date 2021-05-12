<?php 
require_once '../conexao.php';

$idUsuario = $_GET["id"];

$query = "CALL excluirFilme(:idUsuario)";

$stmt = $conexao->prepare($query);

$stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);

$stmt->execute();

$stmt->closeCursor();

header('Location: ../index.php');
?>