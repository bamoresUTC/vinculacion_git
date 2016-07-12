<?php
include ("seguridad/seguridad.php");
session_unset();
session_destroy();
header("location:principal.php");
?>
