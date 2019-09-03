<?php
session_start();
$_SESSION['customer']=1;
include 'Customer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<div class="sm-col-12">
 
<body>
      <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">EatWell</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="aboutus.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="DisplayMenu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="addMenu.php" class="nav-link">AddMainDish</a></li>
            <li class="nav-item"><a href="addSlideMenu.php" class="nav-link">AddSideDish</a></li>
            <li class="nav-item"><a href="summery.php" class="nav-link">Summery</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
 

	<div class="container" >
     <div class="row" style="background:gray" >
    <h3>&nbsp;&nbsp;Order Your Food</h3></div>
<br>
	<br>

<div style="margin-left:10cm">
<?php
if(!empty($_SESSION['success'])){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong><?php echo $_SESSION['success']; ?></strong></span>
</div>
<?php
unset($_SESSION['success']);
}
?>
<?php
if(!empty($_SESSION['errorMsg'])){
?>

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

<strong><?php echo $_SESSION['errorMsg']; ?></strong></span>
</div>
<?php
unset($_SESSION['errorMsg']);
}
?>
<div class="sm-col-6">

<h3>Main Dishes</h3>

<table class="table table-dark" style="width:15cm;">
  <th>Number</th>
  <th>Main Dish</th>
  <th>Price (Rs)</th>
  <th>Order</th>
<form action="Customer.php" method="post" class="form-horizontal" class="col-md-6">
  <br>
<?php
$dish=$detail->viewDish("maindish");
foreach ($dish as $key => $row) {
  $_SESSION['mid']=$row['Dish'];

  ?>
  
 <tr>
 <td><?php echo $row['Mid']?></td>;
 <td><?php echo $row['Dish']?></td>;
 <td><?php echo $row['Price']?></td>;
<td><input type="radio" class="success" name="maindish" value="<?php echo $row["Dish"];?>"></td>
 </tr>;
 <?php
}
?>
</table>
</div>
<br><br>

<div class="sm-col-6">
<h3>Side Dishes</h3>
<table class="table table-dark" style="width:15cm;">
  <th>Number</th>
  <th>Main Dish</th>
  <th>Price (Rs)</th>
  <th>Order</th>
  <?php
$dish=$detail->viewDish("sidedish");
foreach ($dish as $key => $row) {
  ?>
 <tr>
 <td><?php echo $row['id']?></td>;
 <td><?php echo $row['Dish']?></td>;
 <td><?php echo $row['Price']?></td>;
<td><input type="checkbox" name="side[]" value="$row['id']"></td>
 </tr>;
 <?php
}
?>
</table>
</div>
<br>
<button type="submit" class="btn btn-primary btn-large" name="ordersubmit" class="btn btn-primary"><span class="glyphicon glyphicon-save">Order Submit</button>

</form>

</div></div>
</body>
<script src="jss/jquery-3.2.1.min.js"></script>
<script src="jss/bootstrap.min.js"></script>
<script src="jss/jquery.form-validator.min.js"></script>
    <script>
  $.validate({
    lang: 'en'
  });
</script>
</html>