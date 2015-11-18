<?php
session_start();
if (isset($_SESSION['usuario']))
{
	echo '<script>location.href = "welcome.php";</script>';
}
else
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>INICIO DE SESIÓN</title>
<link rel="stylesheet" href="estilo.css" />
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
<div class="contenedor">
	<h1>Login PHP y MySQL - http://www.genesisvargasj.com</h1><hr>
	<h2>INICIO DE SESIÓN</h2>
	<img src="login.png" alt="" width="80" height="80">
	<div id="formulario">
		<form method="POST" action="return false" onsubmit="return false">
			<div id="resultado"></div>
			<p><input type="text" name="user" id="user" value="" placeholder="USUARIO"></p>
			<p><input type="password" name="pass" id="pass" value="" placeholder="*******"></p>
			<p><button onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">ENTRAR</button></p>
		</form>
		<p>usuario de prueba: genesis</p>
		<p>password de prueba: 123</p>
		<script>
		function Validar(user, pass)
		{
			$.ajax({
				url: "validar.php",
				type: "POST",
				data: "user="+user+"&pass="+pass,
				success: function(resp){
					$('#resultado').html(resp)
				}		
			});
		}
		</script>
	</div>
</div>
</body>
</html>
<?php
}
?>
