<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");

    //detail-panel
    //album-select
    $albumSQL = "SELECT * FROM album WHERE AlbumID = '".$_GET["AlbumID"]."' ";
	$albumQuery = mysqli_query($objCon,$albumSQL) or die ("Error Query [".$albumSQL."]");
    $albumResult = mysqli_fetch_array($albumQuery);
    //gallery-select
    $gallerySQL = "SELECT * FROM gallery WHERE AlbumID = '".$_GET["AlbumID"]."' ORDER BY GalleryID ASC ";
    $galleryQuery = mysqli_query($objCon,$gallerySQL) or die ("Error Query [".$gallerySQL."]");
    $galleryResult = mysqli_fetch_array($galleryQuery);
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
                        <div class="col-10">
                            <h2 align="left">เพิ่มภาพในแกลอรี่</h2>
                        </div>
                        <div class="col-2">
                            <input class="btn btn-danger" type="button" value="ยกเลิก"
                                onclick="window.location.href='admin_gallery-upload.php?AlbumID=<?php echo $galleryResult['AlbumID'];?>&GalleryID=<?php echo $galleryResult['GalleryID'];?>'" />
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <h5 align="left"><b>ชื่ออัลบั้ม:</b></h5>
                                <hr>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <?php echo $albumResult["AlbumName"];?>
                                <hr>
                                <h5 align="left"><b>ปกอัลบั้ม:</b></h5>
                                <hr>
                                <img src="images/files-album/<?php echo $albumResult["AlbumShot"];?>" width="320"
                                    height="240" align="middle">
                            </div>
                            <div class="col-8">
                                <form name="form1" method="post"
                                    action="admin_gallery-save.php?AlbumID=<?php echo $_GET["AlbumID"];?>"
                                    enctype="multipart/form-data">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                <div class="form-row align-items-center">

                                                    <table style="width: 700px" align="center" class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td width="150"><b> &nbsp;เลือกภาพ</td>
                                                                <td width="500">
                                                                    <input type="file" name="filGalleryShot"
                                                                        OnChange="showPreview(this)">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b> &nbsp;ชื่อภาพ</td>
                                                                <td>
                                                                    <input class="form-control" type="text"
                                                                        name="txtGalleryName" maxlength="100">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b> &nbsp;ตัวเลือก</td>
                                                                <td>
                                                                    <input class="btn btn-primary" name="btnSubmit"
                                                                        type="submit" value="ตกลง">
                                                                    <input class="btn btn-danger" type="button"
                                                                        value="ยกเลิก"
                                                                        onclick="window.location.href='admin_gallery-upload.php?AlbumID=<?php echo $galleryResult['AlbumID'];?>&GalleryID=<?php echo $galleryResult['GalleryID'];?>'" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b> &nbsp;ตัวอย่างภาพ</td>
                                                                <td>
                                                                    <img id="imgAvatar" width="500" height="320">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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