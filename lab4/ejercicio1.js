function literal(n){
	if (n<=15) {
		quincena(n);
	}
	else{
		decimos(n);
	}

}
	function quincena(n){
		if (n==0) {
			document.writeln("cero");
		}
		if (n==1) {
			document.writeln("uno");

		}
		if (n==2) {
			document.writeln("dos");
		}
		if (n==3) {
			document.writeln("tres");
		}
		if (n==4) {
			document.writeln("cuatro");
		}
		if (n==5) {
			document.writeln("cinco");
		}
		if (n==6) {
			document.writeln("seis");
		}
		if (n==7) {
			document.writeln("siete");
		}
		if (n==8) {
			document.writeln("ocho");
			
		}
		if (n==9) {
			document.writeln("nueve");
		}
		if (n==10) {
			document.writeln("diez");
		}
		if (n==11) {
			document.writeln("once");
		}
		if (n==12) {
			document.writeln("doce");
		}
		if (n==13) {
			document.writeln("trece");
		}
		if (n==14) {
			document.writeln("catorce");
		}
		if (n==15) {
			document.writeln("quince");
	    }
	}
	function unidad(n){
		if (n==1) {
			document.writeln("uno");

		}
		if (n==2) {
			document.writeln("dos");
		}
		if (n==3) {
			document.writeln("tres");
		}
		if (n==4) {
			document.writeln("cuatro");
		}
		if (n==5) {
			document.writeln("cinco");
		}
		if (n==6) {
			document.writeln("seis");
		}
		if (n==7) {
			document.writeln("siete");
		}
		if (n==8) {
			document.writeln("ocho");
			
		}
		if (n==9) {
			document.writeln("nueve");
		}
	return n;
	}
	function decimos(n){
		u=n%10;
		if (n>=16 && n<=19) {
			document.writeln("diez y ");
			unidad(u);
		}
		if (n==20) {
			document.writeln("veinte");
		}
		if (n>=21 && n<=29) {
			document.writeln("veinti");
			unidad(u);
		}
		if (n==30) {
			document.writeln("treinta");
		}
		if (n>=31 && n<=39) {
			document.writeln("treinta y ");
			unidad(u);
		}
		if (n==40) {
			document.writeln("cuarenta");
		}
		if (n>=41 && n<=49) {
			document.writeln("cuarenta y ");
			unidad(u);
		}
		if (n==50) {
			document.writeln("cincuenta");
		}
		if (n>=51 && n<=59) {
			document.writeln("cincuenta y ");
			unidad(u);
		}
		if (n==60) {
			document.writeln("sesenta");
		}
		if (n>=61 && n<=69) {
			document.writeln("sesenta y ");
			unidad(u);
		}
		if (n==70) {
			document.writeln("setenta");
		}
		if (n>=71 && n<=79) {
			document.writeln("setenta y ");
			unidad(u);
		}
		if (n==80) {
			document.writeln("ochenta");
		}
		if (n>=81 && n<=89) {
			document.writeln("ochenta y ");
			unidad(u);
		}
		if (n==90) {
			document.writeln("noventa");
		}
		if (n>=91 && n<=99) {
			document.writeln("noventa y ");
			unidad(u);
		}
		if (n==100) {
			document.writeln("cien");
		}
		if (n>100) {
			document.writeln("el numero es mayor a cien");
		}
		
	}
	