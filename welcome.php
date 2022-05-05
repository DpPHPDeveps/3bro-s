<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Sign.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>

    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3 BRO'S</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>
	<!--navbar-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    
	<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
  <div class="container-fluid">
	<a href="#"><img src ="collection.jpg">
			
	</a><div class=nav1>
    <a class="navbar-brand" href="#"> 3 Bro's Fabrics</a></div>
	<div class="nav-item">
		<div class="search">
			<input type="text" class="search-box" placeholder="search brand,product"> 
			<button class="search-btn" >search</button>
		</div>

		
	</div>
	


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto "> <!-- center aligin --->
        <li class="nav-item">
          <a class="nav-link active" href="feb.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="About.php">About</a>
        </li>

		<li class="nav-item">
          <a class="nav-link active" href="Product.php">Products</a>
        </li>

		<li class="nav-item">
          <a class="nav-link active" href="Contact.php">Contact</a>
        </li>


        </ul>
        <button class="btn p-2 my-lg-0 my-2"> <a class="click" href="logout.php" >Logout</a> </button>
        

        

     </div>
</nav>

	<!--home-->
	<section id="home">
		<h1 class="text-center">The Gateway for Family shopping</h1>
		<p class="animated zoom" style="animation-delay:3s">Lowest Prices Best Quality Shopping</p>
		<div class="input-group m-4">
		


	</div>	

	 		
		
	</section>

		<!--about-->
		<section id="about">
			<div class="container m-5">
				<h1 class="text-center"> ABOUT US</h1>
				<h2 class="text-center">3 Bro's Fabrics is a social commerce platform that undertakes retail distribution, enabling small retail merchants to connect and sell their products effectively via social media channels. Cuddalore based </h2>
				<h3>Legal Name    :3 Bro's Fabrics<br>
					Headquarters  :Cuddalore,Tamil Nadu,India<br>
					Business Model:B2C <br>
					Founding Date :Dec 2015</h3>
			</div>	
		</section>


		<!--Products-->
		<section id="product">
			<div class="container m-5">
				<h1 class="text-center">OUR PRODUCTS</h1>
				
				
				
				<div  class="row">
					<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="Jeans.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Jeans</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
  						</div>
					</div>
				</div>

				<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="Jeggings.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Jeggings</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
  					</div>
					</div>
						</div>

					<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="palazzos.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">palazzos</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
   						</div>
						</div>
				</div>
			
					
				</div>

				<!-- 2row -->
				<div  class="row">
					<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="top.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Top</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
  						</div>
					</div>
				</div>

				<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="top1.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Top</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
  					</div>
					</div>
						</div>

					<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="top2.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Top</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
   						</div>
						</div>
				</div>
			
					
				</div>
				<!---3row-->

				<div  class="row">
					<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="Long top.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Long top</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
  						</div>
					</div>
				</div>

				<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="longtop1.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Long top</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
  					</div>
					</div>
						</div>

					<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="longtop3.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Long top</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
   						</div>
						</div>
				</div>
				<!--row4-->

				<div  class="row">
					<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="dupatta.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Dupatta</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
  						</div>
					</div>
				</div>

				<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="dupatta2.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Dupatta</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
  					</div>
					</div>
						</div>

					<div class="col-lg-4  col-md-4  col-12">
						<div class="card">
  						<img src="dupatta3.jpg" class="card-img-top" >
  						<div class="card-body text-center">
    					<h5 class="card-title">Dupatta</h5>
    					<a href="#" class="btn signin">Add To Cart</a>
   						</div>
						</div>
				</div>
			
					
				</div>
			</div>

			
		</section>

		<section id="contact" >
			
			<div class="container box">
				<div class="row">
					<div class="col-lg-6  col-md-6  col-12">
						<img src="fab.jpg" class="img-fluid">
						
					</div>
					
			
						    
					<div class="col-lg-6  col-md-6  col-12">
						<h1><b>CONTACT US</b></h1>
						    
						<form action="mail.php" method="post">
						<input type="text" class="form-control"  name="name" id="name" placeholder="Enter your name">
							<input type="text" class="form-control" name="email"  id="email" placeholder="Enter your mail id">
							<textarea class="form-control"  name="message" id="body" placeholder="Enter your  messages"></textarea>
							<button value="Submit" class="btn signin">Send message</button>
 							
						<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	
					</div>
					
						<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	
					</div>
					
				</div>
				
			</div>
			
		</section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<footer>
    &copy; 2022 3BRO'S FABRICS <a href="#"><img src ="yellow icon.jpg"></a> Design by Divya
</footer>


</body>

</html>

</body>
</html>