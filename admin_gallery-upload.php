<?php 
    session_start();
    require_once('Connections/connection.php');
    
    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");

    //detail-panel
    //album-select
    $albumSQL = "SELECT * FROM comcamp_album WHERE AlbumID = '".$_GET["AlbumID"]."' ";
	$albumQuery = mysqli_query($objCon,$albumSQL) or die ("Error Query [".$albumSQL."]");
    $albumResult = mysqli_fetch_array($albumQuery);
    //gallery-select
    $gallerySQL = "SELECT * FROM comcamp_gallery WHERE AlbumID = '".$_GET["AlbumID"]."' ORDER BY GalleryID ASC ";
	$galleryQuery = mysqli_query($objCon,$gallerySQL) or die ("Error Query [".$gallerySQL."]");
?>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/font.css" rel="stylesheet">
</head>

<body class="kanit-font">
    <br>
    <div class="container">
        <div class="card">
            <?php include("admin_header.php"); ?>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="row ">
                        <div class="col">
                            <?php include("admin_menu.php"); ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-9">
                            <h2 align="left">แกลอรี่</h2>
                        </div>
                        <div class="col-3">
                            <input class="btn btn-success" type="button" value="เพิ่มภาพ"
                                onclick="window.location.href='admin_gallery-create.php?AlbumID=<?php echo $_GET['AlbumID'];?>'" />
                            <input class="btn btn-danger" type="button" value="ยกเลิก"
                                onclick="window.location.href='admin_album-view.php'" />
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                            <div class="jumbotron">
                                <h5 align="left"><b>ชื่ออัลบั้ม:</b></h5>
                                <hr>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $albumResult["AlbumName"];?>
                                <br><br>
                                <h5 align="left"><b>ปกอัลบั้ม:</b></h5>
                                <hr>
                                <img src="images/files-album/<?php echo $albumResult["AlbumShot"];?>" width="260" height="180" align="middle">
                            </div></div>
                            <div class="col-8">
                                <table class="table" width="100%" align="center">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th width="150">
                                                <div align="center">ภาพ</div>
                                            </th>
                                            <th width="230">
                                                <div align="center">ชื่อภาพ</div>
                                            </th>
                                            <th width="150">
                                                <div align="center">ตัวเลือก</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while($galleryResult = mysqli_fetch_array($galleryQuery))
                                    {
                                    ?>
                                    <tr>
                                        <td>
                                            <center><a
                                                    href="images/files-album/<?php echo $galleryResult["GalleryShot"];?>"
                                                    target="_blank"><img
                                                        src="images/files-album/<?php echo $galleryResult["GalleryShot"];?>"
                                                        width="180" height="100"></a></center>
                                        </td>
                                        <td>
                                            <center><?php echo $galleryResult["GalleryName"];?></center>
                                        </td>
                                        <td>
                                            <center>
                                                <input class="btn btn-primary" type="button" value="แก้ไข"
                                                    onclick="window.location.href='admin_gallery-edit.php?AlbumID=<?php echo $galleryResult['AlbumID'];?>&GalleryID=<?php echo $galleryResult['GalleryID'];?>'">
                                                <input class="btn btn-danger" type="button" value="ลบ"
                                                    onclick="JavaScript:if(confirm('Confirm Delete?')==true){window.location='admin_gallery-delete.php?AlbumID=<?php echo $galleryResult['AlbumID'];?>&GalleryID=<?php echo $galleryResult['GalleryID'];?>';}">

                                            </center>
                                        </td>
                                    </tr>
                                    <?php
	                                }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
    <br>
    <script src="js/image-preview.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</body>

</html>
<?php
mysqli_close($objCon);
?>