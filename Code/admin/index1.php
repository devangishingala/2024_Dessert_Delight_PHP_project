
    <!--header start-->
    <?php
   session_start();
   if(isset($_SESSION["ad_session"]))
   {
   include("header.php");
   ?>
    <!--header end-->
    <style>
       
    .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: scale(1.02);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card-body:hover h2 {
        color: #2e77a4; 
    }

    .card-body:hover .btn {
        background-color: #2e77a4; 
    }
   
       
    
</style>
<body>

    


 <!-- card section -->
 <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/dess.webp" class="card-img-top" alt="Card Image" height="310px">
                    <div class="card-body">
                        <h2 class="card-title" style="color: #4accff;">Product Management</h2>
                        
                        <a href="addupddelproduct.php" class="btn btn-primary btn-lg">Visit here</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
    <div class="card">
        <img src="../images/addcate.jpg" class="card-img-top" alt="Card Image">
        <div class="card-body">
            <h2 class="card-title" style="color: #4accff;">Add 1Category</h2>
            <a href="Categoryadd.php" class="btn btn-primary btn-lg">Visit here</a>
        </div>
    </div>
</div>

            <div class="col-md-4">
                <div class="card">
                    <img src="../images/event.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h2 class="card-title"style="color: #4accff;">Event Management</h2>
                        <a href="event_management.php" class="btn btn-primary btn-lg">Visit here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/faaq.png" class="card-img-top" alt="Card Image" height="310px">
                    <div class="card-body">
                        <h2 class="card-title" style="color: #4accff;">FAQ's Admin</h2>
                       
                        <a href="faqs_admin.php" class="btn btn-primary btn-lg">Visit here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/feedbk.jpg" class="card-img-top" alt="Card Image" height="310px">
                    <div class="card-body">
                        <h2 class="card-title" style="color: #4accff;">Feedback</h2>
                        <a href="feedbackview.php" class="btn btn-primary btn-lg">Visit here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/offer.png" class="card-img-top" alt="Card Image" height="310px" >
                    <div class="card-body">
                        <h2 class="card-title" style="color: #4accff;">Offer Category</h2>
                        <a href="offer_category.php" class="btn btn-primary btn-lg">Visit here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/addpro.jpg" class="card-img-top" alt="Card Image" height="310px">
                    <div class="card-body">
                        <h2 class="card-title" style="color: #4accff;">Category Management
                        </h2>
                        
                        <a href="updviewdelcategory.php" class="btn btn-primary btn-lg">Visit here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/cate.png" class="card-img-top" alt="Card Image" height="310px">
                    <div class="card-body">
                    <h2 class="card-title" style="color: #4accff;">View Category</h2>

                        <a href="viewcategory.php" class="btn btn-primary btn-lg">Visit here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../images/prod.webp" class="card-img-top" alt="Card Image" height="310px" >
                    <div class="card-body">
                        <h2 class="card-title" style="color: #4accff;">View Product</h2>
                        <a href="viewproduct.php" class="btn btn-primary btn-lg">Visit here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card section end -->

</body>
</html>
    <!--footer start-->
    <?php
    include("footer.php");
    }   
    else
        echo "<script>window.location='login.php';</script>";
    ?>
    <!--footer end-->
