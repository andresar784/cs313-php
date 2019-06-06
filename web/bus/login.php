<?php
session_start();

$badLogin = false;
if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a email and password for us to check
	$email = $_POST['txtUser'];
  $password = $_POST['txtPassword'];
  
	// Connect to the DB
	require_once('bd.php');
  $db = DB::init();

	$query = 'SELECT password, firstname, lastname FROM bususer WHERE email=:email';
	$statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  //$statement->bindValue(':firstname', $firstname);
  //$statement->bindValue(':lastname', $lastname);
  $result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
    $hashedPasswordFromDB = $row['password'];
    $lastname = $row['lastname'];
    //$firstname = $row['firstname'];
		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
      // password was correct, put the user on the session, and redirect to home
      //$_SESSION['firstname'] = $firstname;
      $_SESSION['lastname'] = $lastname;
      $_SESSION['email'] = $email;
			header("Location: check.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}
// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Company Login</title>
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
    <h3>Log in with your email</h3>      
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
    <form action="" method="post">
   
        Email:<br>
        <input type="email" name="txtUser">
        <br>
        User password:<br>
        <input type="password" name="txtPassword">
        <?php
          if ($badLogin)
              {
                echo "Incorrect email or password! Try again!<br /><br />\n";
              }
        ?>
    <br>
    <button type="submit" class="btn btn-primary btn-lg">Log</button>
    </form>
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
