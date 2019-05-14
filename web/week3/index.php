<?php
session_start();
if (! isset ( $_SESSION ['add_cart'] )) {
  $_SESSION ['add_cart'] = array();
  }
  array_push($_SESSION['add_cart'], $_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uruguayan Things</title>
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
    <h1>Uruguayan things</h1>      
    <p>The best place  to purchase Uruguayan things</p>
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
<form method="get">
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" id="dulce" value="Dulce de leche">Dulce de leche</div>
        <div class="panel-body"><img src="pictures/dulce de leche.jpg" class="img-responsive" alt="Image"></div>
		<div class="panel-footer">Delicious and hand made</div>
		<button class="btn btn-secondary" id="Dulce de leche">Add to Cart</button>

      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" id="caramelos" value="Caramelos de dulce de leche" >Caramelos de dulce de leche</div>
        <div class="panel-body"><img src="pictures/caramelos dulce de leche.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer">Pack of 10 delicious candies</div>
		<button class="btn btn-secondary" id="Caramelos" >Add to Cart</button>
    </div>
	</div>
  
  
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" id="vacumm" value="Vacuum">Vacuum</div>
        <div class="panel-body"><img src="pictures/termo.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Vacuum to maintain warm watter</div>
		<button class="btn btn-secondary" id="Vacuum" >Add to Cart</button>
	</div>
  </div>
</div><br>


<div class="container">    
  <div class="row">
  
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" id="yerba" value="Yerba">Yerba mate</div>
        <div class="panel-body"><img src="pictures/yerba mate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">To prepare delicious mate</div>
		<button class="btn btn-secondary" id="Yerba Mate" >Add to Cart</button>
      </div>
    </div>
   
   
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" id="mate" value="Mate">Mate</div>
        <div class="panel-body"><img src="pictures/mate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Where you prepare your delicious mate</div>
			<button class="btn btn-secondary" id="Mate">Add to Cart</button>
      </div>
    </div>
   
   
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" id="bombilla" value="Bombilla">Bombilla</div>
        <div class="panel-body"><img src="pictures/bombilla mate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">To drink the mate</div>
			<button  class="btn btn-secondary" id="Bombilla">Add to Cart</button>
				
     </div>

    </div>
  </div>


</div><br><br></form>

<footer class="container-fluid text-center">
  <p>Online Store Copyright 2018 - <?php echo date('Y')?></p>  
</footer>

</body>
</html>

