<?php
session_start();
include 'db.php';

class Customer extends DB{
	function viewDish($table){

		$query=mysqli_query($this->con,"select * from ".$table);
		
		 $data=array();
		 while($row=mysqli_fetch_array($query)){
		 	$data[]=$row;
		 }
		 return $data;
		}

	function saveData($table,$D){
		

		$query=mysqli_query($this->con,"insert into $table (customerId,mainDish) values ('".implode("','",array_values($D))."')");
		
		if($query){
			$_SESSION['success']= "Order Submited";
			//header('location:DisplayMenu.php');
		}else{
			$_SESSION['errorMsg']="Try Again";

			//header('location:DisplayMenu.php');
		}
	}
	}


$detail = new Customer();
if(isset($_POST['ordersubmit'])){
	
	//$s=$_POST['side'];
	//$sides=implode(',',$s); 
	echo $_POST["maindish"];
	echo $_SESSION['customer'];
	$data=array("customerId"=>1,"mainDish"=>$_POST["maindish"]);
	$detail->saveData("FoodOrder",$data);
//"sideDish"=>$_POST['sides']
}
?>

