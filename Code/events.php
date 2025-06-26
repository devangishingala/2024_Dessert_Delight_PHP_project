<!--header start-->
<?php
include("header.php");

?>
<!--header end-->

<section class="w3ls-bnrbtm py-5" id="about" style="background-color: #050505;">
    <h2 class="text-center" style="font-family: 'Candara', cursive; background-color: #050505; color: #f2f2f2; font-size: 60px;">Upcoming Events</h2>
    <div class="table-responsive">
        <center>
            <table class="table table-bordered table-sm" style="border: 5px dashed rgb(74, 204, 255); width: 80%; background-color: #050505; color: #f2f2f2;">

                <!-- Table Header -->
                <thead>
                    <tr>
                        <th>event_id</th>
                        <th>event_name</th>
                        <th>event_date</th>
                      
                    </tr>
                </thead>

                <!-- Table Data -->
                <tbody>
                    <?php
                    $query = "SELECT * FROM event"; // Adjust your query
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row[0] . "</td>";
                            echo "<td>" . $row[1] . "</td>";
                            echo "<td>" . $row[2] . "</td>";
                           
                            echo "</tr>";
                        }
                    } else {
                        echo "Error fetching feedback: " . mysqli_error($con);
                    }
                    ?>
                </tbody>
            </table>

            <!-- Add a line between table header and data -->
            <hr style="border-top: 3px dashed #ff99c2; width: 80%; margin-top: 20px;">
        </center>
    </div>
</section>

<!--footer Start-->
<?php
include("footer.php");
?>
<!--Footer end-->
