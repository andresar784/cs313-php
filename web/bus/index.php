<?php
require_once('bd.php');
$db = DB::init();
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
			<select class="form-control" id="selectFrom">
					<option value="Mvd"><?php echo $place_name[1]?></option>
					<option value="Dur"><?php echo $place_name[2]?></option>
					<option value="Ptr"><?php echo $place_name[3]?></option>
					<option value="Tbo"><?php echo $place_name[4]?></option>
					<option value="Rvr"><?php echo $place_name[5]?></option>
				</select>

		</div>
		</div>
		<div class="col-xs-6">
		<div class="form-group">
			<label for="exampleFormControlSelect1">To:</label>
				<select class="form-control" id="selectTo">
					<option id="t1" ><?php echo $place_name[1]?></option>
					<option id="t2"><?php echo $place_name[2]?></option>
					<option id="t3"><?php echo $place_name[3]?></option>
					<option id="t4"><?php echo $place_name[4]?></option>
					<option id="t5"><?php echo $place_name[5]?></option>
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

<script>
$(document).ready(function(){
  $('#selectFrom').on('change', function() {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
       if (valueSelected == 'Mvd')
       {
      $("#t1").hide();
    }
    
  });
});
</script>



</body>
</html>
