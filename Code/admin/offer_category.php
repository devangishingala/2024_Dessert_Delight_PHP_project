<!--header start-->
<?php
session_start();

if (isset($_SESSION["ad_session"])) {
    include("header.php");
    include("../conn.php");
?>
    <!--header end-->

    <!--table start-->
    <div class="container-fluid mt-3" style="background-color: #050505;">
        <?php
        // PHP code for processing the offer form submissions
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Add offer form submission
            if (isset($_POST['submit_add_offer'])) {
                $offer_id = $_POST["offer_id"];
                $offer_name = $_POST['offer_name'];
                $offer_dicount = $_POST["offer_dicount"];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];

                $query = "INSERT INTO offers (offer_id, offer_name, offer_dicount, start_date, end_date) VALUES ('$offer_id', '$offer_name', '$offer_dicount', '$start_date', '$end_date')";

                $result = mysqli_query($con, $query);

                if ($result) {
                    echo "<script>window.location='..\Code\offers.php'</script>";
                } else {
                    echo "Error adding offer: " . mysqli_error($con);
                }
            }
            // Update offer form submission
            elseif (isset($_POST['submit_update_offer'])) {
                $new_offer_id = $_POST['new_offer_id'];
                $new_offer_name = $_POST['new_offer_name'];
                $new_offer_dicount = $_POST["new_offer_dicount"];
                $new_start_date = $_POST['new_start_date'];
                $new_end_date = $_POST['new_end_date'];

                mysqli_query($con, "UPDATE offers SET offer_name = '$new_offer_name', offer_dicount = '$new_offer_dicount', start_date = '$new_start_date', end_date = '$new_end_date' WHERE offer_id = '$new_offer_id'");
                echo "<h4 class='text-warning'>Offer updated successfully!</h4>";
            }
            // Delete offer form submission
            elseif (isset($_POST['submit_delete_offer'])) {
                $offer_id = $_POST['offer_id'];
                mysqli_query($con, "DELETE FROM offers WHERE offer_id = '$offer_id'");
                echo "<h4 class='text-danger'>Offer deleted successfully!</h4>";
            }
        }
        ?>

        <!-- Add offer form -->
        <!-- Table with Add, Update, Delete columns and offer rows -->
        <div class="container mt-3" style="background-color: #030303;">
            <h2 class="text-center" style="font-family: 'Candara', cursive; color: #fafafa; font-size: 60px;border: 3px dashed rgb(74, 204, 255);">Offer Management</h2>
            <div class="table-responsive d-flex justify-content-center">
                <table class="table table-bordered table-md" style="border: 3px dashed rgb(74, 204, 255);width: 60%;">
                    <thead>
                        <tr style="font-family: 'Candara', cursive; color: #fafafa; font-size: 30px;border: 3px dashed rgb(74, 204, 255);">
                            <th style="width: 55%;">Add offer</th>
                            <th style="width: 55%;">Update offer</th>
                            <th style="width: 33%;">Delete offer</th>
                        </tr>
                    </thead>
                    <tbody style="color: #fafafa;border: 3px dashed rgb(74, 204, 255);">
                        <tr>
                            <td style="width: 33%;border: 3px dashed rgb(74, 204, 255);">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="submit_add_offer" value="1">
                                    <label for="offer_id">Offer Id:</label>
                                    <input type="number" name="offer_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="offer_name">Offer Name:</label>
                                    <input type="text" name="offer_name" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="offer_dicount">Offer Discount:</label><br>
                                    <input type="number" name="offer_dicount" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="start_date">Offer Start Date:</label><br>
                                    <input type="date" name="start_date" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="end_date">Offer End Date:</label><br>
                                    <input type="date" name="end_date" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <input type="submit" name="submit" value="Add offer" class="btn btn-primary mt-3">
                                </form>
                            </td>
                            <td style="width: 33%;border: 3px dashed rgb(74, 204, 255);">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="submit_update_offer" value="1">
                                    <label for="offer_id">Offer ID:</label>
                                    <input type="text" name="new_offer_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="new_offer_name">New Offer Name:</label>
                                    <input type="text" name="new_offer_name" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="new_offer_dicount">New Offer Discount:</label>
                                    <input type="number" name="new_offer_dicount" step="0.01" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="new_start_date">New Offer Start Date:</label>
                                    <input type="date" name="new_start_date" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="new_end_date">New Offer End Date:</label>
                                    <input type="date" name="new_end_date" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <input type="submit" name="submit" value="Update offer" class="btn btn-primary mt-3">
                                </form>
                            </td>
                            <td style="width: 34%;border: 3px dashed rgb(74, 204, 255);">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="submit_delete_offer" value="1">
                                    <label for="offer_id">Offer ID:</label>
                                    <input type="text" name="offer_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <input type="submit" name="submit" value="Delete Offer" class="btn btn-primary mt-3">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- table end -->

    <!--footer start-->
    <?php
    include("footer.php");
} else {
    echo "<script>window.location='login.php';</script>";
}
?>
<!--footer end-->
