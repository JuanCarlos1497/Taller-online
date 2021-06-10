<!DOCTYPE html>
<html>
<head>
	<title>Servicios</title>
	<style type="text/css">
		
	</style>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart(){
            var data = google.visualization.arrayToDataTable([
                    ["Servicio","Precio"],
                    ['Alineación de llantas',450],
                    ['Frenos',598],
                    ['Cambio de aceite', 3200],
                    ['Holograma',434 ],
                    ['Revision General', 150 ]
                ]);
            var option = {
                title: 'Estadiasticas precios año: 2020',
                backgroundColor: '#F6DDCC',
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data,option);            
        }
    </script>
	<link rel="stylesheet" href="estilos.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php 
	require 'logica/conexion.php';
	session_start();
	$Nusuario = $_SESSION['username'];
?>

<div id='fondo1'>
		<h1 align='center' style='color: white'>-- Reoportes --</h1>
		<p align='right' style='margin-right: 20px' style='color: white'><FONT SIZE=5><a href='logica/salir.php'>Log out</a></FONT></p>

	<div>
		<table>
			<tr>
				<th><a title='Home' href='paginaprincipal.php'><img style = 'margin-right: 150px; margin-left: 50px;' src='imagenes/Home.png' alt='Logo' height='50px'></a>
			</tr>
		</table>
	</div>				
</div>
<br>
<h2 align="center">Precio de los servicios</h2>
    <div id="piechart_3d" style="width: 100%; height: 300px;"></div>

	<center>
		
		<div class="contenedor">
			<article>
				<button id="btn-abrir-popup" class="btn-abrir-popup">Generar reporte</button>
			</article>
		<form action="logica/reporte.php" method="POST">
			<div class="overlay" id="overlay">
				<div class="popup" id="popup">
					<h3>Reportes de ventas</h3>
					<h4>Seleccione el dia a consultar</h4>
					<input align="center" type="date" id="fecha" name="fecha">
					<br>
						<div class="contenedor-inputs">
							

							<label> El reporte se generará automaticamente presione "Enviar"  para continuar</label>
						</div>
								
						<input type="submit" class="create_pdf" value="Enviar">
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