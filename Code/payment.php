<?php
include("header.php");
$absolute_path = 'conn.php'; // Adjust this path
include($absolute_path);
?>

<?php
if (isset($_GET['pro_name']) && isset($_GET['quantity']) && isset($_GET['price'])) {
    $productName = $_GET['pro_name'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];
    $total = $price * $quantity;

    // Insert data into the cart table
    $insertQuery = "INSERT INTO cart (pro_name, price, quantity, total) VALUES ('$productName', '$price', '$quantity', '$total')";

    if (mysqli_query($con, $insertQuery)) {
        $insertSuccess = true;
    } else {
        $insertSuccess = false;
        echo "Error adding product to cart: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
    <!-- Your CSS and meta tags -->
    <style>
    .payment-container {
        padding: 20px;
        border: 1px solid #ddd;
        transition: box-shadow 0.3s ease;
    }

    .payment-container:hover {
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
    }
</style>

</head>
<body>
    <!--<div class="container-fluid mt-5 payment-container" style="background-color: #050505; color: #fcfafa; text-align: center;">-->

    <div class="container-fluid mt-5 " style="background-color: #050505; color: #fcfafa; text-align: center;">
        <div class="row justify-content-center payment-container">
            <div class="col-md-6">
                <h2 class="text-center">Payment Confirmation</h2>
                <hr>
                <div class="mb-3">
                    <strong>Product:</strong> <?php echo $productName; ?>
                </div>
                <div class="mb-3">
                    <strong>Price:</strong> Rs.<?php echo $price; ?>
                </div>
                <div class="mb-3">
                    <strong>Quantity:</strong> <?php echo $quantity; ?>
                </div>
                <div class="mb-3">
                    <strong>Total:</strong> Rs.<?php echo $total; ?>
                </div>
             
                    <!-- Add the "Pay Now" button inside the form -->
                    <form action="process_payment.php" method="post">
                        <button type="submit" class="btn btn-success">Pay Now</button>
                    </form>
                       <?php if ($insertSuccess): ?>
                    <h4 class="text-center">
                         Product added to cart.
                    </h4>
                <?php else: ?>
                    <p class="text-center">
                        An error occurred while adding the product to the cart.
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>


<?php include("footer.php"); ?>
