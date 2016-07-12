<?php 
	include("../conex.php");
	$cad="select * from Rol";
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
				<script type="text/javascript">
function validarcedula()
{
	 var i;
	 var cedula;
	 var acumulado;
	 cedula=document.formacedula.txtcedula.value;
	 var instancia;
	 acumulado=0;
	 for (i=1;i<=9;i++)
	 {
	  if (i%2!=0)
	  {
	   instancia=cedula.substring(i-1,i)*2;
	   if (instancia>9) instancia-=9;
	  }
	  else instancia=cedula.substring(i-1,i);
	  acumulado+=parseInt(instancia);
	 }
	 while (acumulado>0)
	  acumulado-=10;
	 if (cedula.substring(9,10)!=(acumulado*-1))
	 {
	  alert("Cedula no valida ingrese uno correcto !!");
	  document.formacedula.txtnombre.disabled = true;
	  document.formacedula.txtapellido.disabled = true;
	  document.formacedula.txtdireccion.disabled = true;
	  document.formacedula.txttelefono.disabled = true;
	  document.formacedula.txtemail.disabled = true;
	  document.formacedula.txtpwd.disabled = true;
	  document.formacedula.txtrepitapwd.disabled = true;
	 	 }
	 else{
	 alert("Cedula valida !!");
	 document.formacedula.txtnombre.disabled = false;
	 document.formacedula.txtapellido.disabled = false;
	  document.formacedula.txtdireccion.disabled = false;
	  document.formacedula.txttelefono.disabled = false;
	  document.formacedula.txtemail.disabled = false;
	  document.formacedula.txtpwd.disabled = false;
	  document.formacedula.txtrepitapwd.disabled = false;
	 }
	}
	</script>
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
							<h1 class="well">Nuevo Usuario</h1>
						</div>
					</div>

						<div class="row text-center">
							<form action="proceso_registro_Cordinador.php" method="POST" class="form-horizontal">
							<div class="form-group"> 
								<label for="Sucursal" class="col-lg-3 control-label">Rol</label>
								<div class="col-lg-6 ">
									<select name="rol" class="form-control ">
										<option>--Seleccione el rol---</option>
										<?php 
											while ($fila=mysql_fetch_array($rs)) {
												echo "<option value=".$fila["idRol"].">".$fila['nombreRol']."</option>";
											}
										 ?>
										
									</select>
								</div>
							</div>
							<div class="form-group">
					 
								<label for="Nombre" class="col-lg-3 control-label">Cedula</label>
								 <div class="col-lg-6">
								 <input  class="form-control" placeholder="ingrese cedula" name="cedula" id="txtcedula" pattern="[0-9]{10}" onkeypress="numeros();" title="debe ingresar 10 digitos" required="required" "  type="text">
                                       </div>
								 </div>
							<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Nombre</label>
								 <div class="col-lg-6">
									   <input  class="form-control" placeholder="ingrese nombre" name="nombre" id="txtnombre" onkeypress="texto();" type="text">
                              </div>
							</div>
							<div class="form-group">
					 
								<label for="Nombre" class="col-lg-3 control-label">Apellido</label>
								 <div class="col-lg-6">
								 <input class="form-control" placeholder="ingrese apellido" name="apellido" id="txtapellido"  onkeypress="texto();" required="required" "  type="text">
                                       </div>
								 </div>
								
							<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Direccion</label>
								 <div class="col-lg-6">
									 <input  class="form-control" placeholder="ingrese direccion" name="direccion" id="txtdireccion"required  type="text">
                                   </div>
							</div>
							<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Telefono</label>
								 <div class="col-lg-6">
								<input   class="form-control" placeholder="ingrese telefono" name="telefono"id="txttelefono" required pattern="[0-9]{10}" onkeypress="numeros();" title="debe ingresar 10 digitos"  type="text">
                                 </div>
							</div>
							<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Email</label>
								 <div class="col-lg-6">
								 <input  class="form-control" placeholder="ingrese email"  name="email"  id="txtemail"type="email">
                                       </div>
							</div>
							<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Clave</label>
								 <div class="col-lg-6">
								  <input  class="form-control" placeholder="ingrese password"  name="pwd" id="txtpwd"required  type="password">
                                         </div>
							</div>
								<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Repita Clave </label>
								 <div class="col-lg-6">
								 <input  class="form-control" placeholder="repita password"  name="pwdr" id="txtrepitapwd"required  type="password">
      </div>
							</div>
							<div class="form-group "> 
								<div class=" col-lg-12">
								<button type="submit" class="btn btn-info">Guardar</button>  
								<a href="Tutores.php" class="btn btn-danger" onclick="return confirm('Esta Seguro que quiere cancelar ?');">Cancelar</a>
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
