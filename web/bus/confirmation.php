<head>
  <title>Bus Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">
  
</head>
<body>
<?php
	$statement = $db->prepare("SELECT id, place_name FROM place");
	$statement->execute();
	$place_name = array();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
		$place_name[$row['id']] = $row['place_name'];
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
		<p> You are travelling from: <span ></span></p> To: <span></span></p>
		<p> Total of passengers are: <span></span></p>
		<button type="button" class="btn btn-primary btn-lg" id="load" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Processing Order">Confirm 2/5</button>
		</div>
		</div>
		<div class="col-xs-6">
		
		</div>
		
	</div>
 </div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright 2018 - <?php echo date(Y)?></p>  
</footer>

</body>
</html>
