<?php
session_start();
if (isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>BIENVENIDO</title>
<link rel="stylesheet" href="estilo.css" />
</head>
<body>
<div class="contenedor">
	<h1>BIENVENIDO : <?php echo $_SESSION['usuario']; ?></h1>
	<img src="welcome.png" alt="" >
	<p>Aquí te toca poner todo lo que que solo tus usuario registrados pueden ver. :)</p>
	<p><a href="logout.php">CERRAR SESIÓN</a></p>
</div>
</body>
</html>
<?php
}
else
{
	echo '<script>alert("primero debes loguearte para ver esta pagina")</script>';
	echo '<script>location.href = "index.php";</script>';
}
?>
