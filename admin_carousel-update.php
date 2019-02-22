<?php
		//*** Update Record ***//
		include_once("Connections/connection.php");
		$strSQL = "UPDATE files ";
		$strSQL .=" SET NAME = '".$_POST["txtName"]."' WHERE FilesID = '".$_GET["FilesID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);		
	
	if($_FILES["filUpload"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"image/".$_FILES["filUpload"]["name"]))
		{
			//*** Delete Old File ***//			
			@unlink("image/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE files ";
			$strSQL .=" SET FilesName = '".$_FILES["filUpload"]["name"]."' WHERE FilesID = '".$_GET["FilesID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL);		
		}
    }
    header('Location: admin_carousel-show.php');
?>
