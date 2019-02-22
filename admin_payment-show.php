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
	$strSQL = "SELECT * FROM customer WHERE customerID = '".$_SESSION['customerID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

    //detail-panel
	$sqldetail = "SELECT * FROM details";
    $querydetail = mysqli_query($objCon,$sqldetail) or die ("Error Query [".$sqldetail."]");
    

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
                                <?php echo $objResult["username"];?></p>&nbsp;
                            <p class="label" align="right"><b>สถานะ :</b>
                                <?php 
                                    if($_SESSION['status'] != "user"){echo "ผู้ควบคุม";}
                                    else if($_SESSION['status'] = "user"){echo "ผู้ใช้งาน";}
                                ?>
                            </p>
                        </div>
                        <div class="input-group">
                            <input class="btn btn-dark" type="button" value="ออกจากระบบ"
                                onclick="window.location.href='logout.php';">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="row">
                        <div class="col">
                            <?php include("admin_menu.php"); ?>
                        </div>
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