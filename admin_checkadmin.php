<?php
    if($_SESSION['Student_Id'] == "")
	{
		header("location:alert/alert_admin-login.php");
		exit();
	}
	if($_SESSION['Status'] != "admin")
	{
		header("location:alert/alert_admin-page.php");
		exit();
	}	
	$strSQL = "SELECT * FROM comcamp_students WHERE Student_Id = '".$_SESSION['Student_Id']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>