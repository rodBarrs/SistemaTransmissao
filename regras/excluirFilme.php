<?php 
require_once '../conexao.php';

$idUsuario = $_POST["user_id"];

$query = "CALL excluirUsuario(:idUsuario)";

$stmt = $conexao->prepare($sql);

$stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);

$stmt->execute();

$stmt->closeCursor();
?>