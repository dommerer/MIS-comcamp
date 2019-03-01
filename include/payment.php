<?php 
    include_once("Connections/connection.php");
    $strSQL = "SELECT * FROM comcamp_infoform4";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
    $paymentResult = mysqli_fetch_array($objQuery)
?>
