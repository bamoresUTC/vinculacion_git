<?php
include('conexion.php');
$id = $_POST['id-prod'];
$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$precio_uni = $_POST['precio-uni'];
$precio_dis = $_POST['precio-dis'];
$fecha = date('Y-m-d');
//VERIFICAMOS EL PROCESO

switch($proceso){
	case 'Registro':
		mysql_query("INSERT INTO productos (nomb_prod, tipo_prod, precio_unit, precio_dist, fecha_reg)VALUES('$nombre','$tipo','$precio_uni','$precio_dis', '$fecha')");
	break;
	
	case 'Edicion':
		mysql_query("UPDATE productos SET nomb_prod = '$nombre', tipo_prod = '$tipo', precio_unit = '$precio_uni', precio_dist = '$precio_dis' WHERE id_prod = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM productos ORDER BY id_prod ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Nombre</th>
                <th width="200">Tipo</th>
                <th width="150">Precio Unitario</th>
                <th width="150">Precio Distribuidor</th>
				<th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nomb_prod'].'</td>
				<td>'.$registro2['tipo_prod'].'</td>
				<td>S/. '.$registro2['precio_unit'].'</td>
				<td>S/. '.$registro2['precio_dist'].'</td>
				<td><a href="javascript:editarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>