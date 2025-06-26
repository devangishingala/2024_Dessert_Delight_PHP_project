    <!--header start-->
    <?php
    include("header.php");
    
    $pro=mysqli_query($con,"select * from product where category_id=".$_REQUEST["cid"]);
   // $r=mysqli_fetch_row($pro);

    ?>

    <!--header end-->
    
    <!-- About start-->
    <style>
    .product-item:hover {
        /* Add your hover styles here */
        box-shadow: 0 0 10px rgba(0, 0, 0, 1.6);
        transform: scale(1.05);
        background: rgba(34, 175, 248, 0.8);
        transition: box-shadow #07b7f7 0.5s ease, transform 0.5s ease;
    }
</style>

        <div class="container-fluid py-3"  style="background-color: #050505;color: #fcfafa;">
        <div class="container py-5">
        <?php
        if(mysqli_num_rows($pro)>0)
        {
        ?>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer for Dessert Lovers</h1>
                </div>
            </div>
            <div class="row ">
           <?php
while ($rpro = mysqli_fetch_array($pro)) {
    ?>
    <div class="col-lg-3  col-md-6 mb-4 pb-2 bg-light"  >
        <div class="product-item d-flex flex-column hover-overlay align-items-center text-center  squer py-5 px-3" style="background-color: hsla(195, 83%, 58%, 0.2);" >
            <div class=" squer-circle mt-n5 py-3" style="height:75px; width: 80px; background-color: rgb(74, 204, 255);">
                            <h4 class="font-weight-bold text-white mb-0">Price: <?php echo $rpro[4]; ?></h4>
                        </div>
                        <div class="position-relative squer-circle mt-n3 mb-4 p-2" style="width: 150px; height: 150px; background-color: rgb(74, 204, 255);">
                            <a href="ProductDetail.php?id=<?php echo $rpro[0]; ?>">
                                <img class="squer-circle w-100 h-100" src="<?php echo $rpro[5]; ?>" alt="Card image cap" style="object-fit: cover;">
                            </a>
                            <!--<img class="squer-circle w-100 h-100" src="images\candy17.jpg" style="object-fit: cover;">-->
                        </div>
                        
            <!-- Other product details ... -->

            <h5 class="font-weight-bold mb-4">
                <a href="ProductDetail.php?id=<?php echo $rpro[0]; ?>"><?php echo $rpro[2]; ?></a>
            </h5>

            <!-- "Order Now" button with the product ID parameter -->
            <a href="cart.php?id=<?php echo $rpro[0]; ?>" class="btn btn-sm btn-primary" style="background-color: rgb(74, 204, 255);">Order Now</a>
        </div>
    </div>
    <?php
}
?>
            <h3 class="title-w3ls text-center text-bl mb-5">No Products Available</h3>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- About end-->
    <!--footer Start-->
    <?php
    include("footer.php");
    ?>
    <!--Footer end-->
