<?php
session_start();
include "../conn.php";
if(isset($_REQUEST["ad_login"]))
{
	$getuser=mysqli_query($con,"select * from adminlogin where name='".$_REQUEST["unm"]."' AND password='".$_REQUEST["psw"]."'");
	$res=mysqli_fetch_row($getuser);
	$nores=mysqli_num_rows($getuser);
	if($nores>0)
	{
		$_SESSION["ad_session"]=$res[1];
		echo "<script>window.location='index1.php';</script>";
	}	
	else
		echo "<script>window.location='login.php';</script>";
}
else
	echo "<script>window.location='login.php';</script>";
?>