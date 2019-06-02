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
    <h3>Fill all the field with the requested info</h3>      
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
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" 
      class="btn btn-primary btn-lg">Login</button><br><br>
      <div id="id01" class="modal">
  
      <form class="modal-content animate" action="/action_page.php">
       <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
    <dt>Register:</dt><br>
    <button type="submit" class="btn btn-primary btn-lg">Register</button><br>
    <br>
    <button type="button" class="btn btn-primary btn-lg">Confirm 3/4</button>
		</div>
		</div>
    <div class="col-xs-6">
    
		

		</div>
		
	</div>
 </div><br><br>

 <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<footer class="container-fluid text-center">
  <p>Bus Star Copyright 2018 - <?php echo date(Y)?></p>  
</footer>

</body>
</html>
