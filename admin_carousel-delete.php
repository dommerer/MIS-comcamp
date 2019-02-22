<?php
		include_once("Connections/connection.php");
		//*** Update Record ***//
		$FilesID = $_GET["FilesID"];
		$strSQL1 = "SELECT FilesName FROM files WHERE FilesID = '$FilesID' ";
		$objQuery = mysqli_query($objCon,$strSQL1);	
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_NUM);	
		$filename = $objResult[0];
		@unlink('image/'.$filename);
		$strSQL2 = "DELETE FROM files WHERE FilesID = '$FilesID' ";
		$objQuery = mysqli_query($objCon,$strSQL2);
    header('Location: admin_carousel-show.php');
?>

=
