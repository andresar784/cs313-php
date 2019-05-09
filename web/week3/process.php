<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Process page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">
  
  <script>
    $(document).ready(function(){
      $("#removeAll").click(function(){
        $.post("remove_all.php",
        {
        },
        );
      alert("Items have been removed");
      });
    });
	
    $(document).ready(function(){
      $(".remove").click(function(){
        $.post("remove_cart.php",
        {
          item: $(this).val()
        },
        );
      alert("item removed from shopping cart");
      });
    });
  </script>
  
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
          <h2>Shopping Cart</h2>
          <button class="btn btn-secondary" id="removeAll">Remove all items</button>
		  <a class="btn-secondary" href="checkout.php">Continue to checkout</a>
        </div>
        
        <div class="p-3 text-white text-center">
             <?php
              
			  $arrlength = count($_SESSION["add_cart"]);
				if($arrlength > 0)
              {
                echo "<ul>";
                for($x = 0; $x < $arrlength; $x++) {
					      echo "<li>" . $_SESSION["add_cart"][$x] ."</li>";
					      echo "<br/>";
					      echo "<button class='remove btn btn-secondary' value=$x>Remove Item From List</button>";
					      echo "<br/>";
                }
                echo "</ul>";
              };
			 
              ?>
			  </div>
			  
        </div>




<br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright 2018 - <?php echo date(Y)?></p>  
</footer>

</body>
</html>
