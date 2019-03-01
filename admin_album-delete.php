<?php 
	require_once('Connections/connection.php');

		//*** Select Old File (Album) ***//
		$strSQL = "SELECT * FROM comcamp_album WHERE AlbumID = '".$_GET["AlbumID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
		$objResult = mysqli_fetch_array($objQuery);

		//*** Delete Files (Album) ***//			
		@unlink("images/files-album/".$objResult["AlbumShot"]);
		
		//*** Delete Rows  (Album)***//
		$strSQL = " DELETE FROM comcamp_album ";
		$strSQL .=" WHERE AlbumID = '".$_GET["AlbumID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);		
		

		//*** Loop Delete Gallery ***//
		$strSQL2 = "SELECT * FROM comcamp_gallery WHERE AlbumID = '".$_GET["AlbumID"]."' ORDER BY GalleryID ASC ";
		$objQuery2 = mysqli_query($objCon,$strSQL2) or die ("Error Query [".$strSQL2."]");
		while($objResult2 = mysqli_fetch_array($objQuery2))
		{
			//*** Delete Files (Gallery) ***//			
			@unlink("images/files-album/".$objResult2["GalleryShot"]);
		}

		//*** Delete All Rows  (Gallery)***//
		$strSQL = " DELETE FROM comcamp_gallery ";
		$strSQL .=" WHERE AlbumID = '".$_GET["AlbumID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);		

		header("Location: admin_album-view.php");
		
		mysqli_close($objCon);
?>