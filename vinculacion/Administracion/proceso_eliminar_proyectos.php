<?php 
 include("../conex.php");
	$idPro=$_GET['idPro'];
	$cad="delete from proyecto where idPro=".$idPro;
	mysql_query($cad,$conex);
	header("Location: Proyectos.php");

 ?>