<?php 
require_once './conexao.php';

public function cadastrarUsuario($nome, $senha)
{
	$query = "CALL cadastrarUsuario(:nome, :senha)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR, 100);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR, 100);
}

?>