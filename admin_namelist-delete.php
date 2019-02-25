<?php
	require_once('Connections/connection.php');

	ini_set('display_errors', 1);
	error_reporting(~0);
	
	$strCustomerID = $_GET["customerID"];
	$strSQL = "DELETE FROM customer
			WHERE customerID = '".$strCustomerID."' ";

	$query = mysqli_query($objCon,$strSQL);

	if(mysqli_affected_rows($objCon)) {
		header('Location:admin_namelist-show.php');
	}

	mysqli_close($objCon);
?>
