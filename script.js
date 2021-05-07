/*


//variable y sentencia para utilizar en caso de que se cancele la encuesta


nombre = 'Dato no suministrado'
	pregunta1 = 'Dato no suministrado'
	pregunta2 = 'Dato no suministrado'
	pregunta3 = 'Dato no suministrado'
	pregunta4 = 'Dato no suministrado'
	pregunta5 = 'Dato no suministrado'

function realizarEncuesta() {
	
	aceptar = confirm('Bienvenido, le invitamos a realizar una breve encuesta. \n Presiona  "cancelar" para omitir y continuar con el sitio.')
	cancelada = ""
	if (aceptar !== true) {
		cancelada = 'Nos interesa tu opinión, actualiza el sitio web para realizar la encuesta.'
	} else {
		cancelada = 'Tus respuestas fueron:'
	}

	//#########################################################################

	//sentencia a utilizar en caso que acepte la encuesta (debe llenar si o si los campos)

	if (aceptar) {
		do {
			nombre = prompt('Ingrese su nombre')
		}
		while (nombre == '')
		if (nombre == null) { // por si acepta la encuesta pero cancela una pregunta (no aparezca null en variable vacia)
			nombre = 'No completaste éste campo'
		}

		do {
			pregunta1 = prompt('Hola ' + nombre + ', ¿Cómo conociste a Filetto Pastas Artesanales?')
		} while (pregunta1 == '')
		if (pregunta1 == null) { // por si acepta la encuesta pero cancela una pregunta (no aparezca null en variable vacia)
			pregunta1 = 'No completaste éste campo'
		}

		do {
			pregunta2 = prompt('¿Recomendarías a un conocido Filetto Pastas Artesanales?')
		} while (pregunta2 == '')
		if (pregunta2 == null) { // por si acepta la encuesta pero cancela una pregunta (no aparezca null en variable vacia)
			pregunta2 = 'No completaste éste campo'
		}

		do {
			pregunta3 = prompt('¿Qué menú te gustaría que incorporemos?')
		} while (pregunta3 == '')
		if (pregunta3 == null) { // por si acepta la encuesta pero cancela una pregunta (no aparezca null en variable vacia)
			pregunta3 = 'No completaste éste campo'
		}

		do {
			pregunta4 = prompt('¿Cómo calificas nuestro servicio de catering?')
		} while (pregunta4 == '')
		if (pregunta4 == null) { // por si acepta la encuesta pero cancela una pregunta (no aparezca null en variable vacia)
			pregunta4 = 'No completaste éste campo'
		}

		do {
			pregunta5 = prompt('¿Nos sigues en las redes sociales?')
		} while (pregunta5 == '')
		if (pregunta5 == null) {  // por si acepta la encuesta pero cancela una pregunta (no aparezca null en variable vacia)
			pregunta5 = 'No completaste éste campo'
		}

	} else {
		alert('Encuesta cancelada')
		nombre = 'Dato no suministrado'
		pregunta1 = 'Dato no suministrado'
		pregunta2 = 'Dato no suministrado'
		pregunta3 = 'Dato no suministrado'
		pregunta4 = 'Dato no suministrado'
		pregunta5 = 'Dato no suministrado'
	}


}


*/

