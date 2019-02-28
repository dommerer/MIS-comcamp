<?php require_once('Connections/connection.php'); ?>

    <?php
	$fileName = date("YmdHis")."_".$_FILES["filGalleryShot"]["name"];
	if(move_uploaded_file($_FILES["filGalleryShot"]["tmp_name"],"images/files-album/".$fileName))
	{
		//*** Insert Record ***//
		$strSQL = "INSERT INTO gallery ";
		$strSQL .="(AlbumID,GalleryName,GalleryShot) VALUES ('".$_GET["AlbumID"]."','".$_POST["txtGalleryName"]."','".$fileName."')";
		$objQuery = mysqli_query($objCon,$strSQL);		
		mysqli_close($objCon);
		
		$AlbumID = $_GET["AlbumID"];
		header("Location: admin_gallery-upload.php?AlbumID=$AlbumID");
		mysqli_close($objCon);
	}
?>