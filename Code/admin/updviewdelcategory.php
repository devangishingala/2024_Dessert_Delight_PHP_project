<!--header start-->
<?php
session_start();
if (isset($_SESSION["ad_session"])) {
    include("header.php");
    include("../conn.php");
    //$sel_cat=mysqli_query($con,"select * from category")
?>
    <!--header end-->
    <!--table start-->
    <div class="container-fluid mt-3" style="background-color: #050505;">
        <?php
        // PHP code for processing the category form submissions
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Add category form submission
            if (isset($_POST['submit_add_category'])) {
                $category_name = $_POST['category_name'];

                $query = "INSERT INTO category (category_name) VALUES ('$category_name')";

                $result = mysqli_query($con, $query);

                if ($result) {
                    echo "<script>windows.location='viewcategory.php'</script>";
                } else {
                    echo "Error adding category: " . mysqli_error($con);
                }
            }
            // Update category form submission
            elseif (isset($_POST['submit_update_category'])) {
                $category_id = $_POST['category_id'];
                $new_category_name = $_POST['new_category_name'];

                mysqli_query($con, "UPDATE category SET category_name = '$new_category_name' WHERE category_id = '$category_id'");

                // ... Perform any necessary processing, database updates, etc., here ...

                // For demonstration purposes, we'll just display a success message.
                echo "<h4 class='text-warning'>category updated successfully!</h4>";
            }
            // Delete category form submission
            elseif (isset($_POST['submit_delete_category'])) {
                $category_id = $_POST['category_id'];
                mysqli_query($con, "DELETE FROM category WHERE category_id = '$category_id'");

                // ... Perform any necessary processing, database deletions, etc., here ...

                // For demonstration purposes, we'll just display a success message.
                echo "<h4 class='text-danger'>category deleted successfully!</h4>";
            }
        }
        ?>
        <!-- Add category form -->
        <!-- Table with Add, Update, Delete columns and category rows -->
        <div class="container-fluid mt-3" style="background-color: #030303;">
            <h2 class="text-center" style="font-family: 'Candara', cursive; color: #fafafa; font-size: 60px;border: 3px dashed rgb(74, 204, 255);">Category Management</h2>
            <div class="table-responsive d-flex justify-content-center">
                <table class="table table-bordered table-md" style="border: 3px dashed rgb(74, 204, 255);width: 60%;">
                    <thead>
                        <tr style="font-family: 'Candara', cursive; color: #fafafa; font-size: 30px; border: 3px dashed rgb(74, 204, 255);">
                            <th style="width: 55%;">Add Category</th>
                            <th style="width: 55%;">Update Category</th>
                            <th style="width: 33%;">Delete Category</th>
                        </tr>
                    </thead>
                    <tbody style="color: #fafafa; border: 3px dashed rgb(74, 204, 255);">
                        <tr>
                            <td style="width: 33%;">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="submit_add_category" value="1">
                                    <label for="category_name">Category Name:</label>
                                    <input type="text" name="category_name" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>

                                    <input type="submit" name="submit" value="Add category" class="btn btn-primary mt-3">
                                </form>
                            </td>
                            <td style="width: 33%;">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="submit_update_category" value="1">
                                    <label for="category_id">category ID:</label>
                                    <input type="text" name="category_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>
                                    <label for="new_category_name">New category Name:</label>
                                    <input type="text" name="new_category_name" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>

                                    <input type="submit" name="submit" value="Update category" class="btn btn-primary mt-3">
                                </form>
                            </td>
                            <td style="width: 34%;">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="submit_delete_category" value="1">
                                    <label for="category_id">category ID:</label>
                                    <input type="text" name="category_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
                                    <br>

                                    <input type="submit" name="submit" value="Delete category" class="btn btn-primary mt-3">
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
} else
    echo "<script>window.location='login.php';</script>";
?>
    <!--footer end-->
