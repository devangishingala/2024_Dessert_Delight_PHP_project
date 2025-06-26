<!--header start-->
<?php
session_start();
if (isset($_SESSION["ad_session"])) {
    include("header.php");
    include("../conn.php");
    $result = mysqli_query($con, "select * from product");
    ?>
    <!--header end-->
    <!-- table start -->
    <!-- Table with Add, Update, Delete columns and product rows -->

    <h2 class="text-center" style="font-family: 'Candara', cursive; color: #fafafa; font-size: 60px; background-color: #030303;border: 3px dashed rgb(74, 204, 255);">View Product </h2>
    <div class="table-responsive" style="background-color: #030303;">
        <center>
            <table class="table table-bordered table-sm" style="border: 3px dashed rgb(74, 204, 255); width: 80%; color: #fafafa;">

                <?php
                echo "<tr>";

                $no = mysqli_num_fields($result);
                for ($i = 0; $i < $no; $i++) {
                    $fieldinfo = mysqli_fetch_field_direct($result, $i);
                    echo "<th style='border: 1px dashed rgb(74, 204, 255);'>" . $fieldinfo->name . "</th>";
                }
                echo "<tr>";

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td style='border: 1px dashed rgb(74, 204, 255);'>" . $row[0] . "</td>";
                    echo "<td style='border: 1px dashed rgb(74, 204, 255);'>" . $row[1] . "</td>";
                    echo "<td style='border: 1px dashed rgb(74, 204, 255);'>" . $row[2] . "</td>";
                    echo "<td style='border: 1px dashed rgb(74, 204, 255);'>" . $row[3] . "</td>";
                    echo "<td style='border: 1px dashed rgb(74, 204, 255);'>" . $row[4] . "</td>";
                    echo "<td style='border: 1px dashed rgb(74, 204, 255);'><img src='../" . $row[5] . "' height=50px width=50px></td>";
                    echo "</tr>";
                }

                ?>
        </center>
        </table>
    </div>
    </div>

    <a href="addupddelproduct.php" style="background-color: #030303;">
        <h3 align="center">Add new</h3>
    </a>

    <!-- table end -->
    <!--footer start-->
    <?php
    include("footer.php");
} else
    echo "<script>window.location='login.php';</script>";
?>
<!--footer end-->
