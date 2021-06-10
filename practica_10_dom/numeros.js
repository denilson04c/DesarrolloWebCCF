function aritmetica(){
	var ejercicio=document.getElementById('option').value;
	var a=Number(document.getElementById('a').value);
	var b=Number(document.getElementById('b').value);
	console.log(ejercicio);
	console.log(a);
	console.log(b);
	if (ejercicio=="Suma") {
		document.getElementById('resultado').innerHTML=(a+b);
	}
	if (ejercicio=="Resta") {
		document.getElementById('resultado').innerHTML=(a-b);
	}
	if (ejercicio=="Multiplicación") {
		document.getElementById('resultado').innerHTML=(a*b);
	}
	if (ejercicio=="División") {
		document.getElementById('resultado').innerHTML=(a/b);
	}
}