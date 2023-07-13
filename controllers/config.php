<?php

	function conectar(){
		$con = new mysqli("localhost","root","","curso");
		return $con;
	}

?>
