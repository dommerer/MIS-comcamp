<?php 
    include_once("Connections/connection.php");
    $strSQL = "SELECT * FROM photosets";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
    $photosetResult = mysqli_fetch_array($objQuery)
?>
