<?php
session_start();
include("header.php");
include("conn.php");
?>

<style>
    /* Include the styles from styles.css */
    body {
    font-family: Arial, sans-serif;
}

.offer-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f8d7da;
    color: #721c24;
    padding: 20px;
    border: 1px dashed #f5c6cb;
    border-radius: 10px;
    text-align: center;
    z-index: 1000;
}

.offer-popup.show {
    display: block;
}

    body {
        font-family: Arial, sans-serif;
    }

    .offer-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #f8d7da;
        color: #721c24;
        padding: 20px;
        border: 1px dashed #f5c6cb;
        border-radius: 10px;
        text-align: center;
        z-index: 1000;
    }
    .offer-popup:hover {
    background-color: #fc7cc3; /* Change to the desired hover background color */
    }
    .offer-popup.show {
        display: block;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="styles.css">-->
    <title>Your Website</title>
</head>
<body style="background-color: #050505;">

<div class="offer-popup show">
    <p><strong>Summer Special Offer!</strong> Get a 10% discount on all products. Use code: <strong>SUMMER10</strong></p>
</div>
<div class="container-fluid">
<section class="w3ls-bnrbtm py-5" id="about">
    <h2 class="text-center" style="font-family: 'Candara', cursive; font-size: 60px; background-color: #050505; color: #f2f2f2;">View Offers </h2>
    <div class="table-responsive">
        <center>
            <table class="table table-bordered table-sm" style="border: 5px dashed rgb(74, 204, 255); color: #f2f2f2; width: 80%;">

                <!-- Table Header -->
                <thead>
                    <tr>
                        <th>Offer </th>
                        <th>Name</th>
                        <th>Discount</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>

                <!-- Table Data -->
                <tbody>
                    <?php
                    $query = "SELECT * FROM offers"; // Adjust your query
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row[0] . "</td>";
                            echo "<td>" . $row[1] . "</td>";
                            echo "<td>" . $row[2] . "</td>";
                            echo "<td>" . $row[3] . "</td>";
                            echo "<td>" . $row[4] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Error fetching offers: " . mysqli_error($con);
                    }
                    ?>
                </tbody>
            </table>

            <!-- Add a line between table header and data -->
            <hr style="border-top: 3px dashed #ff99c2; width: 80%; margin-top: 20px;">
        </center>
    </div>
</section>
</div> 

<!-- Your main content goes here -->
<?php include("footer.php"); ?>
