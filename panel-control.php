<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

}else{
	echo "Esta pagina es solo para usuarios registrados.<br>";
	echo "<br><a href='Login.html'>Login</a>";
	echo "<br><br><a href='registerUsuario.html'>Registrarme</a>";

exit;
}

$now = time();

if($now > $_SESSION['expire']){
	session_destroy();

	echo "La sesion ha expirado, <a href='Login.html'>Necesita hacer login</a>";
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Panel de control</title>
</head>

<body>
<h1>Panel de control</h1>
<p>Anexar enlaces para hacer los ajustes en el prefil del usuario...</p>

<ul>
	<li>Editar perfil</li>
	<li>Editar datos</li>
</ul>

<br><br>

<a href=logout.php>Cerrar sesion</a>

</body>
</html>