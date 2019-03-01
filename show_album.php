<?php require_once('Connections/connection.php'); ?>

<?php
	$strSQL = "SELECT * FROM comcamp_album";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
	echo"<table border=\"0\"  cellspacing=\"1\" cellpadding=\"10\"><tr>";
	$intRows = 0;
	while($objResult = mysqli_fetch_array($objQuery))
	{
		echo "<td>"; 
		$intRows++;
?>
	<center>
		<a href="show_gallery.php?AlbumID=<?php echo $objResult["AlbumID"];?>">
		<img src="images/files-album/<?php echo $objResult["AlbumShot"];?>" width="350" height="220"></a><br>
		<hr>
		<h4><?php echo $objResult["AlbumName"];?></h4>
		<br>
	</center>
	<?php
		echo"</td>";
		if(($intRows)%3==0)
		{
			echo"</tr>";
		}
	}
echo"</tr></table>";
mysqli_close($objCon);
	?>
