<?php 
	require_once('Connections/connection.php');
	
		//*** Update Record ***//
		$strSQL = "UPDATE album ";
		$strSQL .=" SET AlbumName = '".$_POST["txtAlbumName"]."' WHERE AlbumID = '".$_GET["AlbumID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);		
	
		if($_FILES["filAlbumShot"]["name"] != "")
		{
			$fileName = date("YmdHis")."_".$_FILES["filAlbumShot"]["name"];
			if(move_uploaded_file($_FILES["filAlbumShot"]["tmp_name"],"images/files-album/".$fileName))
			{

				//*** Delete Old File ***//			
				@unlink("images/files-album/".$_POST["hdnOldFile"]);
				
				//*** Update New File ***//
				$strSQL = "UPDATE album ";
				$strSQL .=" SET AlbumShot = '".$fileName."' WHERE AlbumID = '".$_GET["AlbumID"]."' ";
				$objQuery = mysqli_query($objCon,$strSQL);		

			}
		}
		header("Location: admin_album-view.php");

		mysqli_close($objCon);
?>
