            <?php
include ("seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Inicio</title>

	 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Proyectos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="background-image: url('imgen1.jpg');" >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >DIRECCION DE VINCULACION SOCIAL</a>
          </div>
         	<div class="container" style="text-align: center;">
		<b style="font-size: 23px " ><?php echo$_SESSION['privilegioUsuario']?></b>
	<br>				
	 <a class="btn btn-primary" href="inicio.php">Inicio</a>
    <?php if($_SESSION['privilegioUsuario']=="Administrador"){?>
   <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Gestinar usuarios<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="../vinculacion/Administracion/Estudiantes.php">Estudiante</a></li>
                            <li><a href="/vinculacion/Administracion/Tutores.php">Tutor</a></li>
                                <li><a href="/vinculacion/Administracion/Coordinadores.php">Coordinador</a></li>      
                        </ul>
                    </div>
  <a class="btn btn-info" href="../vinculacion/Administracion/Proyectos.php">Gestionar proyectos</a>
	<?php }?>
		<?php if($_SESSION['privilegioUsuario']=="Coordinador"){?>
	  <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Consultar<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="/vinculacion/vistas/index.php">Estudiantes matriculados</a></li>
                            <li><a href="">Estudiantes que realizaron vinculacion</a></li>   
                             <li><a href="">Solicitudes de estudiantes</a></li>   
                             <li><a href="">Informes de estudiantes</a></li>         
                        </ul>
                    </div>
			<?php }?>
		<?php if($_SESSION['privilegioUsuario']=="Tutor"){?>			
			
			  <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Consultar<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="/vinculacion/vistas/index.php">Estudiantes matriculados</a></li>
                            <li><a href="">Estudiantes que realizaron vinculacion</a></li>   
                             <li><a href="">Solicitudes de estudiantes</a></li>   
                             <li><a href="">Informes de estudiantes</a></li>         
                        </ul>
                    </div>
                      <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Gestionar<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="">Control de visitas</a></li>
                            <li><a href="">Planificacion de actividades</a></li>   
                             <li><a href="">Evaluacion de actividades</a></li>         
                        </ul>
                    </div>
			<?php }?>
			<?php if($_SESSION['privilegioUsuario']=="Estudiante"){?>			
			  <a class="btn btn-info" href="/vinculacion/Administracion/Matricula.php">Matricularse</a>
			                      <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Subir archivos<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="">Solicitudes</a></li>
                            <li><a href="">Informes</a></li>      
                        </ul>
                    </div>
			<?php }?>
	
	<br>
		</div>
		 
          <div class="loginDisplay" style="text-align: right;">
					<img src="images/perfil.png"	 style="height: 25px; width: 25px;" />
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br>
				</div>	
        </div>
        	              </nav>
             
      <br><br><br><br><br><br><br>
	
	
	
	<div class="container" >
<img src="images/ppp.png">

<br><br><br>	

	</div>

	<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>
	</div>

	</body>
</html>