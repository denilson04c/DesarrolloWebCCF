function cargarContenidof(abrir) {

	fetch(abrir, {
		method: 'get'
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('cuerpo').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});
}
function cargarContenidof5(abrir) {

	fetch(abrir, {
		method: 'get'
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('bandeja').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});
}
function cargarContenidof2(abrir) {

	fetch(abrir, {
		method: 'get'
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('r2').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});
}
function preinscribir() {
	formData = new FormData();
	formData.append("datos", document.getElementById("datos").value);
	fetch('sumatoria.php', {
		method: 'post',
		body: formData
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('r2').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});


}

function limpiar(){
			//document.getElementById("form").reset();
			document.getElementById("n").value="";
			document.getElementById("c").value="";
		}