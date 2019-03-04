<?php
	session_start();
	require_once('Connections/connection.php');

	$strSQL = "SELECT * FROM comcamp_users WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    
	if(!$objResult)
	{
			header("location:alert/alert_user-incorrect.php");
	}
	else
	{
			$_SESSION["userID"] = $objResult["userID"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "user")
			{
				header("location:user_page.php");
			}
	}
	mysqli_close($objCon);
?>