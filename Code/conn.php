<?php
	$con=mysqli_connect("localhost","root","");
	
	if(!$con)
	{
		echo mysqli_error();
	}
	
	echo "connected....";
	$sel_cat=mysqli_select_db($con,"dessert_delight");

?>