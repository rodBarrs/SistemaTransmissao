<?php 
require_once './conexao.php';

try {	
	$email = $_POST["email"];
	$senha = $_POST["password"];

	$query = "SELECT cadastrarUsuario(:email, :senha)";

	$stmt = $conexao->prepare($sql);

	$stmt->bindParam(':email', $email, PDO::PARAM_STR);
	$stmt->bindParam(':senha', md5($senha), PDO::PARAM_STR);

	$stmt->execute();

	$stmt->closeCursor();

	header('Location: ./telas/home.html');
} catch(PDOException $ex) {
	echo "Error on validate: ".$ex->getMessage();
}
?>