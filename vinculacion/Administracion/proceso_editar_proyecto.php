<?php 
 include("../conex.php");
$idPro=$_POST['idPro'];
$nombrePro=$_POST['nombreac'];
$desPro=$_POST['descripcionac'];
$duraPro=$_POST['duracionac'];
$fechaIni=$_POST['fechaInicioac'];
$fechaFin=$_POST['fechaFinac'];



mysql_query("update proyecto set nombrePro='$nombrePro',descripcionPro='$desPro',duracionPro='$duraPro', fechainicioPro='$fechaIni', fechafinalPro='$fechaFin' where idPro='$idPro'");

	// echo ' <script language="javascript">alert("Se ha modificado correctamente :");</script> ';
echo "<script>location.href='Proyectos.php'</script>";

?>