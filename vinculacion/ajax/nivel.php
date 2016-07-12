<?php 
 include("../conex.php");
 
 $cad="select * from nivel";
 $rs5=mysql_query($cad,$conex);
 echo '<option value="">-- Seleccione Nivel--</option>';
 while ($row=mysql_fetch_array($rs5)) {
 	
 	echo "<option value=".$row["idNivel"].">".$row['nombreNivel']."</option>";
 }
 
 ?>
