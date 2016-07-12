<?php 
 include("../conex.php");
 $idUni=$_GET['param_id'];
 $cad="select * from carrera where idUnid=$idUni";
 $rs5=mysql_query($cad,$conex);
 
 while ($row=mysql_fetch_array($rs5)) {
 	
 	echo "<option value=".$row["idCarr"].">".$row['nombreCarr']."</option>";
 }
 
 ?>