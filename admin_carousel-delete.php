<?php
		include_once("Connections/connection.php");
		//*** Update Record ***//
		$FilesID = $_GET["FilesID"];
		$strSQL1 = "SELECT FilesName FROM comcamp_slids WHERE FilesID = '$FilesID' ";
		$objQuery = mysqli_query($objCon,$strSQL1);	
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_NUM);	
		$filename = $objResult[0];
		@unlink('images/slide'.$filename);
		$strSQL2 = "DELETE FROM comcamp_slids WHERE FilesID = '$FilesID' ";
		$objQuery = mysqli_query($objCon,$strSQL2);
    header('Location: admin_carousel-show.php');
?>