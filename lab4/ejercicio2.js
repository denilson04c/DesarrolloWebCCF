function seleccion(n){
	document.writeln("numeros factoriales de "+n)
		document.writeln("<select>");
		for (var i=0;i<n;i++){
			document.writeln('<option value="'+i+'">');
			//document,writeln("<p>cantidad</p>")
			document.writeln(factorial(i));
			document.writeln('</option>');
		}
		document.writeln("</select>");
	}
	
function factorial (n) {
	var total = 1; 
	for (var j=1; j<=n; j++) {
		total = total * j; 
	}
	return total; 
}