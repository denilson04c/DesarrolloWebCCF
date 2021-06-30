function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
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
function suma(){
	var cantidad=parseInt(document.getElementById('cantidad').value);
	
	for(var i=0;i<cantidad;i++){
		var input=document.getElementById('inputs');
		input.innerHTML+="<input type='number' id='n"+i+"' style='border:2px solid black;' name='ninput'><br><br>";
		//document.getElementById('n[i]').style.border="2px solid black";
	}
}
function sumar(){
	var cantidad=parseInt(document.getElementById('cantidad').value);
	var ninput=document.getElementsByName("ninput");
	var aux=0;
	for (var i = 0; i < ninput.length; i++) {
		aux=parseInt(ninput[i].value)+aux;
	}
	document.getElementById('resultado').innerHTML=aux;
	
}