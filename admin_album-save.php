<?php 
	require_once('Connections/connection.php');

	$fileName = date("YmdHis")."_".$_FILES["filAlbumShot"]["name"];
	if(move_uploaded_file($_FILES["filAlbumShot"]["tmp_name"],"images/files-album/".$fileName))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$strSQL = "INSERT INTO comcamp_album ";
		$strSQL .="(AlbumName,AlbumShot) VALUES ('".$_POST["txtAlbumName"]."','".$fileName."')";
		$objQuery = mysqli_query($objCon,$strSQL);		
		mysqli_close($objCon);
	}
	header("Location: admin_album-view.php");
?>