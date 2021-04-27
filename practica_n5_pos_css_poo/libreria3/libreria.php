<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class Estante{
	private $filas=array();
	private $tope;
	private $entero;
	function __construct($enteros){
		$this->entero=$enteros;
		$this->tope=0;
	}
	function insertar($fila){
		if ($this->tope==$this->entero){
			echo "la fila esta llena";
		}else{
			$this->filas[$this->tope]=$fila;
			$this->tope++;
		}
	}
	function eliminar(){
		if ($this->tope==0){
			return "la fila esta vacia";
		}else{
			$aux=$this->filas[$this->tope];
			$this->tope--;
			return $aux;
		}
	}

	function mostrar(){
		for ($i=0;$i<$this->tope;$i++){
			echo $this->filas[$i]."<br>";
		}
		if ($this->tope==$this->entero) {
			echo "la fila esta llena";
		}else{
			$this->filas[$this->tope]=$fila;
			$this->tope++;
		}
	}

}


?>
</body>
</html>