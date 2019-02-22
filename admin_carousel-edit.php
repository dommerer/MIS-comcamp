<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //control-panel
	if($_SESSION['customerID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	if($_SESSION['status'] != "admin")
	{
		echo "This page for Admin only!";
		exit();
    }
    $sql = "SELECT * FROM customer WHERE customerID = '".$_SESSION['customerID']."' ";
	$query = mysqli_query($objCon,$sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

    //detail-panel
	$strSQL = "SELECT * FROM files WHERE FilesID = '".$_GET["FilesID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysqli_fetch_array($objQuery);
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
            <div class="card-header">
                <div class="row row-space">
                    <div class="col-8">
                        <h1 class="">Administator</h1>
                        <h5>ระบบรับสมัครค่ายยุวชนคอมพิวเตอร์</h5>
                    </div>
                    <div class="col-4">
                        <div class="input-group">
                            <p class="label" align="right"><b>ชื่อผู้ใช้งาน :</b>
                                <?php echo $result["username"];?></p>&nbsp;
                            <p class="label" align="right"><b>สถานะ :</b>
                                <?php 
                                    if($_SESSION['status'] != "user"){echo "ผู้ควบคุม";}
                                    else if($_SESSION['status'] = "user"){echo "ผู้ใช้งาน";}
                                ?>
                            </p>
                        </div>
                        <div class="input-group">
                            <input class="btn btn-danger" type="button" value="ยกเลิก"
                                onclick="window.location.href='admin_carousel-show.php'" />&nbsp;
                            <input class="btn btn-dark" type="button" value="ออกจากระบบ"
                                onclick="window.location.href='logout.php';">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <form name="form1" method="post" action="admin_carousel-update.php?FilesID=<?php echo $_GET["FilesID"];?>"
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
                                                        <input class="" type="file" name="filUpload" OnChange="showPreview(this)">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ชื่อภาพ</td>
                                                    <td>
                                                        <input class="form-control" type="text" name="txtName"
                                                            value="<?php echo $objResult["Name"];?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ตัวเลือก</td>
                                                    <td>
                                                        <input type="hidden" name="hdnOldFile"
                                                            value="<?php echo $objResult["FilesName"];?>">
                                                        <input class="btn btn-primary" name="btnSubmit" type="submit"
                                                            value="ตกลง">
                                                        <input class="btn btn-danger" type="button" value="ยกเลิก" onclick="window.location.href='admin_carousel-show.php'" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b> &nbsp;ตัวอย่างภาพ</td>
                                                    <td >
                                                    <img id="imgAvatar" src="image/<?php echo $objResult["FilesName"];?>"
                                                            width="500" height="200">
                                                   
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