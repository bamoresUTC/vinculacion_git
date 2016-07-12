<!--  <option>--selecione unidad academica--</option> -->
<?php 
 include("../conex.php");
 
 $cad="select * from unidadacademica";
 $rs5=mysql_query($cad,$conex);
 echo '<option value="">--Selecione unidad academica</option>';
 while ($row=mysql_fetch_array($rs5)) {
 	
 	echo "<option value=".$row["idUnid"].">".$row['nombreUnid']."</option>";
 }
 
 ?>


