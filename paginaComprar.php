<!DOCTYPE html>
<html>
<head>
	<title>Elige el auto de tus sueños</title>
	<style >
		#fondo1{
			background-image: url('imagenes/fondo19.jpg');
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
   			-o-background-size: cover;
   			height: 100%;
  			width: 100% ;
		}
		.all-cars {
  			margin: 0;
  			padding: 5px;
  		background-color: lightgray;
		}
		.car{
			height: 100%;
			width: 100%;
		}

	</style>
	<meta charset="utf-8">
</head>
<body>
<?php 
	require 'logica/conexion.php';
	session_start();


	$query = "SELECT * FROM vehiculos";
	$result = mysqli_query($conexion,$query) or die('Error en la consulta' . mysql_error());

?>

<div id='fondo1'>
		<h1 align='center' style='color: white'>Elige el vehiculo de tus sueños </h1>
		<p align='right' style='margin-right: 20px' style='color: white'><FONT SIZE=5><a href='logica/salir.php'>Log out</a></FONT></p>

		<div>
		<table>
			<tr>
				<th><a title='home' href='paginaprincipal.php'><img style = 'margin-right: 150px; margin-left: 50px;' src='imagenes/home.png' alt='Logo' height='50px'></a>
					<td><a title='Servicios' href='paginaServicios.php'><img style = 'margin-right: 150px;' src='imagenes/LogoBN.png' alt='Logo' height='50px'></a>
					<td><a title='Contactanos' href='paginaprincipal.php#contacto'><img src='imagenes/contacto.png' alt='icon' height='50px'></a>
			</tr>
		</table>
	</div>				
	</div>

<div class="car">
	<center>
		<h1> Inventario de Autos </h1>		
	</center>



<?php 
	while($mostrar = mysqli_fetch_array($result)){
 ?>

	<article class="all-cars">
		<div><h1>Modelo: <?php echo $mostrar['modelo'] ?></h1></div>
		<article >
			<ul>
				<img style="margin-bottom: 30px;" src=<?php echo $mostrar['imagen'] ?> height='200px' align="right" >
				<li><label>Marca: <?php echo $mostrar['marca'] ?></label></li>
				<li><label>Año: <?php echo $mostrar['anio'] ?></label></li>
				<li><label>Color: <?php echo $mostrar['color'] ?></label></li>
				<li><label>Puertas: <?php echo $mostrar['puertas'] ?></label></li>
				<li><label>Motor: <?php echo $mostrar['motor'] ?></label></li>
				<li><label>Trasmision: <?php echo $mostrar['transmision'] ?></label></li>
				<p>Descripcion: <?php echo $mostrar['descripcion'] ?></p>
				<h2 align="right">Precio: $ <?php echo $mostrar['precio'] ?></h2>
			</ul>
		</article>
	</article>
	<br>


<?php 

	}
 ?>
</div>

<p align='center' style='margin-right: 20px; margin-bottom: 25px' style='color: white'><FONT SIZE=5>Para más informacion sobre los vehículos contactenos a través de nuestro correo electronico out-mobillis@gmail.com <br> Informes sobre su proveedor más cercano</FONT></p>


</body>
</html>