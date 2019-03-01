<?php require_once('Connections/connection.php'); ?>
<?php
		//*** Update Record ***//
		$strSQL = "UPDATE comcamp_infoform4 ";
		$strSQL .=" SET NAME = '".$_POST["txtName"]."' WHERE FilesID = '".$_GET["FilesID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);		
	
	if($_FILES["filUpload"]["name"] != "")
	{
		if(copy($_FILES["filUpload"]["tmp_name"],"images/files-photoset/".$_FILES["filUpload"]["name"]))
		{
			//*** Delete Old File ***//			
			@unlink("images/files-photoset/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE comcamp_infoform4 ";
			$strSQL .=" SET FilesName = '".$_FILES["filUpload"]["name"]."' WHERE FilesID = '".$_GET["FilesID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL);		
		}
	}
	header('Location: admin_payment-show.php');
?>