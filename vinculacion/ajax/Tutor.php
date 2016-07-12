<?php 
 include("../conex.php");
 
 $cad="select * from usuario where idRol=2";
 $rs5=mysql_query($cad,$conex);
 echo '<option value="">--Selecione tutor</option>';
 while ($row=mysql_fetch_array($rs5)) {
 	
 	echo "<option value=".$row["nombreUsu"]."_".$row["apellidoUsu"].">".$row["nombreUsu"]." ".$row["apellidoUsu"]."</option>";
 }
 
 ?>