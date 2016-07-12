            <?php
include ("../seguridad/seguridad.php");
 include("../conex.php");
   

$idusu = $_GET['idUsu'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sistema de Vinculacion</title>
<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<header>
		<div class="container" style="text-align: center;">
		<b style="font-size: 23px " ><?php echo$_SESSION['privilegioUsuario']?></b>
	<br>				
	 <a class="btn btn-primary" href="../inicio.php">Inicio</a>
    <?php if($_SESSION['privilegioUsuario']=="Administrador"){?>
	<a class="btn btn-warning" href=""></a>		
	<?php }?>
	
	<br>
		</div>
		<div class="loginDisplay" style="text-align: right;">
					<img src="../perfil.png" style="height: 25px; width: 25px;" />
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="../cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br><br>
				</div>	
	
	</header>

	<div class="container" >

	<div class="row">
	<br>
       <div class="panel panel-info" style="text-align: center;">
       
       <h1 class="">Estudiantes</h1>

       </div>
          </div>
<br>
          <table class="table table-condensed">
          <thead>
           <th>Cedula</th>
              <th >Nombre</th>
               <th >Apellido</th>
              <th>Direccion</th>
              <th>Telefono</th>
               <th>Email</th>
              <th>Clave</th> 
              <th>Repita Clave</th>     <th colspan="1" class="text-center">Accion</th>
            </tr>
          </thead>
        
        	<?php $rs=mysql_query("select * from usuario where idUsu='$idusu' ",$conex);?>	
          <?php 
            while($fila=mysql_fetch_array($rs)) {
           ?>
           <tr>
           <form method="post" action="proceso_editar_Cordinador.php">
             <input type="hidden" name="idUsu" value="<?php echo $fila['idUsu'];?>"> 
             <th><?php echo $fila['cedulaUsu']; ?> </th>
             <td><input  name="nombre" style=" width: 100px;" max="100" min="0"  type="text"  value="<?php echo $fila['nombreUsu']; ?>"> </td>
             <td><input  name="apellido" style=" width: 100px;" max="100" min="0"  type="text"  value="<?php echo $fila['apellidoUsu'];?>"> </td>
             <td><input  name="direccion" style=" width: 100px;" max="100" min="0"  type="text"  value="<?php echo $fila['direccionUsu'];?>"> </td>
             <td><input  name="telefono" style=" width: 100px;" max="100" min="0"  type="text"  value="<?php echo $fila['telefonoUsu'];?>"> </td>
             <td><input  name="email" style=" width: 100px;" max="100" min="0"  type="text"  value="<?php echo $fila['emailUsu'];?>"> </td>
             <td><input  name="clave" style=" width: 100px;" max="100" min="0"  type="text"  value="<?php echo $fila['claveUsu'];?>"> </td>
            <td><input  name="claveR" style=" width: 100px;" max="100" min="0"  type="text"  value="<?php echo $fila['repitaclaveUsu'];?>"> </td>
           
            <td class="text-center"><button class="btn btn-info" type="submit" onclick="return confirm('Esta seguro que desea modificar')" >Guardar</button></td>
           </form>
           </tr>
           <?php 
              }
            ?>
          <tbody>
            
          </tbody>
        </table>
	
	
	<br>	<br><br><br><br><br><br>	<br><br><br><br>	
	</div>

	<footer>
		<div class="container" style="text-align: center">
			<h3>Sistemas Distribuidos</h3>
			<h3>2016</h3>
		</div>
	</footer>
	</div>

	</body>
</html>