<?php
session_start();
include "../conn.php";

if(isset($_POST["ad_login"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // You should perform validation and security checks here

    $getuser = mysqli_query($con, "SELECT * FROM userlogin WHERE name='$name' AND password='$password'");
    $res = mysqli_fetch_row($getuser);
    $nores = mysqli_num_rows($getuser);
    
    if ($nores > 0) {
        $_SESSION["ad_session"] = $res[1];
        echo "<script>window.location='afterlogin.php';</script>";
    } else {
        echo "Login failed.";
    }
} else {
    echo "<script>window.location='index.php';</script>";
}
?>
