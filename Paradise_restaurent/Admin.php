<?php

include 'db.php';

class Admin extends DB{
	function saveData($table,$D){

		$query=mysqli_query($this->con,"insert into $table (Dish,Price) values ('".implode("','",array_values($D))."')");
		$query1=mysqli_query($this->con,"insert into $table (Dish,Price) values ('".implode("','",array_values($D))."')");
		if($query){
			$_SESSION['success']= "successfully save";
			header('location:addMenu.php');
		}else{
			$_SESSION['errorMsg']="not save";

			 header('location:addMenu.php');
		}
		if($query1){
			$_SESSION['success']= "successfully save";
			header('location:AddSlideMenu.php');
		}else{
			$_SESSION['errorMsg']="not save";

			 header('location:AddSlideMenu.php');
		}
	}

	function famousMainDish($table){

		$query=mysqli_query($this->con,"SELECT mainDish ,COUNT(mainDish) FROM `foodorder` GROUP BY mainDish ORDER BY mainDish DESC");
		
		 $data=array();
		 while($row=mysqli_fetch_array($query)){
		 	$data[]=$row;
		 }
		 return $data;
		}

	function famousSideDish($table){

		$query=mysqli_query($this->con,"SELECT sideDish ,COUNT(sideDish) FROM `foodorder` GROUP BY sideDish ORDER BY sideDish DESC");
		
		 $data=array();
		 while($row=mysqli_fetch_array($query)){
		 	$data[]=$row;
		 }
		 return $data;
		}
	
	function MainRevenue($table){

		$result = mysqli_query($this->con,"SELECT maindish.Price,foodorder.mainDish ,foodorder.OrderDate AS date from maindish INNER JOIN foodorder ON foodorder.mainDish = maindish.Dish "); 
		
		
		$qty=0;
		$data=array();
		while($row=mysqli_fetch_array($query)){
		 	$data[]=$row;
		 	$qty += $num['maindish.Price'];
		 }
		 return $qty;
		}

	function display($table){
		$result=mysqli_query($this->con,"Select * from foodorder where OrderComplete=0");
			$data=array();
			while($row=mysqli_fetch_array($result)){
				$data[]=$row;
			}
			return $data;

	}



	
}




$detail = new Admin();
if(isset($_POST['SaveMain'])){
	

	$data=array("Dish"=>$_POST["dish"],"Price"=>$_POST["price"]);

	$detail->saveData("maindish",$data);

}

if(isset($_POST['SaveSlide'])){
	

	$data=array("Dish"=>$_POST["dish"],"Price"=>$_POST["price"]);

	$detail->saveData("sidedish",$data);

}


?>

