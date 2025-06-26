<!--header start-->
<?php
include("header.php");
include("../conn.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit_add_event'])) {
        $admin_reply = $_POST['admin_reply'];
        $faq_id = $_POST['faq_id']; // Add this line to get the FAQ id

        $query = "UPDATE faqs SET admin_reply = '$admin_reply' WHERE id = $faq_id";
        $result = mysqli_query($con, $query);

        if ($result) {
            // Redirect to FAQs.php after adding the reply
            echo "<script>window.location='faqs_admin.php'</script>";
        } else {
            echo "Error adding reply: " . mysqli_error($con);
        }
    }
}
?>
<!--header end-->

<section class="w3ls-bnrbtm" id="about">
    <h2 class="text-center" style="font-family: 'Candara', cursive; color: #fafafa; font-size: 60px; background-color: #030303; border: 3px dashed rgb(74, 204, 255);">View FAQ's </h2>
    <div class="table-responsive" style="background-color: #030303;">
        <center>
            <table class="table table-bordered table-sm" style="border: 7px solid rgb(74, 204, 255); color: #fafafa; width: 80%;border: 3px dashed rgb(74, 204, 255);">

                <!-- Table Header -->
                <thead>
                    <tr>
                        <th style="border: 3px dashed rgb(74, 204, 255);">id</th>
                        <th style="border: 3px dashed rgb(74, 204, 255);">User_question</th>
                        <th style="border: 3px dashed rgb(74, 204, 255);">Reply</th>
                    </tr>
                </thead>

                <!-- Table Data -->
                <tbody>
                    <?php
                    $query = "SELECT * FROM faqs"; // Adjust your query
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td style='border: 3px dashed rgb(74, 204, 255);'>" . $row[0] . "</td>";
                            echo "<td style='border: 3px dashed rgb(74, 204, 255);'>" . $row[1] . "</td>";
                            echo "<td style='border: 3px dashed rgb(74, 204, 255);'>" . $row[2] . "</td>";
                            echo "</tr>";

                            // Display admin reply form
                            echo "<tr>";
                            echo "<td colspan='3'>";
                            echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
                            echo "<input type='hidden' name='faq_id' value='" . $row['id'] . "'>";
                            echo "<label for='admin_reply'>Admin Reply:</label>";
                            echo "<input type='text' name='admin_reply'>";
                            echo "<input type='submit' name='submit_add_event' value='Submit Reply'>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Error fetching faqs: " . mysqli_error($con);
                    }
                    ?>
                </tbody>
            </table>

            <!-- Add a line between table header and data -->
            <hr style="border-top: 3px solid #ff99c2; width: 80%; margin-top: 20px;">
        </center>
    </div>
</section>

<!--footer Start-->
<?php
include("footer.php");
?>
<!--Footer end-->
