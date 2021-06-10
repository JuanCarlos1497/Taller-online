<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<style>
		 body{
			background-image: url('imagenes/fondo20.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
		#login{
			background-color: #D0D3D4;
			opacity: 0.8;
			filter: alpha(opacity=80);
			zoom: 1;
			width: 400px;
			height: 100%;
		}
		#lista-text{
			list-style-type: none;
			display: inline;
		}
	</style>
</head>
<body>

<div id="contenido">
	<center><img src="imagenes/Logo.png" height="150px"></center>
	<hr/>

	
	<center>
		<div id = "login" style="border-radius: 50px">
			<br>
			<h2 style="margin-top: 10px; color: #E74C3C ;"><FONT SIZE=5>Iniciar seción</FONT></h2>
			<p><FONT SIZE= 3>Si tiene una cuenta ingrese sus claves para empezar.<br>Preciona el banner para registrarte.</FONT></p>
			<form method="post" action="logica/loguear.php">
				<ul id="lista-text">
					<li>
						<label " ><FONT SIZE=4>Usuario</FONT></label>
						<div>
							<input type="text" name="usuario">					
						</div>
						
					</li>
					<li>
						<br>
						<label ><FONT SIZE=4>Contraseña</FONT></label>
						<div>
							<input name="clave" type="password">				
						</div>
						
					</li>
					<li>
						<div style="margin-top: 30px;">
							<input style="margin-bottom: 30px" type="submit" name="Submit" value="Entrar">	
						</div>
					</li>
				</ul>
				
			</form>

		</div>
	

	</center>
	</div>	
	<div id='FinPagina'>
		<center  >

			<a title="Crear una cuenta" href="paginaRegistro.php"><img style="height: 100%; width: 100%" src="imagenes/Fondo2.gif"></a>
		</center>
		
	</div>

	<footer>
  		<p align="center" style="margin-top: 10px; color: white; "><FONT SIZE=4>Descripcion: <br>En este proyecto se simulara la pagina WEB de un taller automotiz, la interfaz permite al usuario una navegación comoda y sencilla atravez de imagenes que guían al usuario en su experiencia por este portal web.</FONT></p>
	</footer>
	
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