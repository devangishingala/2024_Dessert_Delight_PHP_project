<!--header start-->
<?php
include("header.php");
include("../conn.php");
?>
<!--header end-->

<section class="w3ls-bnrbtm " id="about">
    <h2 class="text-center" style="font-family: 'Candara', cursive; color: #fafafa; font-size: 60px;background-color: #030303; border: 3px dashed rgb(74, 204, 255);">View Feedback </h2>
    <div class="table-responsive" style="background-color: #030303;  ">
        <center>
            <table class="table table-bordered table-sm" style="border: 3px dashed rgb(74, 204, 255); color: #fafafa; width: 80%; border-collapse: collapse;">

                <!-- Table Header -->
                <thead>
                    <tr style="border: 3px dashed rgb(74, 204, 255);">
                        <th style="border: 3px dashed rgb(74, 204, 255);">fb_id</th>
                        <th style="border: 3px dashed rgb(74, 204, 255);">Name</th>
                        <th style="border: 3px dashed rgb(74, 204, 255);">Email</th>
                        <th style="border: 3px dashed rgb(74, 204, 255);">Phone_no</th>
                        <th style="border: 3px dashed rgb(74, 204, 255);">feedback</th>
                    </tr>
                </thead>

                <!-- Table Data -->
                <tbody>
                    <?php
                    $query = "SELECT * FROM feedback"; // Adjust your query
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr style='border: 3px dashed rgb(74, 204, 255);'>";
                            echo "<td style='border: 3px dashed rgb(74, 204, 255);'>" . $row[0] . "</td>";
                            echo "<td style='border: 3px dashed rgb(74, 204, 255);'>" . $row[1] . "</td>";
                            echo "<td style='border: 3px dashed rgb(74, 204, 255);'>" . $row[2] . "</td>";
                            echo "<td style='border: 3px dashed rgb(74, 204, 255);'>" . $row[3] . "</td>";
                            echo "<td style='border: 3px dashed rgb(74, 204, 255);'>" . $row[4] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Error fetching feedback: " . mysqli_error($con);
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
