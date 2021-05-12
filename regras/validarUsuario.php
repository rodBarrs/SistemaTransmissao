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
		$_SESSION["idUsuario"] = $result[0];
		$idusuario = $result[0];

		$query = "SELECT catalogo.idcatalogo from catalogo WHERE catalogo.usuario_idusuario = :idusuario";

		$stmt = $conexao->prepare($query);

		$stmt->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);

		$stmt->execute();
		$result = $stmt->fetch();
		$_SESSION["idCatalogo"] = $result[0];
	} else {
		session_unset();
	}

	header('Location: ../index.php');
} catch(PDOException $ex) {
	echo "Error on validate: ".$ex->getMessage();
}
?>