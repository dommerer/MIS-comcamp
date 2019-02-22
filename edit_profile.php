<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

	if($_SESSION['customerID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	$strSQL = "SELECT * FROM customer WHERE customerID = '".$_SESSION['customerID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>

<html>

<head>
    <title>EDIT</title>
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
                    <div class="col-9">
                        <h1 class="">แก้ไขข้อมูล</h1>
                        <h5>ระบบรับสมัครค่ายยุวชนคอมพิวเตอร์</h5>
                    </div>
                    <div class="col-3">
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
                            <input class="btn btn-primary" type="button" value="ยกเลิก"
                                onclick="window.location.href='user_page.php'" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <form name="form1" method="post" action="save_profile.php">

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
                                        <input class="form-control" type="text" name="username" id="username"
                                            value="<?php echo $objResult["username"];?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;รหัสผ่าน</td>
                                    <td>
                                        <input class="form-control" type="password" name="password" id="password"
                                            value="<?php echo $objResult["password"];?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ยืนยันรหัสผ่าน</td>
                                    <td>
                                        <input class="form-control" type="password" name="conpassword" id="conpassword"
                                            value="" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>&nbsp;ชื่อ</td>
                                    <td>
                                        <input class="form-control" type="text" name="firstname" id="firstname"
                                            value="<?php echo $objResult["firstname"];?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;นานสกุล</td>
                                    <td>
                                        <input class="form-control" type="text" name="lastname" id="lastname"
                                            value="<?php echo $objResult["lastname"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อเล่น</td>
                                    <td>
                                        <input class="form-control" type="text" name="nickname" id="nickname"
                                            value="<?php echo $objResult["nickname"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;วันเกิด</td>
                                    <td>
                                        <input class="form-control" type="date" name="birthdate" id="birthdate"
                                            onchange="ageCalculator()" value="<?php echo $objResult["birthdate"];?>"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;อายุ</td>
                                    <td>
                                        <input class="form-control" type="text" name="age" id="age"
                                            value="<?php echo $objResult["age"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เพศ</td>
                                    <td>
                                        <input class="form-control" type="text" name="gender" id="gender"
                                            value="<?php echo $objResult["gender"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ศาสนา</td>
                                    <td>
                                        <input class="form-control" type="text" name="religion" id="religion"
                                            value="<?php echo $objResult["religion"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ที่อยู่</td>
                                    <td>
                                        <input class="form-control" type="text" name="address" id="address"
                                            value="<?php echo $objResult["address"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;อีเมล์</td>
                                    <td>
                                        <input class="form-control" type="text" name="email" id="email"
                                            value="<?php echo $objResult["email"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์</td>
                                    <td>
                                        <input class="form-control" type="text" name="phone" id="phone"
                                            value="<?php echo $objResult["phone"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อผู้ปกครอง</td>
                                    <td>
                                        <input class="form-control" type="text" name="parent" id="parent"
                                            value="<?php echo $objResult["parent"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์ผู้ปกครอง</td>
                                    <td>
                                        <input class="form-control" type="text" name="phoneparent" id="phoneparent"
                                            value="<?php echo $objResult["phoneparent"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;โรงเรียน</td>
                                    <td>
                                        <input class="form-control" type="text" name="school" id="school"
                                            value="<?php echo $objResult["school"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ระดับชั้น</td>
                                    <td>
                                        <input class="form-control" type="text" name="degree" id="degree"
                                            value="<?php echo $objResult["degree"];?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อครูที่ปรึกษา</td>
                                    <td>
                                        <input class="form-control" type="text" name="teacher" id="teacher"
                                            value="<?php echo $objResult["teacher"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์ครูที่ปรึกษา</td>
                                    <td>
                                        <input class="form-control" type="text" name="phoneteacher" id="phoneteacher"
                                            value="<?php echo $objResult["phoneteacher"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ยาหรืออาหารที่แพ้</td>
                                    <td>
                                        <input class="form-control" type="text" name="allergic" id="allergic"
                                            value="<?php echo $objResult["allergic"];?>" required>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="input-group" align="center">
                            <button class="btn btn-danger" type="submit" name="Submit" value="Save">ยืนยัน</button>
                            &nbsp;
                            <input class="btn btn-primary" type="button" value="ยกเลิก"
                                onclick="window.location.href='user_page.php'" />

                        </div>
                    </form>
                    <footer class="blockquote-footer">ข้อมูลข้างต้นเป็นแค่ส่วนประกอบที่ใช้สำหรับกิจกรรมภายในค่ายเท่านั้น
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