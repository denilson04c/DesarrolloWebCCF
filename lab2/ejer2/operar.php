<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class operacion{
	public $a;
	public $b;
	public $c;
	function __construct($a,$b,$c){
		$this-> a= $a;
		$this-> b= $b;
		$this-> c= $c;
	}
	function get_a(){
		return $this-> a;
		
	}
	function get_b(){
		
		return $this-> b;
	}
	function get_c(){
		
		return $this-> c;
	}
}
$apple=new operacion("$_GET['a']","$_GET['b']","$_GET['b']");
echo $apple->get_a()*get_b()*get_c();
echo $apple->get_a();

?>
</body>
</html>