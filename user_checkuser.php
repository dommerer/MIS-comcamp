<?php
    if($_SESSION['userID'] == "")
	{
		header("location:alert/alert_user-login.php");
		exit();
	}
	if($_SESSION['status'] != "user")
	{
		header("location:alert/alert_user-page.php");
		exit();
	}	
	$strSQL = "SELECT * FROM comcamp_users WHERE userID = '".$_SESSION['userID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>