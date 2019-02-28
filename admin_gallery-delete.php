<?php require_once('Connections/connection.php'); ?>

    <?php
		//*** Select Old File ***//
		$strSQL = "SELECT * FROM gallery WHERE GalleryID = '".$_GET["GalleryID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
		$objResult = mysqli_fetch_array($objQuery);

		//*** Delete File ***//			
		@unlink("images/files-album/".$objResult["GalleryShot"]);
		
		//*** Delete Row ***'
		$strSQL = " DELETE FROM gallery ";
		$strSQL .=" WHERE AlbumID = '".$_GET["AlbumID"]."' AND GalleryID = '".$_GET["GalleryID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);		
		
		$AlbumID = $_GET["AlbumID"];
		header("Location: admin_gallery-upload.php?AlbumID=$AlbumID");
		mysqli_close($objCon);
?>
