<!DOCTYPE html>
<html>
<head>
	<title>Servicios</title>
	<style type="text/css">
		
	</style>
	<link rel="stylesheet" href="estilos.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php 
	require 'logica/conexion.php';
	require 'logica/Classuario.php';
	session_start();
	$Nowuser= new Cusuario;
	$Nusuario = $_SESSION['username'];

	$query = "SELECT * FROM usuarios where Username = '$Nusuario'";
	$result = mysqli_query($conexion,$query);

?>


<div id='fondo1'>
		<h1 align='center' style='color: white'>Servicios <?php echo $usuario?></h1>
		<p align='right' style='margin-right: 20px' style='color: white'><FONT SIZE=5><a href='logica/salir.php'>Log out</a></FONT></p>

		<div>
		<table>
			<tr>
				<th><a title='Home' href='paginaprincipal.php'><img style = 'margin-right: 150px; margin-left: 50px;' src='imagenes/Home.png' alt='Logo' height='50px'></a>
				<th><a title='Comprar' href='paginaComprar.php'><img style = 'margin-right: 150px; margin-left: 50px;' src='imagenes/buy.png' alt='Logo' height='50px'></a>
					
					<td><a title='Contactanos' href='paginaprincipal.php#contacto'><img src='imagenes/contacto.png' alt='icon' height='50px'></a>
			</tr>
		</table>
		
		</div>				
</div>
<center>
	<div>
			<br>
		<h1>Selección de servicios</h1>
	</div>
		<div width: 100% style="padding: 50px">
			<img id="Ruedas" src="imagenes/alinearRuedas3.png" height='200px' onclick="cambiar_imagen1('Ruedas','imagenes/alinearRuedas3.png','imagenes/alinearRuedas4.png')">
			<img id="Frenos" src="imagenes/frenos3.png" height='200px'"  onclick="cambiar_imagen2('Frenos','imagenes/frenos3.png','imagenes/frenos4.png')">
			<img id="Aceite" src="imagenes/cambioAceite3.png" height='200px'onclick="cambiar_imagen3('Aceite','imagenes/cambioAceite3.png','imagenes/cambioAceite4.png')" >
			<img id="Holo"   src="imagenes/holograma3.png" height='200px'onclick="cambiar_imagen4('Holo','imagenes/holograma3.png','imagenes/holograma4.png')" >
			<img id="General"src="imagenes/general3.png" height='200px'onclick="cambiar_imagen5('General','imagenes/general3.png','imagenes/general4.png')" >
		</div>
<h3 align='center' style='color: white'>Seleccione el día de su cita</h3>
<br>		
</center>
	<center>
		
		<div class="contenedor">
			<article>
				<button id="btn-abrir-popup" class="btn-abrir-popup" onclick="cargarDatos()">Enviar registro</button>
			</article>
		<form action="logica/cita.php" method="POST">
			<div class="overlay" id="overlay">
				<div class="popup" id="popup">
					<h3>Confirmar Cita</h3>
					<h4>Seleccione el dia de su cita</h4>
					<input align="center" type="date" id="fecha" name="fecha" min=<?php echo date("Y-m-d")?>>
					<br>
					
						<div class="contenedor-inputs">
							<?php while($mostrar = mysqli_fetch_array($result)){
							?>
								<label> Usuario: <?php echo $mostrar['Nombre'] ?></label><br>
							<?php	
							}
							 ?>
							

							<label> Su cita sera registrada, presione "Enviar"  para continuar</label>
						</div>
								
						<input type="hidden" id="Aruedas" name="Aruedas" value="">
						<input type="hidden" id="Afrenos" name="Afrenos" value="">
						<input type="hidden" id="Aaceite" name="Aaceite" value="">
						<input type="hidden" id="Aholograma" name="Aholograma" value="">
						<input type="hidden" id="Arevision" name="Arevision"  value="">
						<input type="submit" class="btn-submit" value="Enviar">
						<input type="button" class="btn-cerrar" value="Cancelar" id="btn-cerrar-popup">
						
					</form>
				</div>
			</div>
		</div>
		<br>
	</center>

<script src="popup.js"></script>

</body>
</html>