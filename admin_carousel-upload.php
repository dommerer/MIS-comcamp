<?php
		include_once("Connections/connection.php");
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"image/".$_FILES["filUpload"]["name"]))
		{
			echo "Copy/Upload Complete<br>";
			//*** Insert Record ***//
			$strSQL = "INSERT INTO files ";
			$strSQL .="(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$_FILES["filUpload"]["name"]."')";
			$objQuery = mysqli_query($objCon,$strSQL);		
    }
    header('Location: admin_carousel-show.php');
?>

