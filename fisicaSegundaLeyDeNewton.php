<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Segunda ley de Newton</title>
	<link rel="stylesheet" type="text/css" href="design.css">
	<script type="text/javascript" src="funciones.js"></script>
</head>

<body>
	<br>
	<h1 align="center">¿Qué Desea Obtener?</h1>
	
	<!-- Opciones a seleccionar -->
	<div align="center" >
		<select id="optionSelect" onchange="getOption()">
			<option disabled selected>Seleccionar Opcion</option>
			<option value="1">Aceleracion</option>
			<option value="2">Fuerza</option>
			<option value="3">Masa</option>
		</select>
	</div>
	<br>
	<!-- sistema seleccionado -->
	<div align="center">
		<select id="optionSistema" 
			onchange="selectedSistemaDeUnidades()">
			<option value="0" selected>Sistema Internacional</option>
			<option value="1">Sistema Ingles</option>
		</select>
	</div>

	<form align="center" id="Masa" action="fisicaSegundaLeyDeNewton.php" 
	method="post" hidden>
		<p align="center">
			<hr><br>
			<input type="number" name="sistema" id="sistema1" value="0" hidden>
			<!-- Obtener datos para la masa -->
			<input type="number" step="any" name="fuerza" placeholder="Fuerza" 
				required> 
			<br><br>
			<input type="number" step="any" name="aceleracion" 
				placeholder="Aceleracion" required>
			<select name="aceleracionSistema" id="aceleracion1" 
												class="littleSelect"> 
				<option>km/s²</option>
				<option selected>m/s²</option>
				<option>cm/s²</option>
			</select>
			<br><br>

			<button class="glow-on-hover" type="submit">Calcular</button>
		</p>
	</form>

	<form align="center" id="Aceleracion" action="fisicaSegundaLeyDeNewton.php" 
	method="post" hidden>
		<p align="center">
			<hr><br>
			<input type="number" name="sistema" id="sistema2" value="0" hidden>
			
			<!-- Obtener datos para la aceleracion-->
			<input type="number" name="fuerza" placeholder="Fuerza" required
			class="entradas" step="any">
			<!-- Para fuerza solo hay newtons -->

			<br><br>
			<input type="number" step="any" name="masa" placeholder="Masa" 
				required>
			<select name="masaSistema" id="masa1" class="littleSelect"> 
				<option selected>kilogramo</option>
				<option>gramo</option>
				<option>miligramo</option>
			</select>
			

			<br><br>
			<button class="glow-on-hover" type="submit">Calcular</button>
		</p>
	</form>

	<form align="center" id="Fuerza" action="fisicaSegundaLeyDeNewton.php" 
	method="post" hidden>
		<p align="center">
			<hr><br>
			<input type="number" name="sistema" id="sistema3" value="0" hidden>
			<!-- Obtener datos para la fuerza -->
			<input type="number" step="any" name="masa" placeholder="Masa" 
				required>
			<select name="masaSistema" id="masa2" class="littleSelect"> 
				<option selected>kilogramo</option>
				<option>gramo</option>
				<option>miligramo</option>
			</select>
			<br><br>

			<input type="number" step="any" name="aceleracion" 
				placeholder="Aceleracion" required>
			<select name="aceleracionSistema" id="aceleracion2" 
												class="littleSelect"> 
				<option>km/s²</option>
				<option selected>m/s²</option>
				<option>cm/s²</option>
			</select>

			<br><br>
			<button class="glow-on-hover" type="submit">Calcular</button>
		</p>
	</form>

	<?php
		include 'funciones.php';

		//// obtener fuerza ////
		if (isset($_POST['aceleracion']) && isset($_POST['masa']) 
				&& $_POST['sistema'] == "0") {
			// sistema internacional
			$aceleracion = aceleracionValorInternacional($_POST['aceleracion']);
			$masa = masaValorInternacional($_POST['masa']);
			$resultado = fuerza($aceleracion, $masa);
			imprimirResultado($resultado, "N");

		} else if (isset($_POST['aceleracion']) && isset($_POST['masa'])) {
			// sistema ingles
			$resultado = fuerza($_POST['aceleracion'], $_POST['masa']);
			imprimirResultado($resultado, "lb");
		}

		//// obtener masa ////
		if (isset($_POST['aceleracion']) && isset($_POST['fuerza'])
				&& $_POST['sistema'] == "0") {
			// sistema internacional
			$aceleracion = aceleracionValorInternacional($_POST['aceleracion']);	
			$resultado = masa($aceleracion, $_POST['fuerza']);			
			imprimirResultado($resultado, "Kg");

		} else if (isset($_POST['aceleracion']) && isset($_POST['fuerza'])) {
			// sistema ingles
			$resultado = masa($_POST['aceleracion'], $_POST['fuerza']);
			imprimirResultado($resultado, "lb");
		}

		//// obtener aceleracion ////
		if (isset($_POST['fuerza']) && isset($_POST['masa']) 
				&& $_POST['sistema'] == "0") {
			// sistema internacional
			$masa = masaValorInternacional($_POST['masa']);

			$resultado = aceleracion($_POST['fuerza'], $masa);
			imprimirResultado($resultado, "m/s²");

		} else if (isset($_POST['fuerza']) && isset($_POST['masa'])) {
			//sistema ingles
			$resultado = masa($_POST['fuerza'], $_POST['masa']);
			imprimirResultado($resultado, "ft/s²");

		}

				
	
	?>
</body>
</html>