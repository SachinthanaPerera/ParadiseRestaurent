<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add request</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<div class="sm-col-12">
 
<body>
	<div class="container">
	<br>
<div class="row" style="background:gray">
<h3>&nbsp;&nbsp;Add Side Menu</h3></div>
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
<button type="submit" name="SaveSlide" class="btn btn-primary"><span class="glyphicon glyphicon-save">Save</button>
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