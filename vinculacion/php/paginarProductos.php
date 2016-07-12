<?php
	include("../conex.php");
 
	$paginaActual = $_POST['partida'];

    $nroProductos = mysql_num_rows(mysql_query("select cedulaUsu,nombreUsu,apellidoUsu,nombrePeri,nombreUnid,
    		nombreCarr,nombreNivel,nombreHor,horas,nombreTutor,nombrePro,estadoMat,fechaMat from usuario U,
    		 carrera C, unidadacademica UN,nivel N,proyecto P, matricula M, periodoacademico PA,horario HR,horas H
    		 where estadoMat='Matriculado' and U.idUsu=M.idUsu and UN.idUnid=M.idUnid and c.idCarr=M.idCarr and
    		 N.idNivel=M.idNivel and p.idPro=M.idpro and PA.idPeri=M.idPeri and HR.idHor=M.idHor and H.idH=M.idH"));
    $nroLotes = 4;
    $nroPaginas = ceil($nroProductos/$nroLotes);
    $lista = '';
    $tabla = '';

    if($paginaActual > 1){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
    }
    for($i=1; $i<=$nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }else{
            $lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual+1).');">Siguiente</a></li>';
    }
  
  	if($paginaActual <= 1){
  		$limit = 0;
  	}else{
  		$limit = $nroLotes*($paginaActual-1);
  	}

  	$registro = mysql_query("select cedulaUsu,nombreUsu,apellidoUsu,nombrePeri,nombreUnid,nombreCarr,nombreNivel,
  			nombreHor,horas,nombreTutor,nombrePro,estadoMat, fechaMat from usuario U, carrera C, unidadacademica UN,nivel N,
  			proyecto P, matricula M, periodoacademico PA,horario HR,horas H where estadoMat='Matriculado' 
  			and U.idUsu=M.idUsu and UN.idUnid=M.idUnid and c.idCarr=M.idCarr and N.idNivel=M.idNivel and p.idPro=M.idpro and PA.idPeri=M.idPeri and HR.idHor=M.idHor and H.idH=M.idH LIMIT $limit, $nroLotes ");


  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover style="width:3000 px; height:3000 px;"">
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
				
	while($registro2 = mysql_fetch_array($registro)){
		$tabla = $tabla.'<tr>
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
							<td>'.$registro2['fechaMat'].'</td>
						  </tr>';		
	}
        

    $tabla = $tabla.'</table>';



    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>