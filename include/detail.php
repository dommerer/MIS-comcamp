<?php 
    include_once("Connections/connection.php");
    $strSQL = "SELECT * FROM details";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
    $detailResult = mysqli_fetch_array($objQuery)
?>
