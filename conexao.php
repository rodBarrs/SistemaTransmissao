<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'tuasenha');
define('DBNAME', 'transmissao');


try {
	$conexao = new PDO('mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASSWORD);
} catch (PDOException $ex) {
	echo "Erro na conexão com banco: " . $ex->getMessage();
}

?>