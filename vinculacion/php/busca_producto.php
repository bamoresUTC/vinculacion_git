<?php
include("../conex.php");

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("select cedulaUsu,nombreUsu,apellidoUsu,nombrePeri,nombreUnid,nombreCarr,nombreNivel,nombreHor,horas,nombreTutor,nombrePro, estadoMat,fechaMat from usuario U, carrera C, unidadacademica UN,nivel N,proyecto P, matricula M, periodoacademico PA,horario HR,horas H where cedulaUsu='$dato' and U.idUsu=M.idUsu and UN.idUnid=M.idUnid and c.idCarr=M.idCarr and N.idNivel=M.idNivel and p.idPro=M.idpro and PA.idPeri=M.idPeri and HR.idHor=M.idHor and H.idH=M.idH ");


//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	    <th width="60">Cedula</th>
			                <th width="100">Nombre</th>
			                <th width="100">Apllido</th>
			                <th width="150">Periodo Academico</th>
			                <th width="100">Unidad Academica</th>
  			                <th width="100">Carrera</th>
  			                 <th width="100">Nivel</th>
  			                  <th width="100">Horario</th>
  			                  <th width="50">Horas</th>
  			                    <th width="100">Nombre de Tutor</th>
  			                      <th width="100">Nombre de Proyecto</th>
    			 <th width="100">fecha de Matricula</th>
			         <th width="100">Estado de Matricula</th> 
            </tr>';
if(mysql_num_rows($registro)>=0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
					<td>'.$registro2['cedulaUsu'].'</td>
							<td>'.$registro2['nombreUsu'].'</td>
							<td>'.$registro2['apellidoUsu'].'</td>
							<td>'.$registro2['nombrePeri'].'</td>
							<td>. '.$registro2['nombreUnid'].'</td>
							<td>. '.$registro2['nombreCarr'].'</td>
							<td>. '.$registro2['nombreNivel'].'</td>
							<td>. '.$registro2['nombreHor'].'</td>
								<td>'.$registro2['horas'].'</td>
								<td>'.$registro2['nombreTutor'].'</td>
								<td>'.$registro2['nombrePro'].'</td>
									<td>'.$registro2['estadoMat'].'</td>												
							<td>'.$registro2['fechaMat'].'</td></tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>