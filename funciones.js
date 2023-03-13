//funcion para hide o unhide los formularios
function getOption() {
	var e = document.getElementById("optionSelect");
	var value = e.value;

	switch (value) {
		case "1": 
			document.getElementById('Aceleracion').hidden = false;
			document.getElementById('Fuerza').hidden = true;
			document.getElementById('Masa').hidden = true;
			break;
		case "2": 
			document.getElementById('Aceleracion').hidden = true;
			document.getElementById('Fuerza').hidden = false;
			document.getElementById('Masa').hidden = true;
			break;
		case "3": 
			document.getElementById('Aceleracion').hidden = true;
			document.getElementById('Fuerza').hidden = true;
			document.getElementById('Masa').hidden = false;
			break;
	}
}

function selectedSistemaDeUnidades() {
	var e = document.getElementById("optionSistema");
	var value = e.value;

	switch (value) {
	case "0": //1 para sistema internacional
		document.getElementById('sistema1').value = "0";
		document.getElementById('sistema2').value = "0";
		document.getElementById('sistema3').value = "0";
		document.getElementById('masa1').hidden =  false;
		document.getElementById('masa2').hidden =  false;
		document.getElementById('aceleracion1').hidden =  false;
		document.getElementById('aceleracion2').hidden =  false;
		alert("Fuerza: N \nAceleracion: m/s² \nMasa: Kg");
		break;
	case "1": //2 para sistema ingles
		document.getElementById('sistema1').value = "1";
		document.getElementById('sistema2').value = "1";
		document.getElementById('sistema3').value = "1";
		document.getElementById('masa1').hidden =  true;
		document.getElementById('masa2').hidden =  true;
		document.getElementById('aceleracion1').hidden =  true;
		document.getElementById('aceleracion2').hidden =  true;
		alert("Fuerza: lb \nAceleracion: ft/s² \nMasa: slug");

		break;
	}
}