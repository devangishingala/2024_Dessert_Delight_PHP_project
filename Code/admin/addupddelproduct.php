	<!--header start-->
	<?php
  	session_start();
    if(isset($_SESSION["ad_session"]))
    {
   	include("header.php");
	include("../conn.php");
	$sel_cat=mysqli_query($con,"select * from category")
   ?>
    <!--header end-->
	<!--table start-->
    <div class="container-fluid mt-3" style="background-color: #050505;">
    	<?php
    	// PHP code for processing the product form submissions
    	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    		// Add Product form submission
    		// Add Product form submission
		if (isset($_POST['submit_add_product'])) 
		{
			$category_id=$_POST["category_id"];
			$product_name = $_POST['product_name'];
			$product_description = $_POST['product_description'];
			$product_price = $_POST['product_price'];
			if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === UPLOAD_ERR_OK) 
			{
				// File was uploaded successfully, process it here
				$path = "images/".$_FILES['product_image']['name'];
				move_uploaded_file($_FILES['product_image']['tmp_name'], "../".$path);
				// ... Other code ...
			} 
			else 
			{
				echo "Error uploading product image.";
			}

			$query = "INSERT INTO product (category_id,product_name, product_description, product_price, product_image ) VALUES ('$category_id','$product_name', '$product_description', $product_price, '$path')";
			$result = mysqli_query($con, $query);
    
			if ($result) 
			{
				echo "<script>windows.location='viewproduct.php'</script>";
			} else 
			{
				echo "Error adding product: " . mysqli_error($con);
			}
				//echo "<script>window.location='viewproduct.php';</script>";			
    	}
    		// Update Product form submission
		elseif (isset($_POST['submit_update_product'])) 
		{
					$product_id = $_POST['product_id'];
					$new_product_name = $_POST['new_product_name'];
					$new_product_description = $_POST['new_product_description'];
					$new_product_price = $_POST['new_product_price'];
					mysqli_query($con, "UPDATE product SET product_name = '$new_product_name', product_description = '$new_product_description', product_price = '$new_product_price' WHERE product_id = '$product_id'");
					// ... Perform any necessary processing, database updates, etc., here ...
					// For demonstration purposes, we'll just display a success message.
					echo "<h4 class='text-warning'>Product updated successfully!</h4>";
		}
				// Delete Product form submission
		elseif (isset($_POST['submit_delete_product'])) 
		{
					$product_id = $_POST['product_id'];
					mysqli_query($con, "DELETE FROM product WHERE product_id = '$product_id'");
					// ... Perform any necessary processing, database deletions, etc., here ...
					// For demonstration purposes, we'll just display a success message.
					echo "<h4 class='text-danger'>Product deleted successfully!</h4>";
		}
    	}
    	?>
    	<!-- Add product form -->
		<!-- Table with Add, Update, Delete columns and product rows -->
		<div class="container-fluid mt-3" style="background-color: #030303;">
			<h2 class="text-center" style="font-family: 'Candara', cursive; color: #fafafa; font-size: 60px; border: 3px dashed rgb(74, 204, 255);">Product Management</h2>
			<div class="table-responsive d-flex justify-content-center">
				<table class="table table-bordered table-md" style="border: 3px dashed rgb(74, 204, 255);width: 60%;">
					<thead>
						<tr style="font-family: 'Candara', cursive; color:#fafafa; font-size: 30px; ">
							<th style="width: 55%;border: 3px dashed rgb(74, 204, 255); ">Add Product</th>
							<th style="width: 55%; border: 3px dashed rgb(74, 204, 255);">Update Product</th>
							<th style="width: 33%; border: 3px dashed rgb(74, 204, 255);">Delete Product</th>
						</tr>
					</thead>
					<tbody style="color: #fafafa; border: 3px dashed rgb(74, 204, 255);">
						<tr>
							<td style="width: 33%; border: 3px dashed rgb(74, 204, 255);">
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
									<input type="hidden" name="submit_add_product" value="1">
									<label for="category_name" >Category Name:</label>
										<select name="category_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
										<?php
										while($cat=mysqli_fetch_array($sel_cat))
										{
											?>
												<option value="<?php echo $cat[0]; ?>"><?php echo $cat[1]; ?></option>
											<?php
										}
										?>
										</select>
									<br>
									<label for="product_name">Product Name:</label>
									<input type="text" name="product_name" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
									<br>
									<label for="product_description">Product Description:</label>
									<textarea name="product_description" rows="4" required style="border:2px dashed  rgb(74, 204, 255); border-radius: 5px;"></textarea>
									<br>
									<label for="product_price">Product Price:</label><br>
									<input type="number" name="product_price" step="0.01" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
									<br>
									<label for="product_image">Product Image:</label>
                                    <input type="file" name="product_image" required accept="image/*">
									<input type="submit" name="submit" value="Add Product" class="btn btn-primary mt-3">
								</form>
							</td>
							<td style="width: 33%; border: 3px dashed rgb(74, 204, 255);">
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<input type="hidden" name="submit_update_product" value="1">
									<label for="product_id">Product ID:</label>
									<input type="text" name="product_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
									<br>
									<label for="new_product_name">New Product Name:</label>
									<input type="text" name="new_product_name" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
									<br>
									<label for="new_product_description">New Product Description:</label>
									<textarea name="new_product_description" rows="4" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;"></textarea>
									<br>
									<label for="new_product_price">New Product Price:</label>
									<input type="number" name="new_product_price" step="0.01" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
									<br>
									<input type="submit" name="submit" value="Update Product" class="btn btn-primary mt-3">
								</form>
							</td>
							<td style="width: 34%;">
								<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<input type="hidden" name="submit_delete_product" value="1">
									<label for="product_id">Product ID:</label>
									<input type="text" name="product_id" required style="border:2px dashed rgb(74, 204, 255); border-radius: 5px;">
									<br>
									<input type="submit" name="submit" value="Delete Product" class="btn btn-primary mt-3">
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
	}	
	else
		echo "<script>window.location='login.php';</script>";
    ?>
    <!--footer end-->