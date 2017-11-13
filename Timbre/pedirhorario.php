<!DOCTYPE html>
<html lang ="es">
<head>
	
	<?php 
		include_once "conexion.php"
	?>
</head>

<body style="background-color:#2EB398; ">
        <form method="POST" action="programarhorario.php">
            <h2> Ingrese sus datos</h2>


            <input type="number" placeholder="&#128272; ID " name="identhhorario">
            
            <input type="number" placeholder="&#128272; ID Horario " name = "idregistrar">
            <input type="time" placeholder="&#128272; Hora Inicio " name="horainiciar" min="5:00:00" max="20:00:00">
            <input type="time" placeholder="&#128272; Hora Fin " name="horafinal" min="5:00:00" max="20:00:00" step="1">
            <input type="submit" value="Guardar">
        </form>>
    </body>
    </html>