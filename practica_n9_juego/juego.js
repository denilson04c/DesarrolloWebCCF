function iniciar(){
	var palabras=["eucalipto","auto","internet","casa","perro","cuaderno","computadora","naranja","juego","cabello"];
	var palabra=palabras[Math.floor(Math.random()*10)];
	var n=palabras.length;
	var e=espacios(n);
	document.getElementById("letras").innerHTML=e;
	document.getElementById("boton").style.visibility="hidden";
	console.log(palabra);
	var error=0;
}

function espacios(n){
	var aux="";
	for(var i=0;i<n;i++){
		aux+=('<input type="text" id="l'+i+'"class="caja" maxlength="1" readonly>');
	}
	return aux;
}

function verificar(){
	var l=document.getElementById('l').value;
	console.log(palabra);
	var acerto=false;
	for ( i = 0; i < palabra.length; i++) {
		console.log(i);
		if (palabra[i]==l) {
			acerto=true;
			alert(l);
			v="l"+i;
			console.log(document.getElementById(v));
			document.getElementById(v).value=l;
		}
	}
	if (!acerto) {
		error++;
		alert(error);
		document.getElementById('imagen').src="images//"+error+".png";
		
	}
}