<?php
		//*** Update Record ***//
		include_once("Connections/connection.php");
		$strSQL = "UPDATE comcamp_slids ";
		$strSQL .=" SET NAME = '".$_POST["txtName"]."' WHERE FilesID = '".$_GET["FilesID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);		
	
	if($_FILES["filUpload"]["name"] != "")
	{
		$fileName = date("YmdHis")."_".$_FILES["filUpload"]["name"];
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"images/slide/".$fileName))
		{
			//*** Delete Old File ***//			
			@unlink("images/slide/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE comcamp_slids ";
			$strSQL .=" SET FilesName = '".$fileName."' WHERE FilesID = '".$_GET["FilesID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL);		
		}
    }
    header('Location: admin_carousel-show.php');
?>
