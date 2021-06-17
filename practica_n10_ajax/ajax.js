$(document).ready(function(){
	$("#crear").click(function(){
		$("#contenido").load("formulario.php");
	}); 
});

$(document).ready(function(){
	$("#cargar").click(function(){
		$("#contenido").load("peticion.php");
	}); 
});

$(document).ready(function(){
	$("#imagen").click(function(){
		$("#contenido").load("#contenido");
	}); 
});
