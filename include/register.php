<?php 
    include_once("Connections/connection.php");
    $strSQL = "SELECT * FROM comcamp_infoform3";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
    $registerResult = mysqli_fetch_array($objQuery)
?>
