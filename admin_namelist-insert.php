<?php
    session_start();
    require_once('Connections/connection.php');

	 //check-admin-panel
     include("admin_checkadmin.php");
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
            <?php include("admin_header.php"); ?>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <form name="form1" method="post" action="admin_namelist-insert-save.php">

                        <table style="width: 800px" align="center" class="table">
                            <tbody>
                                <tr>
                                    <td><b> &nbsp;ชื่อผู้ใช้งาน</td>
                                    <td>
                                        <input class="form-control" type="text" name="username" id="username" value="" placeholder="โปรดระบุชื่อผู้ใช้งาน"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;รหัสผ่าน</td>
                                    <td>
                                        <input class="form-control" type="password" name="password" id="password" placeholder="โปรดระบุรหัสผ่าน"
                                            value="" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ยืนยันรหัสผ่าน</td>
                                    <td>
                                        <input class="form-control" type="password" name="conpassword" id="conpassword" placeholder="โปรดระบุยืนยันรหัสผ่าน"
                                            value="" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>&nbsp;ชื่อ</td>
                                    <td>
                                        <input class="form-control" type="text" name="firstname" id="firstname" value="" placeholder="โปรดระบุชื่อ"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;นานสกุล</td>
                                    <td>
                                        <input class="form-control" type="text" name="lastname" id="lastname" value="" placeholder="โปรดระบุนานสกุล"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อเล่น</td>
                                    <td>
                                        <input class="form-control" type="text" name="nickname" id="nickname" value="" placeholder="โปรดระบุชื่อเล่น"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;วันเกิด</td>
                                    <td>
                                        <input class="form-control" type="date" name="birthdate" id="birthdate"
                                            onchange="ageCalculator()" value="<?php echo $objResult["birthdate"];?>" placeholder="โปรดระบุวันเกิด"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;อายุ</td>
                                    <td>
                                        <input class="form-control" type="text" name="age" id="age" value="" placeholder="โปรดระบุอายุ" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เพศ</td>
                                    <td>
                                        
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option disabled="disabled" selected="selected">โปรดระบุเพศ</option>
                                            <option value="ชาย">ชาย</option>
                                            <option value="หญิง">หญิง</option>
                                            
                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ศาสนา</td>
                                    <td>
                                        <select class="form-control" name="religion" id="religion" required>
                                            <option disabled="disabled" selected="selected">โปรดระบุศาสนา</option>
                                            <option value="พุทธ">พุทธ</option>
                                            <option value="คริสต์">คริสต์</option>
                                            <option value="อิสลาม">อิสลาม</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ที่อยู่</td>
                                    <td>
                                        <input class="form-control" type="text" name="address" id="address" value="" placeholder="โปรดระบุที่อยู่"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;อีเมล์</td>
                                    <td>
                                        <input class="form-control" type="email" name="email" id="email" value="" placeholder="โปรดระบุอีเมล์"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์</td>
                                    <td>
                                        <input class="form-control" type="text" name="phone" id="phone" value="" placeholder="โปรดระบุเบอร์โทรศัพท์"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อผู้ปกครอง</td>
                                    <td>
                                        <input class="form-control" type="text" name="parent" id="parent" value="" placeholder="โปรดระบุชื่อผู้ปกครอง"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์ผู้ปกครอง</td>
                                    <td>
                                        <input class="form-control" type="text" name="phoneparent" id="phoneparent"
                                            value="" placeholder="โปรดระบุเบอร์โทรศัพท์ผู้ปกครอง" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;โรงเรียน</td>
                                    <td>
                                        <input class="form-control" type="text" name="school" id="school" value="" placeholder="โปรดระบุโรงเรียน"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ระดับชั้น</td>
                                    <td>
                                        <input class="form-control" type="text" name="degree" id="degree" value="" placeholder="โปรดระบุระดับชั้น"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อครูที่ปรึกษา</td>
                                    <td>
                                        <input class="form-control" type="text" name="teacher" id="teacher" value="" placeholder="โปรดระบุชื่อครูที่ปรึกษา"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์ครูที่ปรึกษา</td>
                                    <td>
                                        <input class="form-control" type="text" name="phoneteacher" id="phoneteacher"
                                            value="" placeholder="โปรดระบุเบอร์โทรศัพท์ครูที่ปรึกษา" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ยาหรืออาหารที่แพ้</td>
                                    <td>
                                        <input class="form-control" type="text" name="allergic" id="allergic" value="" placeholder="โปรดระบุยาหรืออาหารที่แพ้"
                                            required>
                                    </td>
                                </tr>
                            </tbody>
                            <input type="hidden" id="payment" name="payment" value="2">
                        </table>
                        <div class="input-group" align="center">
                            <button class="btn btn-danger" type="submit" name="Submit" value="Save">ยืนยัน</button>
                            &nbsp;
                            <input class="btn btn-primary" type="button" value="ยกเลิก"
                                onclick="window.location.href='admin_namelist-show.php'" />

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