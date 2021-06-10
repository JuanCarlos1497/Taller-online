<!DOCTYPE html>
<html>

<head>
	<title>OUT-mobilis</title>
	<style>
		#fondo1{
			background-image: url('imagenes/fondo11.jpg');
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
   			-o-background-size: cover;
   			height: 100%;
  			width: 100% ;
		}
		#Servicios{
			background-image: url('imagenes/fondo8.jpg');
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
   			-o-background-size: cover;
   			height: 100%;
  			width: 100% ;
		}
		#comprar{
			background-image: url('imagenes/fondo9.jpg');
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
   			-o-background-size: cover;
   			height: 100%;
  			width: 100% ;
		}
		#contacto{
			background-image: url('imagenes/contacto2.jpg');
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
   			-o-background-size: cover;
   			height: 100%;
  			width: 100% ;
		}
		#Bienvenida{

			

		}
		a{
 		 color: white;
		}
		a:active{
  		color: gray;
		}
		a:hover{
  			color: blue;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="color: white">
	
<?php 
	require 'logica/conexion.php';

	session_start();
	$usuario = $_SESSION['username'];

	$query = "SELECT Tipo FROM usuarios WHERE Username = '$usuario'";
	$result = mysqli_query($conexion,$query);
	while ($mostrar = mysqli_fetch_array($result)) {
		echo $mostrar['Tipo'];
		if($mostrar['Tipo'] == 'admin')
		{
			echo "Entro";
			header("location:paginaAdmin.php");	
		}
	}

	




echo "<div id='fondo1'>
		<h1 align='center' style='color: white'>Bienvenido! </h1>
		<p align='right' style='margin-right: 20px' style='color: white'><FONT SIZE=5><a href='logica/salir.php'>Log out</a></FONT></p>

		<div>
		<table>
			<tr>
				<th><a title='Comprar' href='paginaComprar.php'><img style = 'margin-right: 150px; margin-left: 50px;' src='imagenes/buy.png' alt='Logo' height='50px'></a>
					<td><a title='Servicios' href='paginaServicios.php'><img style = 'margin-right: 150px;' src='imagenes/LogoBN.png' alt='Logo' height='50px'></a>
					<td><a title='Contactanos' href='#contacto'><img src='imagenes/contacto.png' alt='icon' height='50px'></a>
			</tr>
		</table>
	</div>
		
		
	</div>"

?>
<br>

<hr>
<div id="Bienvenida" style="background-color:white">
	<p style="color:black; padding: 40px; margin-bottom: 30px; margin-left: 80px;"; ><FONT SIZE=4>
		<img style = 'margin: 10px;' src='imagenes/LogoN.png' alt='Logo' height='200px' align="left">
		<br><br>En OUT-mobilis nos encargamos de que usted y tu familia reciban la atención que merecen. <br>Nos especializamos en todo tipo de vehículos, nuestro personal cuenta con más de diez años <br>de experiencia por lo que tu automóvil estará en las mejores manos. Brindándoles un servicio <br>de calidad para su auto.<br><br>Con nuestro taller nosotros nos aseguramos de que viajes seguro.<br><br>
	</FONT></p>
</div>	
<hr>
<center>
	<img style = 'margin: 10px;' src='imagenes/marcas.png'>	
</center>

<hr>
<div id='comprar' style="color: black">
	<br>
	<h2 style="margin-top: 90px; margin-left: 50px;" align="left">En OUT-mobilis te ofrecemos los mejores vehiculos a un precio especial<br></h2>
	<p style="margin-left: 50px;"><FONT SIZE=4>
		Aprovecha nuestras promociones en toda nuestra gama, y adquiere el vehiculo que siempre soñaste. <br>Revisa nuestro catalogo en línea, estamos seguros de que tenemos un vehiculo para ti.</FONT></p>
		<div style="height: : 25%; width: 25%">
			<input style="margin-left: 50px;"style="background-color: transparent" type="submit" name="GoToComprar" value="Ver más" onClick='window.location.href="paginaComprar.php"'>
			<p style="margin-bottom: : : 100px"></p>
			<br>

		</div>
</div>
		



	<br>
<div id='Servicios'>
	<br>
	<h2 style="margin-top: 90px; margin-left: 50px;" align="left">En OUT-mobilis lo apoyamos en lo que sea<br></h2>
	<p style="margin-left: 50px;"><FONT SIZE=4>
		Todos los días trabajamos con el objetivo de satisfacer a nuestros clientes por completo<br> con precios justos y servicios de primera calidad y sobretodo la honestidad en nuestros trabajos<br> porque buscamos relaciones a largo plazo y la misma recomendación de quienes han depositado su confianza en nosotros. </FONT></p>
			<?php
			 $_SESSION['username'] = $usuario;
			?>
		<div style="height: : 25%; width: 25%">
			<input style="margin-left: 50px;"style="background-color: transparent" type="submit" name="GoToServices" value="Agenda tu cita aquí" onClick='window.location.href="paginaServicios.php"'>
			<p style="margin-bottom: : : 100px"></p>

			<br>
		</div>
</div>

<br>
<div id='contacto'>
	<br>
	<h2 style="margin-top: 40px; " align="center">Contáctanos<br></h2>
	<p style="margin-left: 50px; margin-bottom: 40px"><FONT SIZE=4>
		OUT-mobilis® se pone a tus órdenes… comunícate con nosotros, envíanos tus comentarios o sugerencias.
Soporte OUT-mobilis®<br><br>
¿Necesitas ayuda? Consulta el Centro de Conocimiento para resolver tus dudas relacionadas con tu vehiculo, servicios y Citas. Llama o escríbenos si persisten tus dudas después de consultar el Centro de Conocimiento.
<br><br>
Servicio al Cliente OUT-mobilis®
<br><br>
</FONT></p>
<p style="margin-left: 20px">Vargas Delgadillo Juan Carlos<br>
Centro Universitario de Ciencias Exactas e Ingenierías<br>
</p>
<img style = 'margin: 10px; margin-left: 25px' src='imagenes/logoUDG.png' height='100px' >
<img style="margin: 10px;margin-right: 22px;" align="right" height="100px" src="imagenes/logoCUCEI.png">
</html>
