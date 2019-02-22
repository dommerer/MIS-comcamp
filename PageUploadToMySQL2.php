<?php require_once('Connections/connection.php'); ?>
<?php
	if(copy($_FILES["filUpload"]["tmp_name"],"images/files-detail/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$strSQL = "INSERT INTO details ";
		$strSQL .="(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);		
	}
	header('Location: PageUploadToMySQL3.php');
?>
	