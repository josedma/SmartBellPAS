<?php
include "conexion.php";
$idhorario = $_POST['idhorario'];
$descrip = $_POST['descripcion'];

$insertar= "INSERT INTO registro_horario (idHorario, descripcion) VALUES ('$idhorario', '$descrip')";

$resultado = mysqli_query($con, $insertar);
if(!$resultado){

	echo "error al registrar";

}
else{
	echo "Registro exitoso";
}
?>