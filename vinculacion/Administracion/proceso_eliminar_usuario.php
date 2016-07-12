<?php 
 include("../conex.php");
	$idUsu=$_GET['idUsu'];
	$cad="delete from usuario where idUsu=".$idUsu;
	mysql_query($cad,$conex);
	header("Location: Estudiantes.php");

 ?>