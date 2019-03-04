<?php 
    session_start();
    require_once('Connections/connection.php'); 

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");

    //detail-panel
    $sql = "SELECT * FROM comcamp_infoform4 WHERE FilesID = '".$_GET["FilesID"]."' ";
    $query = mysqli_query($objCon,$sql) or die ("Error Query [".$sql."]");
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<html>

<head>
<?php include_once("include/title-favicon.php"); ?>
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
                    <div class="row">
                        <div class="col">
                            <?php include("admin_menu.php"); ?>
                        </div>
                    </div>
                    <hr>
                    <form name="form1" method="post"
                        action="admin_payment-detail-update.php?FilesID=<?=$_GET["FilesID"];?>"
                        enctype="multipart/form-data">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h2 align="left">การชำระเงิน</h2>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="form-row align-items-center">
                                        <table style="width: 700px" align="center" class="table">
                                            <tbody>

                                                <tr>
                                                    <td><b> &nbsp;ชื่อบัญชี</td>
                                                    <td>
                                                        <input class="form-control" id="txtName" name="txtName" value="<?php echo $result["Name"];?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;เลขที่บัญชี</td>
                                                    <td>
                                                        <input class="form-control" id="txtNoAccount" name="txtNoAccount" value="<?php echo $result["NoAccount"];?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ธนาคาร</td>
                                                    <td>
                                                        <input class="form-control" id="txtBankName" name="txtBankName" value="<?php echo $result["BankName"];?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;รายละเอียด</td>
                                                    <td>
                                                        <input class="form-control" id="txtDetail" name="txtDetail" value="<?php echo $result["Detail"];?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="100"><b> &nbsp;เลือกภาพ</td>
                                                    <td width="500">
                                                        <input type="file" name="filUpload"
                                                            OnChange="showPreview(this)">
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
                                                            onclick="window.location.href='admin_payment-show.php'" />
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