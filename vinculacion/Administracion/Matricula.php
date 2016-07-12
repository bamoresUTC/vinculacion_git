<?php 
include ("../seguridad/seguridad.php");
 include("../conex.php");
 
       $cad="select * from proyecto";
       $rs5=mysql_query($cad,$conex);

       $cad="select * from periodoacademico";
       $rs1=mysql_query($cad,$conex);
       require_once ("../PHPPaging.lib/PHPPaging.lib.php");
       $pagina = new PHPPaging ();
?>

	 <?php $cdd=''?>
<?php 						$sql="select MAX(numeroMat) as maximoMat from matricula";
						$rs=mysql_query($sql, $conex);
						$maxFac=0;
						while ($fila=mysql_fetch_array($rs)) {
							$maxFac=$fila['maximoMat'];
						}
// 						este numero se guarda en la factura de  la base de datos
						$maxFac++;
						?>
<!-- 					para  colocar ceros en la factura solo para visualizar-->
					<?php 
					if ($maxFac>=0 && $maxFac<10)
					{
					$maxF='0000'.$maxFac;
					}else if ($maxFac>=10 && $maxFac<100){
						$maxF='000'.$maxFac;
					}
					else if ($maxFac>=100 && $maxFac<1000){
						$maxF='00'.$maxFac;
					}
					else if ($maxFac>=1000 && $maxFac<10000){
						$maxF='0'.$maxFac;
					}
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
<script src="../js/jquery-1-11.3.min.js"></script>
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
 <script src="../js/jquery.min.js"></script>
 <script type="text/javascript">

$("document").ready(function(){

//alert("hola");
$("#unidadA").load("../ajax/UnidadAcdemica.php");

$("#unidadA").change(function(){
	//alert($("#unidadA").val());
var id=	$("#unidadA").val()
$.get("../ajax/Carreras.php",{param_id:id})
.done(function(data){
	
	$("#carreras").html(data);
})
})
	
})
  </script>
  <script type="text/javascript">

$("document").ready(function(){

//alert("hola");
$("#nivel").load("../ajax/nivel.php");

	
})
  </script>
    <script type="text/javascript">

$("document").ready(function(){

//alert("hola");
$("#horario").load("../ajax/horario.php");
$("#horario").change(function(){
	//alert($("#unidadA").val());
var id=	$("#horario").val()
$.get("../ajax/horas.php",{param_id:id})
.done(function(data){
	
	$("#horas").html(data);
})
})
	
})
  </script>
     <script type="text/javascript">

$("document").ready(function(){

//alert("hola");
$("#tutor").load("../ajax/Tutor.php");

	
})
  </script>
      <script type="text/javascript">

$("document").ready(function(){

//alert("hola");
$("#tutor").load("../ajax/Tutor.php");
$("#tutor").change(function(){
	var x=($("#tutor").val());
$(document).find("#valor").val(x);
})
	
})
  </script> 
    </head>
   
    <body style="background-image: url('imgen1.jpg');" >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >Matriculacion </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
           
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
              <h1 class="well">Matricula</h1>
            </div>
          </div>
        
      </div>
      <form action="proceso_registro_Matricula.php" method="POST" class="form-horizontal">
							 <input type="hidden" class="form-control" name="idusu"  value="<?php echo $_SESSION['idUsuario'];?>">
								<div class="form-group">
								<label for="Nombre" class="col-lg-3 control-label">Numero de matricula</label>
								 <div class="col-lg-6">
									 <input type="text" class="form-control"  readonly="readonly" name="numeromatricula" required placeholder="" value="<?php echo $maxF?>">
								 </div>
								 </div>
							<div class="form-group">
					 
								<label for="Nombre" class="col-lg-3 control-label">Cedula</label>
								 <div class="col-lg-6">
									 <input type="text" class="form-control" name="cedula" readonly="readonly" required placeholder="Ingrese el nombre del proyecto" value="<?php echo $_SESSION['cedulaUsuario'];?>">
								 </div>
								 </div>
							<div class="form-group"> 
								<label for="Nombre" class="col-lg-3 control-label">Nombres completros</label>
								 <div class="col-lg-6">
								 		 <input type="text" class="form-control" name="nombre" readonly="readonly" required placeholder="Ingrese el nombre del proyecto" value="<?php echo $_SESSION['usuario'];?>">
							
								 </div>
							</div>
							<div class="form-group"> 
								<label for="periodo" class="col-lg-3 control-label">Periodo Academico</label>
								<div class="col-lg-6 ">
									<select name="periodo" class="form-control " required="required">
										<option>--Seleccione Periodo Academico---</option>
										<?php 
											while ($fila=mysql_fetch_array($rs1)) {
												echo "<option value=".$fila["idPeri"].">".$fila['nombrePeri']."</option>";
											}
										 ?>
										
									</select>
								</div>
							</div>
							<div class="form-group"> 
							<label for="unidad" class="col-lg-3 control-label">unidad academica</label>
								<div class="col-lg-6 ">											
                           <select id="unidadA" name="unidad" class="form-control " required="required">
                               </select>
								</div>
							</div>
							<div class="form-group"> 
							<label for="carrera" class="col-lg-3 control-label">Carrera</label>
								<div class="col-lg-6 ">											
                           <select id="carreras" name="carrera" class="form-control " required="required">
                               </select>
								</div>
							</div>
								<div class="form-group"> 
							<label for="tutor" class="col-lg-3 control-label">Tutor</label>
								<div class="col-lg-6 ">											
                           <select id="tutor"  class="form-control " required="required">
                               </select>
                               
								</div>
							</div>
								<div class="form-group"> 
							<label for="nivel" class="col-lg-3 control-label">Nivel</label>
								<div class="col-lg-6 ">											
                           <select id="nivel" name="nivel" class="form-control " required="required">
                               </select>
								</div>
							</div>
							
									<div class="form-group"> 
								<label for="proyecto" class="col-lg-3 control-label">Proyecto</label>
								<div class="col-lg-6 ">
									<select name="proyecto" class="form-control " required="required">
										<option>--Seleccione Proyecto---</option>
										<?php 
											while ($fila=mysql_fetch_array($rs5)) {
												echo "<option value=".$fila["idPro"].">".$fila['nombrePro']."</option>";
											}
										 ?>
										
									</select>
								</div>
							</div>
								<div class="form-group"> 
							<label for="horario" class="col-lg-3 control-label">Horario</label>
								<div class="col-lg-6 ">											
                           <select id="horario" name="horario" class="form-control " required="required">
                               </select>
								</div>
							</div>	
								<div class="form-group"> 
							<label for="horas" class="col-lg-3 control-label">Horas semanales</label>
								<div class="col-lg-6 ">											
                           <select id="horas" name="horas" " class="form-control " readonly="readonly"  required="required">
                               </select>
								</div>
							</div>	
						<div class="form-group"> 
								<label for="fecha" class="col-lg-3 control-label">Fecha de matricula</label>
								 <div class="col-lg-6">
									 <input type="date" class="form-control"  name="fecha" required placeholder="Ingrese fecha inicio">
								 </div>	
								 </div>	
								
									 <input type="hidden" class="form-control" name="estado" value="Matriculado" required placeholder="Ingrese fecha inicio">
								
								 <br>	<br>	<br>	<br>				
								<div class="form-group "> 
								<center><div class=" col-lg-12">
								<button type="submit" class="btn btn-info">Guardar</button>  
								<a href="/vinculacion/inicio.php" class="btn btn-danger" onclick="return confirm('Esta Seguro que quiere cancelar ?');">Cancelar</a>
								</div></center>
							</div>
							<input id="valor" name="nombreTutor" type="hidden">
						</form>

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
