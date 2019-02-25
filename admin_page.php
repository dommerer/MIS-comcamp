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
    <title>ADMIN</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
                        <div class="col-4">
                            <?php include("admin_menu.php"); ?>
                        </div>
                    </div>
                    <div class="jumbotron">
                        <h1 class="display-4">สวัสดี.. คุณ <?php echo $objResult["firstname"];?></h1>
                        <p class="lead">ระบบการจัดการโครงการสัมมนาเชิงปฏิบัติการ ค่ายยุวชนคอมพิวเตอร์ <br>สาขาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยแม่โจ้</p>
                        <p class="lead"></p>
                        <hr class="my-4">
                        <p>ระบบนี้เป็นส่วนหนึ่งของรายวิชาระบบบริหารสารสนเทศเพื่อการจัดการ คพ442 ประจำปีการศึกษา 2561</p>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
    <br>
</body>

</html>
<?php
	mysqli_close($objCon);
?>