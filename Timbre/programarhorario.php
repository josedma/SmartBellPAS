<?php
include_once "conexion.php";

$ideh = $_POST['identhhorario'];
$idereg = $_POST['idregistrar'];
$horain = $_POST['horainiciar'];
$horafi = $_POST['horafinal'];

$insert= "INSERT INTO horario (id, idRegHorario, horaInicio, horaFin) VALUES ('$ideh', '$idereg', '$horain', '$horafi')";

$resultado = mysqli_query($con, $insert);

if(!$resultado){

	echo "error al registrar";

}
else{
	echo "Registro exitoso";
}
?>