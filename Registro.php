<?php
	$conectar = mysql_connect('localhost', 'root', '');

	if(!$conectar){
		echo "No se pudo conectar con el servidor";
	}else{
		$base=mysql_select_db('ingsoft', $db);
		if(!$base){
			echo "No se encontro la base de datos";
		}
	}

	$nombre=$_POST['Nombre'];
	$apellido=$_POST['Apellido'];
	$correo=$_POST['Usuario'];
	$password=$_POST['Password'];
	$rpassword=$_POST['Repetir'];

	$sql = "INSERT INTO usuarios VALUES('$nombre', 'apellido', 'correo', 'password', 'rpassword')"; 

	$ejecutar = mysql_query($sql);

	if(!$ejecutar){
		echo "Ha ocurrido un error";
	}else{
		echo "Datos guardados con exito";
	}
?>