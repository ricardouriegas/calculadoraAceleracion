<?php  
	
	//funcion para imprimir el resultado
	function imprimirResultado($resultado, $sistema){
		echo (
		'<p align="center">
			<input style="color: ghostwhite;" id="resultado" type="text" 
			value='); 
		echo $resultado;
		echo "&nbsp;";
		echo $sistema;
		echo('
			disabled>
		</p>');
	}

	// transforma a sistema internacional el valor
	function masaValorInternacional($valor) {
		switch ($_POST['masaSistema']) {
			case 'kilogramo':
				return $valor;
				break;
			case 'gramo':
				return ($valor * 1e-3);
				break;
			case 'miligramo':
				return ($valor * 1e-6);
				break;
			default:
				echo("No manches kiko masa");
				break;
		}
	}

	function aceleracionValorInternacional($valor)
	{
		switch ($_POST['aceleracionSistema']) {
			case 'km/s²':
				return ($valor * 1e3);
				break;
			case 'm/s²':
				return $valor;
				break;
			case 'cm/s²':
				return ($valor * 1e-2);
				break;
			default:
				echo("No manches kiko aceleracion");
				break;
		}
	}


	//definicion de las formulas
	function fuerza($aceleracion, $masa) {return($masa * $aceleracion);}
	function masa($aceleracion, $fuerza) {return($fuerza / $aceleracion);}
	function aceleracion($fuerza, $masa) {return($fuerza / $masa);}
	
	
?>