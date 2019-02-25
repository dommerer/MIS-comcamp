<?php require_once('Connections/connection.php'); ?>
<?php
	if(copy($_FILES["filUpload"]["tmp_name"],"images/slip/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$strSQL = "INSERT INTO customer ";
		$strSQL .="(slip) VALUES ('".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);		
	}
	header('Location: 3.php');
?>
	