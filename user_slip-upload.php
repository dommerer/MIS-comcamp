<?php require_once('Connections/connection.php'); ?>
<?php	
	
	if($_FILES["filUpload"]["name"] != "")
	{
		if(copy($_FILES["filUpload"]["tmp_name"],"images/slip/".$_FILES["filUpload"]["name"]))
		{
			//*** Delete Old File ***//			
			@unlink("images/slip/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE comcamp_users ";
			$strSQL .=" SET slip = '".$_FILES["filUpload"]["name"]."' WHERE userID = '".$_GET["userID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL);		
		}
	}
	header('Location: user_page.php');
?>