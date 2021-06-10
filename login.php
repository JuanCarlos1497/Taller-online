<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="view.css" media="all">
	<meta charset="utf-8">
	<style>

		html, body {
			width: 100%;
			height: 100%;
		}

		body{
			background-image: url('imagenes/fondo20.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
	</style>

</head>
<body >
<div id="contenido">
<center><img src="imagenes/Logo.png" height="150px"></center>	
<hr/>
<form id="login" method="POST" action="logica/loguear.php">
	<div >
		<h2 class="h2">Iniciar seción</h2>
		<p >Si tiene una cuenta ingrese sus claves para empezar.</p>
		<div>
			<ul>
				<li id="elemento1">
					<label color="white" class="description" for="elemento1">Usuario</label>
					<div>
						<input class="texBOX" type="text" name="usuario" maxlength="255"/>
					</div>
				</li>
				<li id="elemento2">
					<label class="description" color="white" for="elemento2">Contraseña</label>
					<div>
						<input class="texBOX" type="password" name="clave" />
					</div>
				</li>
					<li class="buttons">
						
						<input type="hidden" name="form_id" value="108331"/>
						<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit">
					</li>
			</ul>
		</div>
	</div>

</form>
</div>



<div id='FinPagina' >
		<center>

		<a title="Crear una cuenta" href="paginaRegistro.php"><img style="height: : 100%; width: 100%"  src="imagenes/Fondo.gif" alt="Funny image"></a>

		<!--<a title='Comprar' href='#comprar'><img src='imagenes/LogoBN.png' alt='Logo' height='50px'></a>
		-->

	</center>
	</div>

		<script type="text/javascript">
		window.onresize = function() {
			reSize();
		}

		function reSize(){
			var winHeight = window.innerHeight
			var minHeight = 515
			var footHeigth = 150
			
			if(winHeight > minHeight) {
				var newSize = winHeight-footHeigth
				console.log(newSize)
				document.getElementById("contenido").style.height = newSize + "px"
			}
			else {
				document.getElementById("contenido").style.height = "400px"
			}

		}

		(function() {
			reSize()
		})();


	</script>
</body>
</html>