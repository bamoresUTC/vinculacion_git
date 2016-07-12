<?php
 include("../conex.php");
$ced=$_POST['cedula'];
$cla=$_POST['clave'];
$rs=mysql_query("select * from usuario ,rol  where   cedulaUsu='$ced'and claveUsu='$cla' and rol.idRol=usuario.idRol",$conex);
$idu="";
$tip="";

while($fila=mysql_fetch_array($rs)){
	$idu=$fila['idUsu'];
	$nom=$fila['nombreUsu'];
	$ape=$fila['apellidoUsu'];
	$tip=$fila['idRol'];
	$nomTipoUsu=$fila['nombreRol'];
	$ced=$fila['cedulaUsu'];
			session_start();
	$_SESSION['idUsuario']=$idu;	
	$_SESSION['usuario']=$nom . " " . $ape;
	$_SESSION['tipoUsuario']=$tip;
	$_SESSION['privilegioUsuario']=$nomTipoUsu;
	$_SESSION['cedulaUsuario']=$ced;
	
}

if ($idu=="") {
echo '<script>alert("Datos ingresados incorrectos")</script> ';
echo "<script>location.href='login.php'</script>";
}


 ?>

 

 
<!-- Pasar una variable javascrip a php comprobado  -->
<script>
var usu  = '<?php echo  $nom   ." " . $ape?>';
</script>
<!--  parar una variable php a javascrip -->
<?php
// $variablephp = "<script> document.write(usu) </script>";
// echo "variablephp = $variablephp";
?>
<?php 
// echo''.$variablephp;
?>

<!--  si es 1 es gerente si es 2 es administrador y si es 3 es Vendedor  -->
 <?php
if ($tip=="1") {
echo '<script>alert("Bienvenido Estudiante : "+usu)</script> ';
echo "<script>location.href='../inicio.php'</script>";
} elseif ($tip=="2") {
	echo '<script>alert("Bienvenido Tutor :"+usu)</script> ';
echo "<script>location.href='../inicio.php'</script>";
} elseif ($tip =="3") {
	echo '<script>alert("Bienvenido Coordinador : "+usu)</script>';
	echo "<script>location.href='../inicio.php'</script>";
}
elseif ($tip =="4") {
	echo '<script>alert("Bienvenido Administrador : "+usu)</script>';
	echo "<script>location.href='../inicio.php'</script>";
}
?>



