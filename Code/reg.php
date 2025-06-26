<?php
include('conn.php');

// Error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $cpsw = $_POST["cpsw"];

    // Insert data into the 'signup' table
    $signup_query = "INSERT INTO signup (name, email, psw, cpsw) VALUES ('$name', '$email', '$psw', '$cpsw')";
    
    if (mysqli_query($con, $signup_query)) {
        echo "Data inserted into signup table successfully.<br>";
    } else {
        echo "Error inserting data into signup table: " . mysqli_error($con) . "<br>";
    }

    // Insert data into the 'userlogin' table
    $userlogin_query = "INSERT INTO userlogin (name, password) VALUES ('$name', '$psw')";

    if (mysqli_query($con, $userlogin_query)) {
        echo "Data inserted into userlogin table successfully.<br>";
    } else {
        echo "Error inserting data into userlogin table: " . mysqli_error($con) . "<br>";
    }

    // Redirect to the login page
    header("Location: login.php");
    exit(); // Ensure script stops executing after the redirect
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #2b2929; ">
    <div class="container" >
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <div class="card" style="border: 7px solid rgb(74, 204, 255); border-radius: 10px; background-color: #2b2929; color: rgb(74, 204, 255);">
                    <div class="card-header" style="border: 3px  solid rgb(74, 204, 255);">
                        <h3 class="text-center mt-3">Registration Form</h3>
                    </div>

                    <div class="card-body">
                        <!-- Registration form -->
                        <form method="post">
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="name" placeholder="Enter your full name" required style="border: 2px solid #ed7399; border-radius: 10px;">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required style="border: 2px solid #ed7399; border-radius: 10px;">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="psw" placeholder="Enter your password" required style="border: 2px solid #ed7399; border-radius: 10px;">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="cpsw" placeholder="Confirm your password" required style="border: 2px solid #ed7399; border-radius: 10px;">
                            </div>
                            <button type="submit" name="submit" class="btn btn-block" style="color: white; background: lightskyblue;">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
