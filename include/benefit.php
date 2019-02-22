<?php 
    include_once("Connections/connection.php");
    $strSQL = "SELECT * FROM benefits";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
    $benefitResult = mysqli_fetch_array($objQuery)
?>
