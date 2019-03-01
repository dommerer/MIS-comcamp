<?php 
	require_once('Connections/connection.php');

	//*** Update Record ***//
	$strSQL = "UPDATE comcamp_gallery ";
	$strSQL .=" SET GalleryName = '".$_POST["txtGalleryName"]."' WHERE AlbumID = '".$_GET["AlbumID"]."' AND GalleryID = '".$_GET["GalleryID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);		

	if($_FILES["filGalleryShot"]["name"] != "")
	{
		$fileName = date("YmdHis")."_".$_FILES["filGalleryShot"]["name"];
		if(move_uploaded_file($_FILES["filGalleryShot"]["tmp_name"],"images/files-album/".$fileName))
		{

			//*** Delete Old File ***//			
			@unlink("images/files-album/".$_POST["hdnOldFile"]);
				
			//*** Update New File ***//
			$strSQL = "UPDATE comcamp_gallery ";
			$strSQL .=" SET GalleryShot = '".$fileName."' WHERE AlbumID = '".$_GET["AlbumID"]."' AND GalleryID = '".$_GET["GalleryID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL);				
			}
	}

	$AlbumID = $_GET["AlbumID"];
	header("Location: admin_gallery-upload.php?AlbumID=$AlbumID");
	mysqli_close($objCon);
?>
