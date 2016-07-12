<?php 
include("../conex.php");	
$nMatri=$_POST['numeromatricula'];
$idUsu=$_POST['idusu'];
$idPeri=$_POST['periodo'];
$idUni=$_POST['unidad'];
$idCarr=$_POST['carrera'];
$nombre=$_POST['nombreTutor'];
$idNivel=$_POST['nivel'];
$idPro=$_POST['proyecto'];
$idHor=$_POST['horario'];
$idH=$_POST['horas'];
$fechamat=$_POST['fecha'];
$estado=$_POST['estado'];


$checkusuario = mysql_query ( "SELECT * FROM matricula WHERE idUsu='$idUsu'" );
$check_usuario = mysql_num_rows ( $checkusuario );

	if ($check_usuario > 0) {
		echo ' <script language="javascript">alert("Usted ya esta matriculado");</script> ';
		echo "<script>location.href='/vinculacion/inicio.php'</script>";
	}

	else {

		$cad="insert into matricula (numeroMat,idUsu, idPeri,idUnid,idCarr,nombreTutor,idNivel,idPro,idHor,idH,fechaMat,estadoMat) values('$nMatri','$idUsu','$idPeri','$idUni','$idCarr','$nombre','$idNivel','$idPro','$idHor','$idH','$fechamat','$estado')";
		
		mysql_query($cad,$conex);
		echo ' <script language="javascript">alert("Matricula Exitosa");</script> ';
		echo "<script>location.href='/vinculacion/inicio.php'</script>";
	}

//$fechaIngresoCli= date("Y-m-d", strtotime("$fechaSalDet+ $numDia days"));




   
			

 ?>