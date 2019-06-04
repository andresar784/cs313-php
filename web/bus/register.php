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
<div class="jumbotron">
  <div class="container text-center">
	<h1>Star Bus<h1>
    <h3>Complete with the required data</h3>
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
		    <div class="form-group">
            <form>
                <dt>Name: <input type="text" name="fName" required></dt>
                <dt>Surname: <input type="text" name="sName" required></dt>
                <dt>Phone: <input type="text" name="phone" reuqired></dt>
                <dt>Age: <input type="text" name="age" required></dt>
                <dt>Address: <input type="text" name="address" required></dt>
                <dt>Email <input type="email" name="email" required></dt>
                <dt>Password: <input type="text" name="pw" required></dt>
            </div>
		</div>
	</div>
</div>
<button type="submit" class="btn btn-primary btn-lg"> Confirm 1/4</button>
	
	

<footer class="container-fluid text-center">
  <p>Bus Star Copyright 2018 - <?php echo date(Y)?></p>
</footer>
