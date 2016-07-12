            <?php
include ("../seguridad/seguridad.php");
 include("../conex.php");
   

$idProy = $_GET['idPro'];


?>
<!DOCTYPE html>
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
                <li><a class="btn btn-info" style="color: white;"   href="/vinculacion/Administracion/Proyectos.php">Volver</a></li>
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

	<div class="container" >

	<div class="row">
	<br>
       <div class="panel panel-info" style="text-align: center;">
       
       <h1 class="">Modificar proyectos</h1>

       </div>
          </div>
<br>
          <table class="table table-condensed">
          <thead>
            <tr class="success">
             <th >Nombre Proyecto</th>
              <th>Descripcion</th>
              <th>Duracion</th>
              <th>Fecha de inicio</th>
              <th>Fecha de finalizacion</th>
                  <th colspan="1" class="text-center">Accion</th>
            </tr>
          </thead>
        
        	<?php $rs=mysql_query("select * from proyecto where idPro='$idProy' ",$conex);?>	
          <?php 
            while($fila=mysql_fetch_array($rs)) {
           ?>
           <tr>
           <form method="post" action="proceso_editar_proyecto.php">
             <input type="hidden" name="idPro" value="<?php echo $fila['idPro'];?>"> 
             <td><input  name="nombreac" style=" width: 200px;" max="100" min="0"  type="text"  value="<?php echo $fila['nombrePro']; ?>"> </td>
             <td><input  name="descripcionac" style=" width: 400px;" max="100" min="0"  type="text"  value="<?php echo $fila['descripcionPro'];?>"> </td>
             <td><input  name="duracionac" style=" width: 100px;" max="100" min="0"  type="text"  value="<?php echo $fila['duracionPro'];?>"> </td>
             <td> <input type="date" name="fechaInicioac" style="width: 130px;" value="<?php echo $fila['fechainicioPro'];?>"> </td>
             <td> <input type="date" style="width: 130px;" name="fechaFinac" value="<?php echo $fila['fechafinalPro'];?>">  </td>
             <td class="text-center"><button class="btn btn-info" type="submit" onclick="return confirm('Esta seguro que desea modificar')" >Guardar</button></td>
           </form>
           </tr>
           <?php 
              }
            ?>
          <tbody>
            
          </tbody>
        </table>
	
	
	<br>	<br><br><br>	<br><br><br><br>	
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