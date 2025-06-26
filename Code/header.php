
<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Candy Shop</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<style src="style.css">
	
	</style>
	<style>
		/* Add hover effect to the header */
.header-section:hover {
    background-color: #969393; /* Change to the desired hover background color for the header */
	
}

/* Add hover effect to the navbar */
.navbar-section:hover {
    background-color: #3385ff; /* Change to the desired hover background color for the navbar */
	
}

.navbar-section .navbar-nav .nav-item:hover .nav-link,
.navbar-section .navbar-nav .nav-item:hover .dropdown-menu a:hover {
    color: #fff; /* Change the color as needed */
    background-color: #007bff; /* Change the background color as needed */
	
	
}

/* Add hover effect to the social media buttons in the header */
.btn-social:hover {
    background-color: #969393; /* Change to the desired hover background color for social media buttons */
    border-color: #969393; /* Change to the desired hover border color for social media buttons */
}

/* Add hover effect to the buttons in the search and submit forms */
.btn-outline-light:hover {
    background-color: #007bff; /* Change to the desired hover background color for buttons */
    border-color: #007bff; /* Change to the desired hover border color for buttons */
}

</style>

</head>
<body>
	<!--header start-->
	<div class="header-section">
		<div class="container-fluid" style="background-color: #050505;">
		  	<div class="row">
		    <div class="col-3">
		    	<a><img src="images\logo5.jpeg" height="150" width="150"></a>
		    </div>
		    <div class="col-5" >
		    	
		    	<h1 style="font-family:'Freestyle Script', cursive; color:rgb(252, 60, 149); font-size: 70px;">Dessert Delight
 		    	</h1><br>
		    	<h2 style="text-align: right; color: rgb(74, 204, 255); font-family:'Freestyle Script', cursive; font-size: 30px; margin-right: 10px;">"Delight at First Bite..."</h2> 
			</div>
			<div class="col-4 py-5 mr-5" style="text-align: right;">
				<a class="btn btn-outline btn-social mr-2" href="https://www.twitter.com"><i class="fa-brands fa-twitter fa-beat" style="color: #1DA1F2;"></i></a>
                    <a class="btn btn-outline btn-social mr-2" href="https://www.facebook.com"><i class="fab fa-facebook-f fa-beat" style="color: #4267B2;"></i></a>
                    <a class="btn btn-outline btn-social mr-2" href="https://www.linkedin.com" ><i class="fab fa-linkedin-in fa-beat" style="color: #0E76A8;"></i></a>
                    <a class="btn btn-outline btn-social" href="https://www.instagram.com" ><i class="fab fa-instagram fa-beat" style="color: #E4405F;"></i></a>
			</div>
			</div>
		</div>
	</div>	
	<!--header end-->
	<!--navbar start-->
	<div class="navbar-section">		
		<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #4accff; color: #050505;">
	  	<div class="container-fluid" style="">	    
	    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Georgia; font-size: 25px;">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link " href="afterlogin.php">Home</a>
	        </li>
	        <li class="nav-item" >
	          <a class="nav-link" href="about.php">About</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Product
	          </a>
	          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#fcfafa; color: #fcfafa;">
	        	<?php
								$cat=mysqli_query($con,"select * from category");
								while($rcat=mysqli_fetch_array($cat))
								{
								?>
								<li><a href="product.php?cid=<?php echo $rcat[0]; ?>" class="dropdown-item"><?php echo $rcat[1]; ?></a></li>
								<?php
								}
								?>
	            <!--<li><a class="dropdown-item" href="Cone.php" id="1">Cone</a></li>
	            <li><a class="dropdown-item" href="Candy.php" id="2">Candy</a></li>
	            <li><a class="dropdown-item" href="Fruitspecial.php" id="3">Fruits Special</a></li>
	            <li><a class="dropdown-item" href="ChildrenSpecial.php" id="4">Children Special</a></li>
	            <li><a class="dropdown-item" href="SpecialItem.php" id="5">Our Special item</a></li>-->
	          </ul>
	        
	        <li class="nav-item">
	          <a class="nav-link " href="services.php">Services</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link " href="gallary.php">Gallary</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link " href="contact.php">Contact</a>
	        </li>
			<li class="nav-item" >
	          <a class="nav-link" href="FAQs.php">FAQ's</a>
	        </li>
	        <li class="nav-item" >
	          <a class="nav-link" href="feedback.php">Feedback</a>
	        </li>
	      </ul>
	      <form class="d-flex m-3">
			
	        <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
	        <button class="btn btn-outline-light" type="submit"><a href="offers.php">Offers</a></button>
	      </form>
		  <form class="d-flex m-3">
                <button class="btn btn-outline-light" type="submit"><a href="events.php">Events</a></button>
            </form>
			<form class="d-flex m-3"> 
                <button class="btn btn-outline-light" type="submit"><a href="spinner.php">Spinner</a></button>
            </form>
	    </div>
	  	</div>
		</nav>
	</div>
	<!--navbar end-->
</body>
</html>


