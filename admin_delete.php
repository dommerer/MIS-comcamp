<?php
	require_once('Connections/connection.php');

	ini_set('display_errors', 1);
	error_reporting(~0);
	
	$strCustomerID = $_GET["customerID"];
	$strSQL = "DELETE FROM customer
			WHERE customerID = '".$strCustomerID."' ";

	$query = mysqli_query($objCon,$strSQL);

	if(mysqli_affected_rows($objCon)) {
		header('Location:admin_showname-list.php');
	}

	mysqli_close($objCon);
?>
</body>