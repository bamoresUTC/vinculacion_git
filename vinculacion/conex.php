<?php 
	$conex=mysql_connect("localhost","root","") or die ("no se pudo conectar al servidor");
	mysql_select_db("vinculacion",$conex) or die ("no se pudo conectar a la BDD");		
?>
