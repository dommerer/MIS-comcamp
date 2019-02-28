<?php require_once('Connections/connection.php'); ?>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
		$strSQL = "SELECT * FROM album WHERE AlbumID = '".$_GET["AlbumID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
		$objResult = mysqli_fetch_array($objQuery);
?>
                <h1><?php echo $objResult["AlbumName"];?></h1>
                <?php

		$strSQL2 = "SELECT * FROM gallery WHERE AlbumID = '".$_GET["AlbumID"]."' ORDER BY GalleryID ASC ";
		$objQuery2 = mysqli_query($objCon,$strSQL2) or die ("Error Query [".$strSQL2."]");

		echo"<table border=\"1\"  cellspacing=\"1\" cellpadding=\"1\"><tr>";
		$intRows = 0;
		while($objResult2 = mysqli_fetch_array($objQuery2))
		{
			echo "<td>"; 
			$intRows++;
	?>
                <center>
                    <a href="images/files-album/<?php echo $objResult2["GalleryShot"];?>" rel="lightbox[roadtrip]"
                        title="<?php echo $objResult2["GalleryName"];?>"><img
                            src="images/files-album/<?php echo $objResult2["GalleryShot"];?>" width="100"
                            height="100"></a><br>
                    <?php echo $objResult2["GalleryName"];?>
                    <br>
                </center>
                <?php
			echo"</td>";
			if(($intRows)%4==0)
			{
				echo"</tr>";
			}
		}
		echo"</tr></table>";

		mysqli_close($objCon);
	?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>