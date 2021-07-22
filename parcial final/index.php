<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
<div id="cabeza">
	<img src="images/logo.png">
	<p>Carrera: Ing de Sistemas</p>
	<p>Semestre: 01/21</p>
</div>
<div style="height:400px; width: 100%;" id="contenido">
	<div id="menu" style="width:20%; background:blue; height:400px; float: left;">
		<ul class="navbar-nav  ml-auto">
            <li class="nav-item" style="cursor: pointer; color:black;">
		 <a class="nav-link" onclick="cargarContenido('pregunta1.php')"><p class="text-dark">Pregunta 1</p> </a></li>

		<li class="nav-item" style="cursor: pointer; color:black;">
		 <a class="nav-link" onclick="cargarContenido('pregunta2.html')"> <p class="text-dark">Pregunta 2</p> </a></li>
		 <li class="nav-item" style="cursor: pointer; color:black;">
		 <a class="nav-link" onclick="cargarContenido('pregunta3.html')"> <p class="text-dark">Pregunta 3</p> </a></li>
		 <li class="nav-item" style="cursor: pointer; color:black;">
		 <a class="nav-link" href='javascript:cargarContenidof("login.html")'> <p class="text-dark">Pregunta 4</p> </a></li>
		 <li class="nav-item" style="cursor: pointer; color:black;">
		 <a class="nav-link" onclick="cargarContenido('pregunta5.php')"> <p class="text-dark">Pregunta 5</p> </a></li>
	</ul>
	</div>
	
	<div id="cuerpo" style="width: 80%;border: 2px solid black; height:400px; float:right;" >
		<strong>Primer Examen de Programación Internet intranet</strong>
	</div>
</div>

<div style="clear:both; float: none;"></div>

<div id="pie" style="background: red; width:100%; height: 70px;">
	<p>Alumno:Choque Cruz Flavio Denylson</p>
	<p>CU:35-4631</p>
</div>
<script src="ajax.js"></script>
<script src="fetch.js"></script>
</body>
</html>