<?php
require_once('bd.php');
$db = DB::init();

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Company</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">

</head>
<body>

<?php
	$statement = $db->prepare("SELECT placeid, name FROM place");
	$statement->execute();
	$place_name = array();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
		$place_name[$row['placeid']] = $row['name'];
	}

?>


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
        </ul>
		<ul class="nav navbar-nav navbar-right">
	  
		</ul>
    </div>
  </div>
</nav>
<form action="confirmation.php" method="post">
<div class="container">
	<div class="p-3 text-white text-center">
		<div class="col-xs-6">
		<div class="form-group">
			<label>From:</label>
			<select  class="form-control">
					<option name="from" value="Montevideo"><?php echo $place_name[1]?></option>
					<option name="from" value="Durazno"><?php echo $place_name[2]?></option>
					<option name="from" value="Paso de los Toros"><?php echo $place_name[3]?></option>
					<option name="from" value="Tacuarembo"><?php echo $place_name[4]?></option>
					<option name="from" value="Rivera"><?php echo $place_name[5]?></option>
				</select>

		</div>
		</div>
		<div class="col-xs-6">
		<div class="form-group">
			<label >To:</label>
				<select class="form-control">
					<option name="to" value="Montevideo" ><?php echo $place_name[1]?></option>
					<option name="to" value="Durazno"><?php echo $place_name[2]?></option>
					<option name="to" value="Paso de los Toros"><?php echo $place_name[3]?></option>
					<option name="to" value="Tacuarembo"><?php echo $place_name[4]?></option>
					<option name="to" value="Rivera" ><?php echo $place_name[5]?></option>
			</select>
		</div>
		</div>
		<div class="col-xs-2">
		<div class="form-group">
			<label>How many tickets:</label>
				<select class="form-control" id="exampleFormControlSelect2">
					<option name="quantity" value="1">1</option>
					<option name="quantity" value="2">2</option>
					<option name="quantity" value="3">3</option>
					<option name="quantity" value="4">4</option>
					<option name="quantity" value="5">5</option>
				</select>
		</div>
	</div>
	<button type="submit" class="btn btn-primary btn-lg"> Confirm 1/4</button>
	</div>
	
	</div>
	</form>

<footer class="container-fluid text-center">
  <p>Online Store Copyright 2018 - <?php echo date(Y)?></p>
</footer>





</body>
</html>
