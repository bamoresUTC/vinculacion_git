

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert title here</title>

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
$("#tutor").change(function(){
	var x=($("#tutor").val());
$(document).find("#valor").val(x);
})
	
})
  </script> 
</head>
<body>
<label>unidad academica</label>
<select id="unidadA">

<br>
</select>
<label>Carreras</label>
<select id="carreras">

</select>
</select>
<label>Nivel</label>
<select id="nivel">

</select>
<label>Horario</label>
<select id="horario">

</select>
<label>Horas </label>
<select id="horas">

</select>
<label>Tutor</label>
<select id="tutor">

</select>
<input id="valor">
</body>
</html>