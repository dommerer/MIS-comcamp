<?php
	require_once('Connections/connection.php');

	ini_set('display_errors', 1);
	error_reporting(~0);
	
	$strUserID = $_GET["userID"];
	$strSQL = "DELETE FROM comcamp_users
			WHERE userID = '".$strUserID."' ";

	$query = mysqli_query($objCon,$strSQL);

	if(mysqli_affected_rows($objCon)) {
		header('Location:admin_namelist-show.php');
	}

	mysqli_close($objCon);
?>
