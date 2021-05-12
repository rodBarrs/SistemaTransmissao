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

	$stmt->execute();
	$result = $stmt->fetch();

	$stmt->closeCursor();

	session_start();
	if ($result[0] != 0) {
		$_SESSION["emailUsuario"] = $email;
	} else {
		session_unset();
	}

	header('Location: ../index.php');
} catch(PDOException $ex) {
	echo "Error on validate: ".$ex->getMessage();
}
?>