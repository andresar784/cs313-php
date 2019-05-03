<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>CS-313 Welcome page</title>
	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!--Links to social media -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  	<script type="text/javascript" src="javadocs.js"></script>
	
  </head>
<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Welcome to CS-313 Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#social">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#assignments">Assignments</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pictures">Pictures</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	
    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to the Home Page</h1>
        <p class="lead">Presentation Page</p>
      </div>
    </header>
	
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">Home</li>
		</ol>
	</nav>
	
	<section id="#">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
			<p class="lead">Welcome!</p>
				<p class="lead">Here you will find: </p>
					<ul>
						<li>About me section</li>
						<li>Social links</li>
						<li>Some pictures</li>
						<li>Link to other assignments</li>
					</ul>
					</div>
        </div>
      </div>
    </section>
	
	<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
				<h2>About me</h2>
					<p class="lead">I'm Andres Rodriguez, I am pursuing a degree in Software Engineering. I am happy to have the opportunity to learn how to build 
							nice things.</p>
			</div>
        </div>
      </div>
    </section>

    <section id="social" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Social</h2>
            <p class="lead">Follow me!</p>
			<a href="https://www.facebook.com/andres.rodriguezpeinado?ref=bookmarks" class="fa fa-facebook"></a>
			<a href="https://twitter.com/Andres62309764" class="fa fa-twitter"></a>
			<a href="https://www.linkedin.com/in/andres-rodriguez-peinado-96a389156/" class="fa fa-linkedin"></a>
			</div>
        </div>
      </div>
    </section>

    <section id="assignments">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Assigments</h2>
			<p class="lead"> Click below to find the assignments</p>
			<a class="lead" href="assignments.php">Assignments</a>
			
			</div>
        </div>
      </div>
    </section>
	
	<section id="pictures">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Some pictures</h2>
			<p class="lead">Family pictures:</P>
			<img src="pictures/salida.jpg" alt="Family pictures" style="width:350px;height:260px;"></img>
			<img src="pictures/salida2.jpg" alt="Looking at the moon" style="width:350px;height:260px;"></img>
			</div>
		</div>
      </div>
    </section>
	

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
	  
        <p class="m-0 text-center text-white">Copyright &copy; 2018-<?php echo date("Y");?> Andres Rodriguez</p>
		</div>
      <!-- /.container -->
	  </footer>
</body>

</html>
