<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dessert Delight Admin Side</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    .navbar-nav .nav-item .nav-link {
        transition: background-color 0.3s, color 0.3s; 
        padding: 10px 15px; 
    }

    .navbar-nav .nav-item .nav-link:hover {
        background-color: #ffffff;
        color: #4accff;
    }
</style>
<body>
<div class="page-border">
    <div class="header-section">
        <div class="container-fluid" style="background-color: #050505;">
            <div class="row">
                <div class="col-12 col-md-4">
                    <a href="#"><img src="..\images\logo5.jpeg" height="150" width="150"></a>
                </div>
                <div class="col-12 col-md-8">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-5" >
                        <h1 style="font-family:'Freestyle Script', cursive; color:rgb(252, 60, 149); font-size: 70px;">Dessert Delight
                        </h1><br>
                        <h2 style="text-align: right; color: rgb(74, 204, 255); font-family:'Freestyle Script', cursive; font-size: 30px; margin-right: 10px;">"Delight at First Bite..."</h2> 
                        </div>        

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-section">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4accff; color: #050505;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style="font-family: Georgia; font-size: 25px;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="logout.php" class="btn btn-primary btn-lg">Logout</a>
    </nav>
</div>

</body>
</html>

