<?php 
    session_start();
    require_once('Connections/connection.php'); 

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");

    //detail-panel
    $sql = "SELECT * FROM photosets WHERE FilesID = '".$_GET["FilesID"]."' ";
    $query = mysqli_query($objCon,$sql) or die ("Error Query [".$sql."]");
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
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
                    <form name="form1" method="post"
                        action="admin_detail-photoset-update.php?FilesID=<?=$_GET["FilesID"];?>"
                        enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="form-row align-items-center">
                                        <table style="width: 700px" align="center" class="table">
                                            <tbody>
                                                <tr>
                                                    <td width="100"><b> &nbsp;เลือกภาพ</td>
                                                    <td width="500">
                                                        <input type="file" name="filUpload"
                                                            OnChange="showPreview(this)">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ข้อความ</td>
                                                    <td>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="5" name="txtName"><?php echo $result["Name"];?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ตัวเลือก</td>
                                                    <td>
                                                        <input type="hidden" name="hdnOldFile"
                                                            value="<?php echo $result["FilesName"];?>">
                                                        <input class="btn btn-primary" name="btnSubmit" type="submit"
                                                            value="ตกลง">
                                                        <input class="btn btn-danger" type="button" value="ยกเลิก"
                                                            onclick="window.location.href='admin_detail-show.php'" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ตัวอย่างภาพ</td>
                                                    <td>
                                                        <img id="imgAvatar"
                                                            src="images/files-photoset/<?php echo $result["FilesName"];?>"
                                                            width="540" height="350">
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
    </form>
</body>

</html>