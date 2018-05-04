<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "ingsoft";
$tbl_name = "usuarios";

$form_pass = $_POST['password'];

$hash = password_hash($form_pass, PASSWORD_BCRYPT);

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if($conexion->connect_error){
	die("La conexion fallo: " . $conexion->connect_error);
}

$query = "INSERT INTO usuarios (nombre_usuario, password) VALUES ('$_POST[username], '$hash')";

if($conexion->query($query) === TRUE){
	echo "<br />" . "<h2>" . "Usuario creado exitosamente!" . "</h2>"; 
	echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
	echo "<h5" . "Hacer login: " . "<a href='RegisterUsuario.html'>Login</a>" . "</h5>";

	}else{
	echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
	}

	mysqli_close($conexion);

<?