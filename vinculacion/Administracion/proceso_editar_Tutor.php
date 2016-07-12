<?php 
 include("../conex.php");
$idUsu=$_POST['idUsu'];
$nombreU=$_POST['nombre'];
$apellidoU=$_POST['apellido'];
$direccionU=$_POST['direccion'];
$telefonoU=$_POST['telefono'];
$emailU=$_POST['email'];
$claveU=$_POST['clave'];
$claveRU=$_POST['claveR'];





mysql_query("update usuario set nombreUsu='$nombreU',apellidoUsu='$apellidoU',direccionUsu='$direccionU',
		   telefonoUsu='$telefonoU',emailUsu='$emailU',claveUsu='$claveU', repitaclaveUsu='$claveRU' 
		   where idUsu='$idUsu'");

	// echo ' <script language="javascript">alert("Se ha modificado correctamente :");</script> ';
echo "<script>location.href='Tutores.php'</script>";

?>