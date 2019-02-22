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
    $sql = "SELECT * FROM customer";
    $query = mysqli_query($objCon,$sql);
    
	
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
            <div class="card-header">
                <div class="row row-space">
                    <div class="col-8">
                        <h1>Administator</h1>
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
                    <div class="row ">
                        <div class="col">
                            <?php include("admin_menu.php"); ?>
                        </div>
                    </div>

                    <form name="form1" method="post" action="save_profile.php">
                        <hr>
                        
                        <div class="row">
                        <div class="col-10">
                        <h2 align="left">รายชื่อผู้เข้าร่วม</h2>
                        </div>
                        <div class="col-2">
                        <input class="btn btn-success" type="button" value="เพิ่มรายชื่อ"
                                onclick="window.location.href='admin_insert.php'" />&nbsp;
                        </div>
                    </div>
                        <hr>

                        <input type="hidden" name="hdnCmd" value="">
                        <table class="table" width="600">
                            <thead class="thead-dark">
                                <tr>
                                    <th>
                                        <div align="center">#</div>
                                    </th>
                                    <th>
                                        <div align="center">ชื่อ </div>
                                    </th>
                                    <th>
                                        <div align="center">นามสกุล </div>
                                    </th>
                                    <th>
                                        <div align="center">ชื่อเล่น </div>
                                    </th>
                                    <th>
                                        <div align="center">เบอร์โทรศัพท์ </div>
                                    </th>
                                    <th>
                                        <div align="center">โรงเรียน </div>
                                    </th>
                                    <th>
                                        <div align="center">ชั้น </div>
                                    </th>
                                    <th>
                                        <div align="center">ตัวเลือก </div>
                                    </th>

                                </tr>
                            </thead>

                            <?php $item = 1; ?>
                            <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>

                            <tr>
                                <td>
                                    <div align="center"><?php echo $item++; ?></div>
                                </td>
                                <td><?php echo $result["firstname"];?></td>
                                <td><?php echo $result["lastname"];?></td>
                                <td>
                                    <div align="center"><?php echo $result["nickname"];?></div>
                                </td>
                                <td>
                                    <div align="center"><?php echo $result["phone"];?></div>
                                </td>
                                </td>

                                <td><?php echo $result["school"];?></td>
                                <td><?php echo $result["degree"];?></td>

                                <td align="center">
                                    <input class="btn btn-primary" type="button" value="แก้ไข"
                                        onclick="window.location.href='admin_edit.php?customerID=<?php echo $result['customerID'];?>'">

                                    <input class="btn btn-danger" type="button" value="ลบ"
                                        onclick="JavaScript:if(confirm('Confirm Delete?')==true){window.location='admin_delete.php?customerID=<?php echo $result['customerID'];?>';}">
                                </td>
                            </tr>
                            <?php
	}
  ?>
                        </table>
                        <footer class="blockquote-footer">
                            ข้อมูลข้างต้นเป็นแค่ส่วนประกอบที่ใช้สำหรับกิจกรรมภายในค่ายเท่านั้น
                            <cite title="Source Title">Source Title</cite>
                        </footer>
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