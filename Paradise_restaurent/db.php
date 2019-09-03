<?php

class DB{
	public $con;

	function __construct(){

$this->con=mysqli_connect("localhost","root","","paradiserestaurant");
	if($this->con){

		

	}else{
		echo "Error";
	}
}
	
}
$object = new DB();


?>