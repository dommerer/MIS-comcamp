<?php require_once('Connections/connection.php'); ?>
<?php
		//*** Update Record ***//
		$strSQL = "UPDATE comcamp_file1 ";
		$strSQL .=" SET NAME = '".$_POST["txtName"]."' WHERE FilesID = '".$_GET["FilesID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);		
	
	if($_FILES["filUpload"]["name"] != "")
	{
		$fileName = date("YmdHis")."_".$_FILES["filUpload"]["name"];
		if(copy($_FILES["filUpload"]["tmp_name"],"files/".$fileName))
		{
			//*** Delete Old File ***//			
			@unlink("files/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE comcamp_file1 ";
			$strSQL .=" SET FilesName = '".$fileName."' WHERE FilesID = '".$_GET["FilesID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL);		
		}
	}
	header('Location: admin_file-show.php');
?>