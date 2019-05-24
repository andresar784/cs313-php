<?php
require_once('bd.php');
$db = DB::init();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Company</title>
  <script type="text/javascript" src="js.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">
 
</head>
<body>




<div class="jumbotron">
  <div class="container text-center">
	<h1>Star Bus<h1>
    <h3>Buy your ticket now</h3>      
    </div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="index.php">Products</a></li>
        </ul>
		<ul class="nav navbar-nav navbar-right">
	  <li><a href="process.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
		</ul>
    </div>
  </div>
</nav>

<div class="container"> 
	<div class="p-3 text-white text-center">
		<div class="col-xs-6">
		<div class="form-group">
			<label for="exampleFormControlSelect1">From:</label>
			<select class="form-control" id="exampleFormControlSelect1">
					<option><?php echo $name[1]?></option>
					<option><?php echo $name[2]?></option>
					<option><?php echo $name[3]?></option>
					<option><?php echo $name[4]?></option>
					<option><?php echo $name[5]?></option>
				</select>
				
		</div>
		</div>
		<div class="col-xs-6">
		<div class="form-group">
			<label for="exampleFormControlSelect1">To:</label>
				<select class="form-control" id="exampleFormControlSelect2">
					<option><?php echo $name[1]?></option>
					<option><?php echo $name[2]?></option>
					<option><?php echo $name[3]?></option>
					<option><?php echo $name[4]?></option>
					<option><?php echo $name[5]?></option>
			</select>
		</div>
		</div>
		<div class="col-xs-2">
		<div class="form-group">
			<label for="exampleFormControlSelect1">How many tickets:</label>
				<select class="form-control" id="exampleFormControlSelect2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
		</div>
		</div>
			
	</div>
	</div>
<footer class="container-fluid text-center">
  <p>Online Store Copyright 2018 - <?php echo date(Y)?></p>  
</footer>

</body>
</html>
