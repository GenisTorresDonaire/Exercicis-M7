<html>
	<head>
		<title>Calendari M7</title>
		<link rel="stylesheet" href="css.css">
		<meta charset="utf-8">
	</head>

	<body>
		<h1>CALENDARI DE M7</h1>

		<?php
			$mes = date("n");
			$año = date("Y");
			$diaActual = date("j");
			$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		?>

		<table id="Calendario" border="1">
			<caption><?php echo $meses[$mes]." ".$año?></caption>
			<tr>
				<th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th><th>Domingo</th>
			</tr>
			
		</table>
			





	</body>
</html>