<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/default.css" rel="stylesheet">
     <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-hover-dropdown.min.js"></script>
    
    <style type="text/css">
    
   #DNN6 {
    position: relative;
    z-index: 1;
    padding: 0px;
    background: url(../images/fondo.jpg) 0 -900px repeat-x;
    margin: 0px;
    border-top: 1px #ccc solid;
}
    </style>
    
    
    </head>
    
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
 
  <body id="DNN6">

    <div class="container">
        <div class="row">
            <h1></h1>
            <div class="col-md-12">
                <div class="text-center">
                    <h4></h4>
                    <div class="btn-group">
                          <a class="btn btn-info dropdown-toggle" href="/vinculacion/principal.php">INICIO</a>
                         </div>
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">DESCARGAS <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Formatos solicitudes</a></li>
                            <li><a href="#">Formatos informes</a></li>
                                                  </ul>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">SUBIR ARCHIVOS<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Solicitudes</a></li>
                            <li><a href="#">Informes</a></li>             
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">REGISTRO<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="formulario.php">Estudiante</a></li>
                            <li><a href="registroTutor.php">Tutor</a></li>
                            <li><a href="registroCordinador.php">Coordinador</a></li>
                           
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-success dropdown-toggle">Matricularse</a>
                      
                    </div>
                    <div class="btn-group">
                        <a href="../vinculacion/Administracion/login.php" class="btn btn-info dropdown-toggle" >INICIAR SESEION</a>
                                          </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="width:400px;height:400 px; float:none;margin-left:500px; ">
      <form class="form-signin" name="formacedula" method="post" action="proceso_registro_usuario.php" >
        <center><h2 class="form-signin-heading" style="color: white">Registrar
        </h2></center>
        <input style="width: 300px;height:300 px;" class="form-control" placeholder="ingrese cedula" name="cedula" id="txtcedula" pattern="[0-9]{10}" onkeypress="numeros();" title="debe ingresar 10 digitos" required="required" "  type="text">
       <br>
       <input style="width: 300px;height:300 px;" class="form-control" placeholder="ingrese nombre" name="nombre" id="txtnombre" onkeypress="texto();" type="text">
       <br>
      <input style="width: 300px;height:300 px;" class="form-control" placeholder="ingrese apellido" name="apellido" id="txtapellido" onkeypress="texto();" required  type="text">
       <br>
      <input style="width: 300px;height:300 px;" class="form-control" placeholder="ingrese direccion" name="direccion" id="txtdireccion"required  type="text">
       <br>
      <input  style="width: 300px;height:300 px;" class="form-control" placeholder="ingrese telefono" name="telefono"id="txttelefono" required pattern="[0-9]{10}" onkeypress="numeros();" title="debe ingresar 10 digitos"  type="text">
       <br>
      <input style="width: 300px;height:300 px;"  class="form-control" placeholder="ingrese email"  name="email"  id="txtemail"type="email">
       <br>
       <input style="width: 300px;height:300 px;" class="form-control" placeholder="ingrese password"  name="pwd" id="txtpwd"required  type="password">
       <br>
       <input style="width: 300px;height:300 px;" class="form-control" placeholder="repita password"  name="repitapwd" id="txtrepitapwd"required  type="password">
       <br>
          
        <button class="btn btn-lg btn-primary btn-block" style="width: 100px;height:100 px; float:none; margin-left:100px;" type="submit">Registrar</button>
      </form>
    </div> <!-- /container -->

</body></html>
    
