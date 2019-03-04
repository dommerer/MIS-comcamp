<?php require_once('Connections/connection.php'); ?>
<?php	
	
	if($_FILES["filUpload"]["name"] != "")
	{
		$fileName = date("YmdHis")."_".$_FILES["filUpload"]["name"];
		if(copy($_FILES["filUpload"]["tmp_name"],"images/slip/".$fileName))
		{
			//*** Delete Old File ***//			
			@unlink("images/slip/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE comcamp_users ";
			$strSQL .=" SET slip = '".$fileName."' WHERE userID = '".$_GET["userID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL);		
		}
	}
	header('Location: user_page.php');
?>