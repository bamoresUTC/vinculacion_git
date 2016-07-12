            <?php
include ("../seguridad/seguridad.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estudiantes matriculados</title>
<link href="../css/estilos.css" rel="stylesheet">

<script src="../js/jquery.min.js"></script>
<script src="../js/myjava.js"></script>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
  
        <nav class="navbar navbar-default navbar-fixed-top app-navbar"> <!--navbar-fixed-top-->
        <div class="container" style="background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
          <div class="navbar-header">
            <a href="" class="navbar-brand" style="color: white;" >LISTADO DE ESTUDIANTES MATRICULADOS</a>
          </div>
         	
		 
          <div class="loginDisplay" style="text-align: right;">
					<img src="../images/perfil.png"	 style="height: 25px; width: 25px;" />
					<span class="bold"> <span style="color: white; font-size: 16px"> <?php echo $_SESSION['usuario'];?></span>
					</span><br>[ <a id="" href="cerrar.php" style="color: red;">Cerrar						sesion</a> ]
			<br><br>
				</div>	
        </div>
        	              </nav>
        	              <br >    <br >    <br >    <br >    <br >    <br >    <br >    <br >
    <section>
    <table border="0" align="center" style="width: px; height: px;">
    	<tr>
    	<td width="50" style="padding-left:1px;  margin-right:1 px;"><label>Buscar:</label></td>
    	<td width="335" style="margin-left: 2px;"><input type="text" placeholder="Busca un estudiantes por nuemro de cedula" id="bs-prod"/></td>
       	<!--             <td><input type="date" id="bd-desde"/>
            <td>Hasta&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="date" id="bd-hasta"/></td>
            <td width="100"><button id="nuevo-producto" class="btn btn-primary">Nuevo</button></td></td> -->
             <td width="200"><a target="_blank" href="javascript:reportePDF();" class="btn btn-danger">Exportar Busqueda a PDF</a></td> 
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros"></div>
    <center>
        <ul class="pagination" id="pagination"></ul>
    </center>
    <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
    <div class="modal fade" id="registra-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita un Producto</b></h4>
            </div>
            <form id="formulario" class="formulario" onsubmit="return agregaRegistro();">
            <div class="modal-body">
				<table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-prod" name="id-prod" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro" name="pro"/></td>
                    </tr>
                	<tr>
                    	<td>Nombre: </td>
                        <td><input type="text" required="required" name="nombre" id="nombre" maxlength="100"/></td>
                    </tr>
                    <tr>
                    	<td>Tipo: </td>
                        <td><select required="required" name="tipo" id="tipo">
                        		<option value="enlatados">Enlatados</option>
                                <option value="organicos">Organicos</option>
                                <option value="nocomestibles">No Comestibles</option>
                                <option value="otros">Otros</option>
                            </select></td>
                    </tr>
                    <tr>
                    	<td>Precio Unitario: </td>
                        <td><input type="number" required="required" name="precio-uni" id="precio-uni"/></td>
                    </tr>
                    <tr>
                    	<td>Precio Distribuidor: </td>
                        <td><input type="number"  required="required" name="precio-dis" id="precio-dis"/></td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                        	<div id="mensaje"></div>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="modal-footer">
            	<input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
            </div>
            </form>
          </div>
        </div>
      </div>
      <br><br>
      
<footer>
		<div class="container" style="text-align: center; background: #2c3e50; height: 143px;padding:30px;color:#fff;width: 1360px;">
			<h3></h3>
			<h3>2016</h3>
		</div>
	</footer>
</body>
</html>
