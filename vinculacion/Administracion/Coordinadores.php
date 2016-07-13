<?php 
include ("../seguridad/seguridad.php");
 include("../conex.php");
       $cad="select * from usuario where idRol=3";
       $rs=mysql_query($cad,$conex);
?>
<!doctype html> <html class="no-js" lang=""> <!--<![endif]-->
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
    


        <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >Usuarios registrados</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-info" style="color: white;"   href="/vinculacion/inicio.php">Inicio</a></li>
                <li><a class="btn btn-info" style="color: white;"  href="insertarCordinador.php">Nuevo Usuario</a></li>
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
              <h1 class="well">Administracion de Coordinadores</h1>
            </div>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
            <th>Cedula</th>
              <th >Nombre</th>
               <th >Apellido</th>
              <th>Direccion</th>
              <th>Telefono</th>
               <th>Email</th>
              <th>Clave</th>
                          <th colspan="2" class="text-center">Acciones</th>
            </tr>
          </thead>
          <?php 
            while ($fila=mysql_fetch_array($rs)) {
           ?>
           <tr>
             <td><?php echo $fila['cedulaUsu']; ?></td>
             <td><?php echo $fila['nombreUsu']; ?></td>
             <td><?php echo $fila['apellidoUsu']; ?></td>
             <td><?php echo $fila['direccionUsu']; ?></td>
             <td><?php echo $fila['telefonoUsu']; ?></td>
             <td><?php echo $fila['emailUsu']; ?></td>
             <td><?php echo $fila['claveUsu']; ?></td>
             <td class="text-center"><a href="editar_cordinador.php?idUsu=<?php echo $fila['idUsu'];?>& 
           nombre=<?php echo $fila['nombreUsu'];?>&
            apellido=<?php echo $fila['apellidoUsu'];?>&
             direccion=<?php echo $fila['direccionUsu'];?>&
             telefono=<?php echo $fila['telefonoUsu'];?>&
             email=<?php echo $fila['emailUsu'];?>&
             clave=<?php echo $fila['claveUsu'];?>" class="btn btn-info">Modificar</a></td>
             <td class="text-center"><a href="proceso_eliminar_Cordinador.php?idUsu=<?php echo $fila['idUsu']; ?>" class="btn btn-warning">Eliminar</a></td>
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
