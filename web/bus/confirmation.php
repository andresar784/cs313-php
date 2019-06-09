<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Company Confirmation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">
  <script type="text/javascript" src="js.js"></script>
 </head>
<body>
<?php
  $from = $to = $quantity = "";
  
  $from = $_POST["from"];
	$to = $_POST["to"];
  $quantity = $_POST["quantity"];
 
  
  
  $_SESSION["from"] = $from;
  $_SESSION["to"] = $to;
  $_SESSION["quantity"] = $quantity;
  $_SESSION["price"] = $price;


?>

<div class="jumbotron">
  <div class="container text-center">
	<h1>Star Bus<h1>
    <h3>Confirm</h3>      
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
    
		<dt> You are travelling from: <?php echo $from?> </dt><br>
    <dt> To: <?php echo $to;?></dt><br>
		<dt> Total of passengers are: <?php echo $quantity;?> </dt><br>
    <dt> Total amount is (in dollars): <span id="showPrice">0</span>
    <button onclick="calculatePrice()" class="btn btn-secondary btn-lg">Calculate Price</button>
    <form action="index.php">
    <button  type="submit"  class="btn btn-primary btn-lg" >Return</button>
    </form>
    <form action="process.php">
    <button type="submit" class="btn btn-primary btn-lg">Confirm 2/4</button>
    <form>
		</div>
		</div>
    <div class="col-xs-6">
    </div>

		</div>
 </div><br><br>

 <script>
    function calculatePrice(){  
   var q = "<?=$quantity ?>";
  var price;
  var from = "<?=$from ?>";
  var to = "<?=$to ?>";

  if (from == "Montevideo" && to == "Durazno" || from == "Durazno" && to == "Montevideo"){
    price = 180 * q;
  }
  else if (from == "Montevideo" && to == "Paso de los Toros" || from == "Paso de los Toros" && to == "Montevideo"){
    price = 250 * q;
  }
  else if (from == "Montevideo" && to == "Tacuarembo" || from == "Tacuarembo" && to == "Montevideo" ){
    price = 390 * q;
  }
  else if(from == "Montevideo" && to == "Rivera" || from == "Rivera" && to == "Montevideo"){
    price = 500 * q;
  }
  else if(from == "Durazno" && to == "Paso de los Toros" || from == "Paso de los Toros" && to == "Durazno"){
    price = 70 * q;
  }
  else if(from == "Durazno" && to == "Tacuarembo" || from == "Tacuarembo" && to == "Durazno"){
    price = 180 * q;
  }
  else if(from == "Durazno" && to == "Rivera" || from == "Rivera" && to == "Durazno"){
    price = 320 * q;
  }
  else if(from == "Paso de los Toros" && to == "Tacuarembo" || from == "Tacuarembo" && to == "Paso de los Toros"){
    price = 140 * q;
  }
  else if(from == "Paso de los Toros" && to == "Rivera" || from == "Rivera" && to == "Paso de los Toros"){
    price = 250 * q;
  }
  else if(from == "Tacuarembo" && to == "Rivera" || from == "Rivera" && to == "Tacuarembo"){
    price = 110 * q;
  }

  document.getElementById("showPrice").innerHTML = price;
}

</script>
 

 



<footer class="container-fluid text-center">
  <p>Bus Star Copyright 2018 - <?php echo date(Y)?></p>  
</footer>

</body>
</html>
