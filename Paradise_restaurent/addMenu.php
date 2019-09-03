<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add request</title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<div class="sm-col-12">
 
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">
	
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
            <li class="nav-item"><a href="disOrder.php" class="nav-link">Orders</a></li>
          
          </ul>
        </div>
      </div>
    </nav>
	<br>
	<div class="container">
<div class="row" style="background:gray">
<h3>&nbsp;&nbsp;Add Main Menu</h3></div>
<br>

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

<form action="Admin.php" method="post" class="form-horizontal" >
  <br><br>
<div class="form-group">
<label class="col-md-2">Food Item</label>
<div class="col-md-8">
<input type="text" name="dish" class="form-control" data-validation="required"  data-validation-error-msg="food item field is empty">
</div>
</div>
<div class="form-group">
<label  class="col-md-2">Price</label>
<div class="col-md-8">
	<div class="input-group">
  <span class="input-group-addon">Rs.</span>
<input type="text" name="price" class="form-control" ddata-validation="length" data-validation-error-msg="please add the price"> <span class="input-group-addon">.00</span>
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-2"></label>
<div class="col-md-10">
<button type="submit" name="SaveMain" class="btn btn-primary"><span class="glyphicon glyphicon-save">Save</button>
</div>
</div>
</form>
</div></div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
    <script>
  $.validate({
    lang: 'en'
  });
</script>
</html>