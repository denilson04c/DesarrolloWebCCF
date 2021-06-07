	//1,5,6 dos resultados 1,-2,-15
	//1,2,1 una solucion
	//1,0,1 imaginaria 1,1,3
	function ecuacion(){
		var a=Number(document.getElementById('a').value);
		var b=Number(document.getElementById('b').value);
		var c=Number(document.getElementById('c').value);
		
	document.getElementById("m").innerHTML=a;
	if (b<0) {
		document.getElementById("n").innerHTML=(""+b);
	}else{
		document.getElementById("n").innerHTML=("+"+b);
	}
	if (c<0) {
		document.getElementById("o").innerHTML=(""+c);
	}else{
		document.getElementById("o").innerHTML=("+"+c);
	}
	
		var fgeneral=b**2-4*a*c;
		if (fgeneral==0){
			var x1=(-b)/(2*a);
			document.getElementById("r1").innerHTML=("x1="+x1);
			document.getElementById("r2").innerHTML=("x2="+x1);	
		}
		if (fgeneral>0){
			var x1=(-b+Math.sqrt(fgeneral))/(2*a);
			var x2=(-b-Math.sqrt(fgeneral))/(2*a);
			document.getElementById("r1").innerHTML=("x1="+x1);
			document.getElementById("r2").innerHTML=("x2="+x2);
		}
		if (fgeneral<0){
			var x1=(-b)/(2*a);
			var x2=(-b)/(2*a);
			var i1=(Math.sqrt(Math.abs(fgeneral)))/(2*a);
			var i2=(Math.sqrt(Math.abs(fgeneral)))/(2*a);
			document.getElementById("r1").innerHTML=("x1="+x1+"+"+i1+"i");
			document.getElementById("r2").innerHTML=("x2="+x1+"-"+i2+"i");
		}
	}
