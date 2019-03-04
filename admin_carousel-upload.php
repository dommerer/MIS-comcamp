<?php
		include_once("Connections/connection.php");

		$fileName = date("YmdHis")."_".$_FILES["filUpload"]["name"];
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"images/slide/".$fileName))
		{
			echo "Copy/Upload Complete<br>";
			//*** Insert Record ***//
			$strSQL = "INSERT INTO comcamp_slids ";
			$strSQL .="(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$fileName."')";
			$objQuery = mysqli_query($objCon,$strSQL);		
    }
    header('Location: admin_carousel-show.php');
?>

