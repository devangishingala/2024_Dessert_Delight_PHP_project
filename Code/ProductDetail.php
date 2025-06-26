<?php
	include "header.php";
	$pro=mysqli_query($con,"select * from product where product_id=".$_REQUEST["id"]);
	$r=mysqli_fetch_row($pro);

?>
<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-5">
				<div class="col-lg-6">
					<img class="img-fluid" src="<?php echo $r[4]; ?>" alt="">
				</div>
				<div class="col-lg-6 pl-lg-5 abou-right-w3layuts mt-lg-0 mt-5">
					<h3 class="mb-4"><?php echo $r[1]; ?></h3>
					<p>Price : <?php echo $r[4]; ?></p>
					<p>Description : <?php echo $r[3]; ?></p>
				<br />
				<br />
			</div>
				
				<div class="row flex-row-reverse border-top pt-lg-5 pt-sm-4 pt-2 mt-lg-5 mt-sm-4 mt-2">
				<div class="col-lg-6">
					
				</div>
				<div class="col-lg-6 abou-right-w3layuts mt-5">
</div>
</div>				
			</div>
			
		</div>
	</section>
	<?php include "footer.php"; ?>