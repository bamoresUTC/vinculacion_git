<?php 
 include("../conex.php");
 
 $cad="select * from horario";
 $rs5=mysql_query($cad,$conex);
 echo '<option value="">--Selecione horario</option>';
 while ($row=mysql_fetch_array($rs5)) {
 	
 	echo "<option value=".$row["idHor"].">".$row['nombreHor']."</option>";
 }
 
 ?>

