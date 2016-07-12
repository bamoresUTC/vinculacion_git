<?php
session_start();
$_SESSION['cedulaUsuario'];
if (!isset($_SESSION['cedulaUsuario']))
header("location:/vinculacion/Administracion/login.php");
?>