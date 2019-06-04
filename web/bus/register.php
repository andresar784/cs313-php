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
<form method="POST" action="?">
<div class="container">
	<div class="p-3 text-white text-center">
		<div class="col-xs-6">
		    <div class="form-group">
                <dt>Name: <input type="text" name="firstname" required></dt>
                <dt>Surname: <input type="text" name="lastname" required></dt>
                <dt>Phone: <input type="text" name="phone" required></dt>
                <dt>Age: <input type="text" name="age" required></dt>
                <dt>Address: <input type="text" name="address" required></dt>
                <dt>Email <input type="email" name="email" required></dt>
                <dt>Password: <input type="text" name="pw" required></dt>
                
            </div>
		</div>
    </div>
</div>
<button type="submit" class="btn btn-primary btn-lg"> Confirm 1/4</button>
</form>


<?php
    try{
    
    //add the values to the bususer table
    $query = 'INSERT INTO bususer(lastname, firstname, phone, age, address, email, password) VALUES(:lastname, :firstname, :phone, :age, :address, :email, :password)';
    $statement = $db->prepare($query);

    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':firstname', $firstname);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':age', $age);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);

    //pasted from another script
    $firstname = $lastname = $phone = $age = $address = $email = $pw = "";

    $firstname = test_input($_POST['firstname']);
    $lastname = test_input($_POST['lastname']);
    $phone = test_input($_POST['phone']);
    $age = test_input($_POST['age']);
    $address = test_input($_POST['address']);
    $email = test_input($_POST['email']);
    $pw = test_input($_POST['pw']);

    //hash the password
    $password = password_hash($pw);

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
       return $data;
    }
    

    $statement->execute();
    }
    catch (Exception $ex)
    {           
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Error with DB. Details: $ex";
    die();
    }
    ?>    
	
	

<footer class="container-fluid text-center">
  <p>Bus Star Copyright 2018 - <?php echo date(Y)?></p>
</footer>
