<?php 
 include("../conex.php");
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link href="../css/estilos.css" rel="stylesheet">

  </head>
	<script> 
 
 function numeros() 
{
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}	
</script>
  <body>

    <div class="container">



      <form class="form-signin" method="post" action="validarLogin.php">
        <h2 class="form-signin-heading">iniciar sesion</h2>
        <input class="form-control" placeholder="ingrese cedula" name="cedula" onkeypress="numeros();"required="" autofocus="" type="text">

<br>

        <input class="form-control" placeholder="Password" name="clave" required="" type="password">

<br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

      </form>

    </div> <!-- /container -->



</body></html>
    
