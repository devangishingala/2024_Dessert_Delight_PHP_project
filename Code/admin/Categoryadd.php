    <!--header start-->
    <?php
   include("header.php");
   ?>
    <!--header end-->
    
    <!--table start-->
    <div class="container-fluid mt-3" style="background-color: #050505;">
        <?php
        // PHP code for processing the form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['submit'])) {
                $category_name = $_POST['category_name'];
                $category_description = $_POST['category_description'];
                
                // ... Perform any necessary processing, database insertions, etc., here ...
                // For example, you can handle the uploaded image using $_FILES['category_image'].
                
                // For demonstration purposes, we'll just display a success message.
                echo "<h4 class='text-success'>Category added successfully!</h4>";
            }
        }
        ?>
      <h2 class="text-center" style="font-family: 'Candara', cursive; color: #fafafa; font-size: 60px; border: 3px dashed rgb(74, 204, 255);">Add New Category</h2>
         <h5 class="groove"><div class="row justify-content-center">
            <div class="col-md-12">
                <div class="groove"> <!-- Adding the groove border to enclose the entire form -->
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                       <table class="table table-bordered" style="border: 4px solid #ff99c2; border-width: thick; border-radius:10px;border: 3px dashed rgb(74, 204, 255);">
                            <tr>
                            <td style="width: 33%; border: 3px dashed rgb(74, 204, 255);">
                                    <label for="category_name" style="font-family:'Candara', cursive; color: #fafafa; font-size: 40px;border: 3px dashed rgb(74, 204, 255);">Category Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="text" name="category_name" required style="border:2px dashed #4accff; border-radius: 3px;">
                                </td>
                            </tr>
                            <tr>
                            <td style="width: 33%; border: 3px dashed rgb(74, 204, 255);">
                                    <label for="category_description" style="font-family:'Candara', cursive;color: #fafafa; font-size: 40px;border: 3px dashed rgb(74, 204, 255);">Category Description:</label>
                                 &nbsp;&nbsp;   <textarea name="category_description" rows="4" required style="border:2px dashed #4accff; border-radius: 3px;"></textarea>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--table end-->
    <!--footer start-->
    <?php
    include("footer.php");
    ?>
    <!--footer end-->

