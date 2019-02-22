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
	$sql = "SELECT * FROM files";
	$query = mysqli_query($objCon,$sql) or die ("Error Query [".$sql."]");
?>
<html>

<head>
    <title>ThaiCreate.Com Tutorial</title>
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
                    <hr>
                    <div class="row">
                        <div class="col-10">
                            <h2 align="left">สไลด์</h2>
                        </div>
                        <div class="col-2">
                            <input class="btn btn-success" type="button" value="เพิ่มสไลด์"
                                onclick="window.location.href='admin_carousel-insert.php'" />&nbsp;
                        </div>
                    </div>
                    <hr>
                    <table class="table" width="600" align="center">
                        <thead class="thead-dark">
                            <tr>
                                <th width="80">
                                    <div align="center">#</div>
                                </th>
                                <th>
                                    <div align="center">รูปภาพ</div>
                                </th>
                                <th width="160">
                                    <div align="center">ชื่อภาพ</div>
                                </th>
                                <th>
                                    <div align="center">ตัวเลือก</div>
                                </th>

                            </tr>
                        </thead>
                        <?php $item = 1; ?>
                        <?php
	                        while($result = mysqli_fetch_array($query))
	                        {
                        ?>
                        <tr>
                            <td>
                                <div align="center"><?php echo $item++; ?></div>
                            </td>
                            <td>
                                <center><img src="image/<?php echo $result["FilesName"];?>" width="500" height="200">
                                </center>
                            </td>
                            <td>
                                <center><?php echo $result["Name"];?></center>
                            </td>
                            <td>
                                <center><input class="btn btn-primary" type="button" value="แก้ไข"
                                        onclick="window.location.href='admin_carousel-edit.php?FilesID=<?php echo $result['FilesID'];?>'">

                                    <input class="btn btn-danger" type="button" value="ลบ"
                                        onclick="window.location.href='admin_carousel-delete.php?FilesID=<?php echo $result['FilesID'];?>'">
                                </center>
                            </td>
                        </tr>
                        <?php
	                        }
                        ?>
                    </table>
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