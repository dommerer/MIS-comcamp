<?php require_once('Connections/connection.php'); ?>
<?php
    session_start();
    require_once('Connections/connection.php');

	if($_SESSION['userID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['status'] != "user")
	{
		echo "This page for User only!";
		exit();
	}	

	$strSQL = "SELECT * FROM comcamp_users WHERE userID = '".$_SESSION['userID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<?php
	$slipSQL = "SELECT * FROM comcamp_users WHERE userID = '".$_GET["userID"]."' ";
	$slipQuery = mysqli_query($objCon,$slipSQL) or die ("Error Query [".$slipSQL."]");
	$slipResult = mysqli_fetch_array($slipQuery);
?>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/font.css" rel="stylesheet">
    <title></title>
</head>

<body class="kanit-font">
    <br>
    <div class="container">
        <div class="card">
            <?php include("user_header.php"); ?>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <div class="row">
                        <div class="col-9">
                            <h2 align="left">อัพโหลดสลิป</h2>
                        </div>
                        <div class="col-3">
                        
                        <a href="user_page.php" class="btn btn-success my-2 my-sm-2">กลับหน้าข้อมูลส่วนตัว</a>
                        </div>
                    </div>
                    <hr>
                    <form name="form1" method="post"
                        action="user_slip-upload.php?userID=<?php echo $_GET["userID"];?>"
                        enctype="multipart/form-data">
                        <table style="width: 700px" align="center" class="table">
                            <tbody>
                                <tr>
                                    <td width="100"><b> &nbsp;เลือกภาพ</td>
                                    <td width="500">
                                        <input class="" type="file" name="filUpload" OnChange="showPreview(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ตัวเลือก</td>
                                    <td>
                                        <input type="hidden" name="hdnOldFile"
                                            value="<?php echo $slipResult["slip"];?>">
                                        <input class="btn btn-primary" name="btnSubmit" type="submit" value="ตกลง">
                                        <input class="btn btn-danger" type="button" value="ยกเลิก"
                                            onclick="window.location.href='user_page.php'" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;สลิป</td>
                                    <td>
                                        <img id="imgAvatar" src="images/slip/<?php echo $slipResult["slip"];?>"
                                            width="500">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <footer class="blockquote-footer">ข้อมูลข้างต้นเป็นแค่ส่วนประกอบที่ใช้สำหรับกิจกรรมภายในค่ายเท่านั้น
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
    <br>
    <script src="js/image-preview.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</body>

</html>