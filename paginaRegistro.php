<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<style >
		body{
			background-image: url('imagenes/fondo5.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
		#llista_imatges {
   			list-style-type: none;
        	display: inline;
		}

		label
		{
  		 letter-spacing: 0.2em;	
  		 word-spacing: 0.25em;
		}
	</style>
	<title>Registrar</title>
</head>
<body>


<center>
	<div>
	<form  method="post" action="logica/registrar.php">
		<div>
			<h1 style="color:#F1C40F";>REGISTRO</h1>
			<p style="color:white;";><FONT SIZE=5>Ingrese los siguientes datos para completar su registro</FONT></p>
			<div>
				<ul id="llista_imatges"> 
					<li>
						<label style="color:#F1C40F";><FONT SIZE=4>Nombre:*</FONT></label>
						<input type="text" name="nombre">
						
					</li>
					<br>
					<li>
						<label style="color:white;";><FONT SIZE=4>Username:*</FONT></label>
						<input type="text" name="username">
						
					</li>
					<br>
					<li>
						<label style="color:white;";><FONT SIZE=4>Contraseña:*</FONT></label>
						<input type="text" name="clave">
						
					</li>
					<br>
					<li>
						<input type="submit" name="enviar" value="Enviar" onclick="alerta()">
					</li>
				</ul>
			</div>
			
		</div>
	</form>
</div>
</center>
<script type="text/javascript">
	function alerta()
    {
    var mensaje;
    var opcion = confirm("El registro se realizo con exito");
    if (opcion == true) {
        mensaje = "Lo redireccionaremos en seguida";
	} else {
	    mensaje = "Has clickado Cancelar";
	}
	document.getElementById("ejemplo").innerHTML = mensaje;
}


</script>


</body>
</html>