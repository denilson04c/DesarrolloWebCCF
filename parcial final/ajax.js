function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('cuerpo');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);
}
function cargarContenido2(abrir) {
	var contenedor;
	contenedor = document.getElementById('result');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);
}
function cargarContenido3(abrir) {
	var contenedor;
	contenedor = document.getElementById('r2');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);
}

function sumatoria()
{
    var contenedor = document.getElementById('r2');
	var cadena = "datos=" + document.getElementById('datos').value;
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("POST", "sumatoria.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
	ajax.send(cadena);
}

function diagonal()
{
    var contenedor = document.getElementById('r2');
	var cadena = "texto=" + document.getElementById('texto').value;
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("POST", "diagonal.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
	ajax.send(cadena);
}

function crear(s){
		var lista=document.getElementById("opciones");
        var indiceSeleccionado = lista.selectedIndex;
        var opcionSeleccionada = lista.options[indiceSeleccionado];
        var textoSeleccionado = opcionSeleccionada.text;
        var valorSeleccionado = opcionSeleccionada.value;
        if (valorSeleccionado==1){
        document.getElementById("resultado").innerHTML+="<input type='tex' style='border:2px solid black;'><br>";
        }else{
        	document.getElementById("resultado").innerHTML+="<input type='date' style='border:2px solid black;' ><br>";
        }
        
	}