<?php

define('HOST', 'localhost');
define('USER', 'user');
define('PASSWORD', '899umCinco');
define('DBNAME', 'transmissao');
define('PORT', 3306);


try {
	$conexao = new PDO('mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASSWORD);
} catch (PDOException $ex) {
	echo "Erro na conexão com banco: " . $ex->getMessage();
}

?>