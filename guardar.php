<?php 

include ('conexion.php');


if (isset($_POST['nombre']) && !empty($_POST['nombre']) || 
	isset($_POST['apellido']) && !empty($_POST['apellido']) || 
	isset($_POST['cedula']) && !empty($_POST['cedula']) || 
	isset($_POST['usuario']) && !empty($_POST['usuario']) || 
	isset($_POST['pwd']) && !empty($_POST['pwd'])){

		$usuario = mysqli_query($con,"INSERT INTO usuario (nombre, apellido,cedula, usuario, clave) 
									VALUES('$_POST[nombre]',
											'$_POST[apellido]',
											'$_POST[cedula]',
											'$_POST[usuario]',
											'$_POST[pwd]')");
		if ($usuario) {

			echo 'El Usuario fue registrado con exito';	

		}else{

			echo  'Ocurrio un error registrando al usuario Verifique los datos enviados';
		}

 }else {
    		echo 'Verifique los que los campos eten completos';
 }