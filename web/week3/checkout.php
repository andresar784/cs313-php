<?php
session_start();
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

<div class=" text-white p-5">
        <div class="p-3 text-white text-center">
          <h2>Checkout page</h2>
		  <h4>Enter your address below</h4>
         	<form method="post" action="confirmation.php">
          <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" name="address" id="inputAddress" placeholder="Your address" size="25">
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="inputCity">City</label>
              <input type="text"  name="city" id="inputCity" placeholder="Your City" size="25">
            </div>
            <div class="form-group">
              <label for="inputState">State</label>
              <input type="text" name="state" id="inputState" placeholder="ID" size="25">
            </div>
            
          </div>

            <button type="submit" class="btn btn-secondary">Submit Purchase</button>
            <a class="btn btn-secondary" href="index.php" role="button">Return to Cart</a>
      </form>	
        </div>
</div>

<footer class="container-fluid text-center">
  <p>Online Store Copyright 2018 - <?php echo date(Y)?></p>  
</footer>

</body>
</html>
