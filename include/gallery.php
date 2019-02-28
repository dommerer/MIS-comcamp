<?php 
	require_once('Connections/connection.php');

	$gallerySQL = "SELECT * FROM album WHERE AlbumID = '".$_GET["AlbumID"]."' ";
	$galleryQuery = mysqli_query($objCon,$gallerySQL) or die ("Error Query [".$gallerySQL."]");
	$galleryResult = mysqli_fetch_array($galleryQuery);

	$gallerySQL2 = "SELECT * FROM gallery WHERE AlbumID = '".$_GET["AlbumID"]."' ORDER BY GalleryID ASC ";
	$galleryQuery2 = mysqli_query($objCon,$gallerySQL2) or die ("Error Query [".$gallerySQL2."]");
?>