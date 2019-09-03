<?php
session_start();
include'Admin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add request</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<div class="sm-col-12">
 
<body>
	<div class="container">
	<br>

<br>


<div style="margin-left:6cm">

<h3>Main Dish Summery</h3>

<table class="table table-dark" style="width:15cm;">
  <th>Dish</th>
  <th>Amount</th>
<?php
$dish=$detail->famousMainDish("foodorder");
foreach ($dish as $key => $row) {
 

  ?>
 <tr>
 
 <td><?php echo $row['mainDish']?></td>;
 <td><?php echo $row['COUNT(mainDish)']?></td>;

 </tr>;
 <?php
}
?>

</table>
</div>

<div style="margin-left:6cm">

<h3>Side Dish Summery</h3>

<table class="table table-dark" style="width:15cm;">
  <th>Dish</th>
  <th>Amount</th>
<?php
$dish=$detail->famousSideDish("foodorder");
foreach ($dish as $key => $row) {
 

  ?>
 <tr>
 
 <td><?php echo $row['sideDish']?></td>;
 <td><?php echo $row['COUNT(sideDish)']?></td>;

 </tr>;
 <?php
}
?>

</table>
<div style="width:15cm">
  <h3>Side Dish Summery</h3>
  <?php
$dish=$detail->MainRevenue();
 echo $detail->MainRevenue()?>;


  </div>
</div>
 




</div></div>
</body>


</html>