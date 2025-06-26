<?php
include("header.php");
?>
<!--Slider Start-->
    <style>
        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .image-container:hover img {
            transform: scale(1.6);
            transition: transform 0.5s ease;
        }
        .portfolio-item:hover .position-relative::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border:3px dashed rgb(74, 204, 255);
        background: rgba(255, 255, 255, 0.5); /* Change the background color as needed */
        z-index: 1;
    }

    .portfolio-item:hover img {
        transform: scale(1.1); /* Change the scale factor as needed */
        
        transition: transform 0.3s ease;
    }
    .carousel-item:hover img {
        transform: scale(1.1);
        
        transition: transform 0.5s ease;
    }

    .carousel-item:hover .carousel-caption {
        background: rgba(255, 255, 255, 0.8); /* Change the background color as needed */
    }

    .carousel-caption {
        transition: background 0.5s ease;
    }

    .carousel-caption h4,
    .carousel-caption h1,
    .carousel-caption a {
        color: #000; /* Change the text color as needed */
    }
</style>

	<div class="Slider-section">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  			<div class="carousel-indicators">
    			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
   				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  			</div>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="images\ice2.webp" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			      	<div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3" style="font-size: 40px; font-weight: bold;">Traditional &amp; Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4" style="font-size: 100px; font-weight: bold;">Traditional Dessert Delight Since 2023</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2" style="background-color:#ff99c2; font-size: 25px; font-weight: bold; border-radius:50px;">Learn More</a>
                    </div>			        
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="images\cupck.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3" style="font-size: 40px; font-weight: bold;">Traditional &amp; Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4" style="font-size: 100px; font-weight: bold;">Made from our Own Organic Milk</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2" style="background-color:#ff99c2; font-size: 25px; font-weight: bold; border-radius:50px;">Learn More</a>
                    </div>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="images\macaron.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3" style="font-size: 40px; font-weight: bold;">Traditional &amp; Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4" style="font-size: 100px; font-weight: bold;">Strawberries! Fruit from the heart</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2" style="background-color:#ff99c2; font-size: 25px; font-weight: bold; border-radius:50px;">Learn More</a>
                    </div>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="images\ck.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3" style="font-size: 40px; font-weight: bold;">Traditional &amp; Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4" style="font-size: 100px; font-weight: bold;">Fruit is Nature's Dessert</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2" style="background-color:#ff99c2; font-size: 25px; font-weight: bold; border-radius:50px;">Learn More</a>
                    </div>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="images\waffle.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3" style="font-size: 40px; font-weight: bold;">Traditional &amp; Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4" style="font-size: 100px; font-weight: bold;">Sugar, spice, and everything nice</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2" style="background-color:#ff99c2; font-size: 25px; font-weight: bold; border-radius:50px;">Learn More</a>
                    </div>
			      </div>
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
		</div>
	</div>
	<!--Slider end-->
	<!--About Start-->
	<div class="container-fluid py-5" style="background-color: #2b2929; color: #f2f2f2;">
  		<div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional &amp; Delicious Dessert Delight Since 2023</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">Dessert: because sometimes you just need a little sweetness in your life.</h5>
                    <p>Dessert contains lots of sugar, so it is not very healthy, but can be eaten sometimes. It is the most common snacking food, and there are hundreds of flavors, shapes, and sizes. Dessert is not limited to being sweet. Dessert can be spicy in different cultures.</p>
                    <a href="" class="btn btn-secondary mt-2" style="background-color: #62C3E7; border-radius: 25px;">Learn More</a>
                </div>
                <div class="col-lg-4 image-container" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="images/dessert.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Whether you have a taste for the sweet stuff or simply love vibrant design, these dazzling Dessert stores will satisfy your craving.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Helps You too Live Longer...</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Sugar Helps to Restore Your Willpower...</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Satisfying Your Sweet Tooth
					</h5>
                    <a href="" class="btn btn-primary mt-2" style="background-color: #F195B2; border-radius: 25px;">Learn More</a>
                </div>
            </div>
        </div>
	</div>
	<!--About end-->
	<!--service start-->
	<div class="container-fluid my-5 py-2 px-0" style="background-color: #2b2929; color: #f2f2f2;">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Delicious Dessert Made From Our Very Own Organic Milk</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container" style="position: relative; height: 597.312px;">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item" style="position: absolute; left: 0px; top: 0px;">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="images\ice2.webp" alt="">                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item" style="position: absolute; left: 426px; top: 0px;">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="images\mac1.jpg" alt="">                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item" style="position: absolute; left: 853px; top: 0px;">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="images\wf3.jpg" alt="">                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item" style="position: absolute; left: 0px; top: 298px;">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="images\waffle.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item" style="position: absolute; left: 426px; top: 298px;">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="images\ice11.jpg" alt="">                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item" style="position: absolute; left: 853px; top: 298px;">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="images\mac12.jpg" alt="">                    
                </div>
            </div>
        </div>
    </div>
	<!--service end-->
	<!--footer start-->
	<?php
	include("footer.php");
	?>
	<!--footer end-->