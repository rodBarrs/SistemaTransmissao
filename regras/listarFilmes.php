<?php 
require_once '../conexao.php';

try {	
	$id_catalogo = $_GET["id_catalogo"];

	$query = "SELECT * FROM filme WHERE filme.catalogo_idcatalogo = :id_catalogo";

	$stmt = $conexao->prepare($query);

	$stmt->bindParam(':id_catalogo', $id_catalogo, PDO::PARAM_INT);

	$stmt->execute();
	$filmes = $stmt->fetchAll();

} catch(PDOException $ex) {
	echo "Error on validate: ".$ex->getMessage();
}
?>