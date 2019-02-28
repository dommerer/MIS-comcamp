<?php 
    session_start();
    require_once('Connections/connection.php'); 

    ini_set('display_errors', 1);
    error_reporting(~0);
    //check-admin-panel
    include("admin_checkadmin.php");

    //detail-panel
	$albumSQL = "SELECT * FROM album";
	$albumQuery = mysqli_query($objCon,$albumSQL) or die ("Error Query [".$albumSQL."]");
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
                            <h2 align="left">อัลบั้มภาพ</h2>
                        </div>
                        <div class="col-2">
                            <input class="btn btn-success" type="button" value="สร้างอัลบั้ม"
                                onclick="window.location.href='admin_album-create.php'" />
                        </div>
                    </div>
                    <hr>
                    <div class="jumbotron">
                        <table class="table" width="100%" align="center">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="10%">
                                        <div align="center">ID </div>
                                    </th>
                                    <th width="30%">
                                        <div align="center">ปกอัลบั้ม </div>
                                    </th>
                                    <th width="30%">
                                        <div align="center">ชื่ออัลบั้ม</div>
                                    </th>
                                    <th width="30%">
                                        <div align="center">ตัวเลือก</div>
                                    </th>
                                </tr>
                            </thead>
                            <?php
	                        while($albumResult = mysqli_fetch_array($albumQuery))
	                        {
                        ?>
                            <tr>
                                <td>
                                    <div align="center"><?php echo $albumResult["AlbumID"];?></div>
                                </td>
                                <td>
                                    <center><a href="images/files-album/<?php echo $albumResult["AlbumShot"];?>"
                                            target="_blank">
                                            <img src="images/files-album/<?php echo $albumResult["AlbumShot"];?>"
                                                width="180" height="100"></a>
                                    </center>
                                </td>
                                <td>
                                    <center><?php echo $albumResult["AlbumName"];?></center>
                                </td>
                                <td>
                                    <center>
                                        <input class="btn btn-success" type="button" value="เพิ่ม"
                                            onclick="window.location.href='admin_gallery-upload.php?AlbumID=<?php echo $albumResult['AlbumID'];?>'">
                                        <input class="btn btn-primary" type="button" value="แก้ไข"
                                            onclick="window.location.href='admin_album-edit.php?AlbumID=<?php echo $albumResult['AlbumID'];?>'">
                                        <input class="btn btn-danger" type="button" value="ลบ"
                                            onclick="JavaScript:if(confirm('Confirm Delete?')==true){window.location='admin_album-delete.php?AlbumID=<?php echo $albumResult['AlbumID'];?>';}">

                                    </center>
                                </td>
                            </tr>
                            <?php
	        }
        ?>
                        </table>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
    <br>
    <script src="js/age-calculate.js"></script>
</body>

</html>
<?php
mysqli_close($objCon);
?>