<?php 
session_start();
if (isset($_SESSION["emailUsuario"])) {
	$id_cat = $_SESSION["idCatalogo"];
	header('Location: ./telas/home/home.php?id_catalogo='.$id_cat);
	die();
}
header('Location: ./telas/login/login.html');
?>