<?php 

include("../conex.php");
	
	$nom=$_POST['nombrepro'];
	$des=$_POST['descripcion'];
	$dura=$_POST['duracion'];
	$inicio=$_POST['inicio'];
	$fin=$_POST['fin'];
	$checknombreProyecto = mysql_query ( "SELECT * FROM proyecto WHERE nombrePro='$nom'" );
	$check_nombre = mysql_num_rows ( $checknombreProyecto );
	if ($check_nombre> 0) {
		echo ' <script language="javascript">alert("Ya existe un proyecto registrado con este nombre");</script> ';
	echo "<script>location.href='insertarproyectos.php'</script>";
	}else {
		

		$cad="insert into proyecto (nombrePro,descripcionPro,duracionPro,fechainicioPro,fechafinalPro) values('$nom','$des','$dura','$inicio','$fin')";
		echo '<script>alert("PROYECTO REGISTRADO CON EXITO")</script> ';
		echo "<script>location.href='Proyectos.php'</script>";
		mysql_query($cad,$conex);
		
	}
	
	
 ?>