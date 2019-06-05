<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Company Process</title>
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
    <h3>Log in the system</h3>      
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

<div class="container"> 
	<div class="p-3 text-white text-center">
		<div class="col-xs-6">
    <dt>Login:</dt><br>
    <form action="login.php">
    <button type="submit" class="btn btn-primary btn-lg">Register</button><br>
    </form>
    </div>
  </form>
</div>

    <dt>Or register:</dt><br>
    <form action="register.php">
    <button type="submit" class="btn btn-primary btn-lg">Register</button><br>
    <form>
    <br>
    <button type="button" class="btn btn-primary btn-lg">Confirm 3/4</button>
		</div>
		</div>
    <div class="col-xs-6">
    
		

		</div>
		
	</div>
 </div><br><br>

<footer class="container-fluid text-center">
  <p>Bus Star Copyright 2018 - <?php echo date(Y)?></p>  
</footer>

</body>
</html>
