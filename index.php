<?php 
session_start();
if (isset($_SESSION["emailUsuario"])) {
	header('Location: ./telas/home/home.html');
	die();
}
header('Location: ./telas/login/login.html');
?>