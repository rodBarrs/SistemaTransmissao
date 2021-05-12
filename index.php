<?php 
session_start();
$_SESSION["emailUsuario"]
if (isset($_SESSION["emailUsuario"])) {
	header('Location: ./telas/home/home.html');
}
header('Location: ./telas/login/login.html');
?>