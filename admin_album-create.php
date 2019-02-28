<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");
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
                            <h2 align="left">สร้างอัลบั้ม</h2>
                        </div>
                        <div class="col-2">
                            <input class="btn btn-success" type="button" value="ยกเลิก"
                                onclick="window.location.href='admin_album-view.php'" />
                        </div>
                    </div>
                    <hr>
                    <form name="form1" method="post" action="admin_album-save.php" enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="form-row align-items-center">
                                        <table style="width: 700px" align="center" class="table">
                                            <tbody>
                                                <tr>
                                                    <td width="150"><b> &nbsp;เลือกภาพ</td>
                                                    <td width="500">
                                                        <input type="file" name="filAlbumShot"
                                                            OnChange="showPreview(this)">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ชื่อภาพ</td>
                                                    <td>
                                                        <input class="form-control" type="text" name="txtAlbumName"
                                                            maxlength="100">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ตัวเลือก</td>
                                                    <td>

                                                        <input class="btn btn-primary" name="btnSubmit" type="submit"
                                                            value="ตกลง">
                                                        <input class="btn btn-danger" type="button" value="ยกเลิก"
                                                            onclick="window.location.href='admin_album-view.php'" />
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
                </blockquote>
            </div>
        </div>
    </div>
    <br>
    <script src="js/image-preview.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</body>

</html>