<?php 
	include("../conex.php");
	$cad="select * from horario";
	$rs=mysql_query($cad,$conex);

 ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<title>Nuevos Proyectos</title>
				<meta name="description" content="">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="../css/bootstrap.min.css">
				<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
				<link rel="stylesheet" href="../css/main.css">
				<script src="../js/vendor/modernizr-2.8.3.min.js"></script>
					<script> 
 
 function numeros() 
{
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}	
</script>
 <script>
function texto() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}
</script>
		</head>
		<body>
				<!--[if lt IE 8]>
						<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
				<![endif]-->

				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 text-center">
							<h1 class="well">Nuevo Proyecto</h1>
						</div>
					</div>

						<div class="row text-center">
							<form action="proceso_insertar_proyectos.php" method="POST" class="form-horizontal">
							
							<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Nombre Proyecto</label>
								 <div class="col-lg-6">
									 <input type="text" class="form-control"  onkeypress="texto();" name="nombrepro" required placeholder="Ingrese el nombre del proyecto">
								 </div>
							</div>
							<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Descripcion de proyecto </label>
								 <div class="col-lg-6">
								 <textarea class="form-control"  rows="" cols=""  onkeypress="texto();" name="descripcion" required placeholder="Ingrese decripcion"></textarea>
								 </div>
							</div>
										<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Duracion</label>
								 <div class="col-lg-6">
									 <input type="text" class="form-control" name="duracion" required placeholder="Ingrese duracion">
								 </div>
							</div>
								<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Fecha de inicio</label>
								 <div class="col-lg-6">
									 <input type="date" class="form-control" name="inicio" required placeholder="Ingrese fecha inicio">
								 </div>
							</div>
								<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Fecha de finalizacion</label>
								 <div class="col-lg-6">
									 <input type="date" class="form-control" name="fin" required placeholder="Ingrese fecha de finalizacion">
								 </div>
							</div>
							
							<div class="form-group "> 
								<div class=" col-lg-12">
								<button type="submit" class="btn btn-info">Guardar</button>  
								<a href="Proyectos.php" class="btn btn-danger" onclick="return confirm('Esta Seguro que quiere cancelar ?');">Cancelar</a>
								</div>
							</div>
						</form>
					</div>
			</div>

			 

				<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
				<script src="../js/vendor/bootstrap.min.js"></script>
				<script src="../js/main.js"></script>
		</body>
</html>
