<?php 
    include_once("Connections/connection.php");

    $strSQL1 = "SELECT * FROM comcamp_file1 WHERE FilesID = 1";
	$objQuery1 = mysqli_query($objCon,$strSQL1) or die ("Error Query [".$strSQL1."]");
    $file1Result = mysqli_fetch_array($objQuery1);

    $strSQL2 = "SELECT * FROM comcamp_file1 WHERE FilesID = 2";
	$objQuery2 = mysqli_query($objCon,$strSQL2) or die ("Error Query [".$strSQL2."]");
    $file2Result = mysqli_fetch_array($objQuery2);

    $strSQL3 = "SELECT * FROM comcamp_file1 WHERE FilesID = 3";
	$objQuery3 = mysqli_query($objCon,$strSQL3) or die ("Error Query [".$strSQL3."]");
    $file3Result = mysqli_fetch_array($objQuery3);
?>
