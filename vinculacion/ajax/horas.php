<?php 
 include("../conex.php");
 $idh=$_GET['param_id'];
 $cad="select * from horas where idHor=$idh";
 $rs5=mysql_query($cad,$conex);
 
 while ($row=mysql_fetch_array($rs5)) {
 	
 	echo "<option value=".$row["idH"].">".$row['horas']."</option>";
 }
 
 ?>
