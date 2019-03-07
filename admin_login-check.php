<?php
	session_start();
	require_once('Connections/connection.php');

	$strSQL = "SELECT * FROM comcamp_students WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and Password = '".mysqli_real_escape_string($objCon,MD5($_POST['txtPassword']))."'";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    
	if(!$objResult)
	{
			header("location:alert/alert_admin-incorrect.php");
	}
	else
	{
			$_SESSION["Student_Id"] = $objResult["Student_Id"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "admin")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:alert/alert_admin-page.php");
			}
	}
	mysqli_close($objCon);
?>