<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM productos WHERE id_prod = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['nomb_prod'], 
				1 => $valores2['tipo_prod'], 
				2 => $valores2['precio_unit'], 
				3 => $valores2['precio_dist'],
				);
echo json_encode($datos);
?>