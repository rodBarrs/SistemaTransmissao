<?php 
session_start();
session_unset();
header('Location: ./telas/login/login.html');
die();
?>