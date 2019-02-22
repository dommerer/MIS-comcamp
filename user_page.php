<?php
    session_start();
    require_once('Connections/connection.php');

	if($_SESSION['customerID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['status'] != "user")
	{
		echo "This page for User only!";
		exit();
	}	

	$strSQL = "SELECT * FROM customer WHERE customerID = '".$_SESSION['customerID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/font.css" rel="stylesheet">

    <title>User</title>
</head>

<body class="kanit-font">
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row row-space">
                    <div class="col-9">
                        <h1>ยินดีตอนรับ</h2>
                            <h5>ระบบรับสมัครค่ายยุวชนคอมพิวเตอร์</h5>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <p class="label" style="border"><b>ชื่อผู้ใช้งาน :</b>
                                <?php echo $objResult["username"];?></p>&nbsp;
                            <p class="label"><b>สถานะ :</b>
                                <?php 
                                    if($_SESSION['status'] != "user"){echo "ผู้ควบคุม";}
                                    else if($_SESSION['status'] = "user"){echo "ผู้ใช้งาน";}
                                ?>
                            </p>
                        </div>
                        <div class="input-group">
                            <a href="edit_profile.php" class="btn btn-danger">แก้ไข</a>
                            &nbsp;
                            <a href="logout.php" class="btn btn-primary">ออกจากระบบ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <form>
                        <table style="width: 800px" align="center" class="table">
                            <tbody>
                                <tr>
                                    <td width=""><b> &nbsp;User ID</td>
                                    <td width="">
                                        <?php echo $objResult["customerID"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อผู้ใช้งาน</td>
                                    <td>
                                        <?php echo $objResult["username"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>&nbsp;ชื่อ</td>
                                    <td><?php echo $objResult["firstname"];?></td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;นานสกุล</td>
                                    <td>
                                        <?php echo $objResult["lastname"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อเล่น</td>
                                    <td>
                                        <?php echo $objResult["nickname"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;วันเกิด</td>
                                    <td>
                                        <?php echo $objResult["birthdate"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;อายุ</td>
                                    <td>
                                        <?php echo $objResult["age"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เพศ</td>
                                    <td>
                                        <?php echo $objResult["gender"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ศาสนา</td>
                                    <td>
                                        <?php echo $objResult["religion"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ที่อยู่</td>
                                    <td>
                                        <?php echo $objResult["address"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;อีเมล์</td>
                                    <td>
                                        <?php echo $objResult["email"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์</td>
                                    <td>
                                        <?php echo $objResult["phone"];?>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td><b> &nbsp;ชื่อผู้ปกครอง</td>
                                    <td>
                                        <?php echo $objResult["parent"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์ผู้ปกครอง</td>
                                    <td>
                                        <?php echo $objResult["phoneparent"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;โรงเรียน</td>
                                    <td>
                                        <?php echo $objResult["school"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ระดับชั้น</td>
                                    <td>
                                        <?php echo $objResult["degree"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อครูที่ปรึกษา</td>
                                    <td>
                                        <?php echo $objResult["teacher"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์ครูที่ปรึกษา</td>
                                    <td>
                                        <?php echo $objResult["phoneteacher"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ยาหรืออาหารที่แพ้</td>
                                    <td>
                                        <?php echo $objResult["allergic"];?>
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
</body>

</html>
<?php
	mysqli_close($objCon);
?>