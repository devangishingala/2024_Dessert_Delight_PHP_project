<style>
    .product-image-container {
        position: relative;
        overflow: hidden;
    }

    .product-image-container:hover img {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
</style>

<?php
include("header.php");

// Debugging: Check if 'id' parameter is set
if(isset($_REQUEST["id"])) {
    $productId = $_REQUEST["id"];
    
    // Query the database
    $pro = mysqli_query($con, "select * from product where product_id=$productId");

    // Check if the query executed successfully
    if($pro) {
        $r = mysqli_fetch_row($pro);

        // Display product details
        if($r) {
            echo '<div class="container-fluid py-5" style="background-color: #050505;color: #fcfafa;">';
            echo '<div class="row">';
            
            // Display product image
            // Display product image
            echo '<div class="col-lg-4 mb-8 mb-lg-0 product-image-container">';
            echo '<img src="' . $r[5] . '" alt="Product Image" class="img-fluid" style="max-width: 100%; height: auto;">';
            echo '</div>';

            // echo '<div class="col-lg-4 mb-8 mb-lg-0">';
            // echo '<img src="' . $r[5] . '" alt="Product Image" class="img-fluid" style="max-width: 100%; height: auto;">';
            // echo '</div>';

            // Display product details and Pay Now button
            echo '<div class="col-lg-8">';
            echo '<h1 class="mb-4">' . $r[1] . '</h1>';
            echo '<p>Name: ' . $r[2] . '</p>';
            echo '<p>Description: ' . $r[3] . '</p>';
            echo '<h5>Price: ' . $r[4] . '</h5>';
            
            // Form for payment
            echo '<form action="payment.php" method="GET" style="
            display: flex;
            align-items: center;
        ">';
            echo '<input type="hidden" name="pro_id" value="' . $productId . '">';
            echo '<input type="hidden" name="pro_name" value="' . $r[2] . '">';
            echo '<input type="hidden" name="price" value="' . $r[4] . '">';
            echo '<label for="quantity">Quantity:</label>';
            echo '<input type="number" name="quantity" id="quantity" value="1" min="1" style="
            padding: 4px;
            line-height: 1;
            margin: 0 0 0 15px;>';
            echo '<input type="hidden" name="total" value="' . ($r[4] * 1) . '">';
            echo '<button type="submit" class="btn btn-primary" style="margin-left:10px;line-height: normal;">Add to Cart</button>';
            echo '</form>';
            echo '<p>Total: Rs.<span id="total">' . ($r[4] * 1) . '</span></p>';
            echo '<script>
                    document.getElementById("quantity").addEventListener("input", function() {
                        var price = ' . $r[4] . ';
                        var quantity = parseInt(this.value);
                        var total = price * quantity;
                        document.getElementById("total").textContent = total.toFixed(2);
                    });
                  </script>';
            
            echo '</div>';

            echo '</div>'; // End of row
            echo '</div>'; // End of container
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Query failed: " . mysqli_error($con);
    }
} else {
    echo "Product ID not provided.";
}

include("footer.php");
?>
