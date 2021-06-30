turno="x";
/*arreglo=document.getElementsTagName("button");
console.log(arreglo)
for(var i=0;i<arreglo.length;i++){
	arreglo[i].onlick=jugar(arreglo[i]);
}*/
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
function jugar(a){
	if (a.innerHTML=='&nbsp;') {
		a.innerHTML=turno;
		turno = turno=='x'?'o':'x';
		document.getElementById("mensaje").innerHTML="Turno de "+turno;
	}
	
}

function operacion(){
	var n=parseInt(document.getElementById('n').value);
	var operacion=document.getElementsByName("operacion");
	var m=parseInt(document.getElementById('m').value);
	var aux="";
	if (n>10 || m<1) {
		alert("ingrese un numero menor a 10 o mayor a 1");
	}else{

	for (var i = 0; i < operacion.length; i++) {
            aux+=" Elemento: " + operacion[i].value + "\n Seleccionado: " +
                operacion[i].checked+"<br>";
        }
	document.getElementById('mensaje').innerHTML="";
	//document.getElementById("mensaje").innerHTML=aux;
	if (operacion[0].checked) {
		
		for (var i = 1;i<=m; i++) {
			let linea=n+"+"+i+"=";
			let resul=n+i+"<br>";
			document.getElementById("mensaje").innerHTML+=linea+resul;
		}
	}
	if (operacion[1].checked) {
		for (var i = 1;i<=m; i++) {
			let linea=n+"-"+i+"=";
			let resul=n-i+"<br>";
			document.getElementById("mensaje").innerHTML+=linea+resul;
		}

	}
	if (operacion[2].checked) {
		for (var i = 1;i<=m; i++) {
			let linea=n+"*"+i+"=";
			let resul=n*i+"<br>";
			document.getElementById("mensaje").innerHTML+=linea+resul;
		}

	}
	if (operacion[3].checked) {
		for (var i = 1;i<=m; i++) {
			let linea=n+"/"+i+"=";
			let resul=n/i+"<br>";
			document.getElementById("mensaje").innerHTML+=linea+resul;
		}

	}
	}
	
}