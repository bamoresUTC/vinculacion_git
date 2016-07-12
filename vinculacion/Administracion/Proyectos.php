<?php 
include ("../seguridad/seguridad.php");
 include("../conex.php");
       $cad="select * from proyecto";
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
        <title>Proyectos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">

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
            <a href="" class="navbar-brand" style="color: white;" >Proyectos de vinculacion</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-info" style="color: white;"   href="/vinculacion/inicio.php">Inicio</a></li>
                <li><a class="btn btn-info" style="color: white;"  href="insertarproyectos.php">Nuevo proyecto</a></li>
            </ul>
          </div> <br>
          <div class="loginDisplay" style="text-align: right;">
					<img src="../images/perfil.png"	 style="height: 25px; width: 25px;" />
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="../cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br><br>
				</div>	
        </div>
        	              </nav>
             
      <br><br><br><br><br><br><br>
      <div class="container">

      <div class="row">
            <div class="col-lg-12 text-center">
              <h1 class="well">Administracion de Proyectos</h1>
            </div>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th >Nombre Proyecto</th>
              <th>Descripcion</th>
              <th>Duracion</th>
              <th>Fecha de inicio</th>
              <th>Fecha de finalizacion</th>
              <th colspan="2" class="text-center">Acciones</th>
            </tr>
          </thead>
          <?php 
            while ($fila=mysql_fetch_array($rs)) {
           ?>
           <tr>
             <td><?php echo $fila['nombrePro']; ?></td>
             <td><?php echo $fila['descripcionPro']; ?></td>
             <td><?php echo $fila['duracionPro']; ?></td>
             <td><?php echo $fila['fechainicioPro']; ?></td>
             <td><?php echo $fila['fechafinalPro']; ?></td>
             <td class="text-center"><a href="editar_proyecto.php?idPro=<?php echo $fila['idPro'];?>& 
           nombreac=<?php echo $fila['nombrePro'];?>&
            descripcionac=<?php echo $fila['descripcionPro'];?>&
             duracionac=<?php echo $fila['duracionPro'];?>&
             fechaInicioac=<?php echo $fila['fechainicioPro'];?>&
             fechaFinac=<?php echo $fila['fechafinalPro'];?>" class="btn btn-info">Modificar</a></td>
             <td class="text-center"><a href="proceso_eliminar_proyectos.php?idPro=<?php echo $fila['idPro']; ?>" class="btn btn-warning" onclick="return confirm('Esta seguro que desea eliminar el proyecto')">Eliminar</a></td>
           </tr>
           <?php 
              }
            ?>
          <tbody>
            
          </tbody>
        </table>
      </div>

<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>


       

       

        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>
