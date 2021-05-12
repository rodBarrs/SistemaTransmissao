<?php 
require_once '../conexao.php';

try {	
	$email = $_POST["email"];
	$senha = $_POST["password"];
	$senha = md5($senha);

	$query = "SELECT validarUsuario(:email, :senha)";

	$stmt = $conexao->prepare($query);

	$stmt->bindParam(':email', $email, PDO::PARAM_STR);
	$stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

	$rows = $stmt->execute();

	$stmt->closeCursor();
	if ($rows[1] != 0) {
		session_start();
		$_SESSION["emailUsuario"] = $email;
	}

	header('Location: ../index.php');
} catch(PDOException $ex) {
	echo "Error on validate: ".$ex->getMessage();
}
?>