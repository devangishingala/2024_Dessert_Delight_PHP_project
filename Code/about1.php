	<!--header start-->
	<?php
	//include("header.php");
	?>
    <style>
        .container {
        /* Add the background image URL and other properties */
        background: url('Code\images\candy46.jpg') center center/cover no-repeat;
        color: #f2f2f2;
        padding: 30px 0; /* Adjust padding as needed */
    }
        .image-container {
            position: relative;
            overflow: hidden;
           
            border-radius: 10px;
        }

        .image-container:hover img {
            transform: scale(1.3);
            border:2px dashed rgb(74, 204, 255);
            transition: transform 0.5s ease;
        }
    </style>
	<!--header end-->
	<!--about start-->
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
                <div class="col-lg-4 image-container" style="min-height: 400px;">
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
	<!--about end-->
	<!--footer Start-->
	<?php
	include("footer.php");
	?>
	<!--Footer end-->
