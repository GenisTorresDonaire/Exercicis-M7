<html>
	<head>
		<title>Calendari M7</title>
		<link rel="stylesheet" href="css.css">
		<meta charset="utf-8">
	</head>

	<body>
		<h1>CALENDARI DE M7</h1>

		<?php
			$Mes = date("n");
			$Año = date("Y");
			$Dia = date("j");
			$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

			$DiaSemana=date("w",mktime(0,0,0,$Mes,1,$Año))+7;
			$finalmes=date("d",(mktime(0,0,0,$Mes+1,1,$Año)-1));
		?>

		<table id="Calendario">
			<caption><?php echo $meses[$Mes]." ".$Año?></caption>
			<tr>
				<th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th><th>Domingo</th>
			</tr>
			
			<tr bgcolor="silver"> 
				<?php
					$ultimacelda = $finalmes + $DiaSemana;

					for ($n = 1, $n <= 36, $n++){
						for ( $n == $DiaSemana){
							$Dia = 1;
						}
					}

				?>

			</tr>
			
		</table>
			





	</body>
</html>