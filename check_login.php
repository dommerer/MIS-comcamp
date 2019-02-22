<?php
	session_start();
	require_once('Connections/connection.php');

	$strSQL = "SELECT * FROM customer WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["customerID"] = $objResult["customerID"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "admin")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}

	$authSQL = "SELECT * FROM authority WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$authQuery = mysqli_query($objCon,$authSQL);
    $authResult = mysqli_fetch_array($authQuery,MYSQLI_ASSOC);
    
	if(!$authResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["userID"] = $authResult["userID"];
			$_SESSION["status"] = $authResult["status"];

			session_write_close();
			
			if($authResult["status"] == "admin")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}
	mysqli_close($objCon);
?>