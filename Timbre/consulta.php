<?php
include "conexion.php";
$nombre = $_POST['usuario']; 
$password = $_POST['clave']; 


$consulta= "SELECT * FROM usuarios WHERE usuario='$nombre' AND contrasena='$password' ";
$resultado= $con->query($consulta);

	if ($resultado->num_rows>0) {
		
		include "menu.html";
	}else{
		echo '<script>alert("Datos incorrectos, Intentalo Nuevamente")</script>';
		include "index.html";
	}
?>