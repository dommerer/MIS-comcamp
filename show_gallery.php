<?php require_once('Connections/connection.php'); ?>
<?php
	$strSQL = "SELECT * FROM comcamp_album WHERE AlbumID = '".$_GET["AlbumID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysqli_fetch_array($objQuery);

	$strSQL2 = "SELECT * FROM comcamp_gallery WHERE AlbumID = '".$_GET["AlbumID"]."' ORDER BY GalleryID ASC ";
	$objQuery2 = mysqli_query($objCon,$strSQL2) or die ("Error Query [".$strSQL2."]");
?>

<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/font.css" rel="stylesheet">

    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
    <script src="js/prototype.js" type="text/javascript"></script>
    <script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
    <script src="js/lightbox.js" type="text/javascript"></script>
</head>

<body class="kanit-font">
    <br>
    <div class="container">
        <div class="card">
            <div class="card text-center">
                <div class="card-header">
                    <h1><?php echo $objResult["AlbumName"];?></h1>
                </div>
                <div class="card-body">
                    
                    <a href="index.php" class="btn btn-primary">กลับหน้าหลัก</a>
					<br><br>
					
                    <?php
						echo"<table class=\"table\"><tr>";
						$intRows = 0;
						while($objResult2 = mysqli_fetch_array($objQuery2))
						{
							echo "<td>"; 
							$intRows++;
					?>
                    <center>
                        <a href="images/files-album/<?php echo $objResult2["GalleryShot"];?>" rel="lightbox[roadtrip]">
                            <img src="images/files-album/<?php echo $objResult2["GalleryShot"];?>" width="240"
                                height="180">
                        </a>

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
                <div class="card-footer text-muted">
                    โครงการสัมมนาเชิงปฏิบัติการ ค่ายยุวชนคอมพิวเตอร์ สาขาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์
                    มหาวิทยาลัยแม่โจ้
                </div>
            </div>
        </div>
    </div>
    <br>
    
</body>

</html>