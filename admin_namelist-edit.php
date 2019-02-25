<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");

    $strCustomerID = null;

    if(isset($_GET["customerID"]))
    {
        $strCustomerID = $_GET["customerID"];
    }
     //detail-panel
     $sql = "SELECT * FROM customer WHERE customerID = '".$strCustomerID."' ";
     $query = mysqli_query($objCon,$sql)or die ("Error Query [".$sql."]");
     $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
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
                    <form name="form1" method="post" action="admin_namelist-update.php">
                        <table style="width: 800px" align="center" class="table">
                            <tbody>
                                <tr>
                                    <td width=""><b> &nbsp;User ID</td>
                                    <td width=""><input type="hidden" name="customerID" value="<?php echo $result["customerID"];?>">
                                        <?php echo $result["customerID"];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อผู้ใช้งาน</td>
                                    <td>
                                        <input class="form-control" type="text" name="username" id="username"
                                            value="<?php echo $result["username"];?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;รหัสผ่าน</td>
                                    <td>
                                        <input class="form-control" type="password" name="password" id="password"
                                            value="<?php echo $result["password"];?>" required>
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
                                            value="<?php echo $result["firstname"];?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;นานสกุล</td>
                                    <td>
                                        <input class="form-control" type="text" name="lastname" id="lastname"
                                            value="<?php echo $result["lastname"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อเล่น</td>
                                    <td>
                                        <input class="form-control" type="text" name="nickname" id="nickname"
                                            value="<?php echo $result["nickname"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;วันเกิด</td>
                                    <td>
                                        <input class="form-control" type="date" name="birthdate" id="birthdate"
                                            onchange="ageCalculator()" value="<?php echo $result["birthdate"];?>"
                                            required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;อายุ</td>
                                    <td>
                                        <input class="form-control" type="text" name="age" id="age"
                                            value="<?php echo $result["age"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เพศ</td>
                                    <td>
                                        <input class="form-control" type="text" name="gender" id="gender"
                                            value="<?php echo $result["gender"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ศาสนา</td>
                                    <td>
                                        <input class="form-control" type="text" name="religion" id="religion"
                                            value="<?php echo $result["religion"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ที่อยู่</td>
                                    <td>
                                        <input class="form-control" type="text" name="address" id="address"
                                            value="<?php echo $result["address"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;อีเมล์</td>
                                    <td>
                                        <input class="form-control" type="text" name="email" id="email"
                                            value="<?php echo $result["email"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์</td>
                                    <td>
                                        <input class="form-control" type="text" name="phone" id="phone"
                                            value="<?php echo $result["phone"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อผู้ปกครอง</td>
                                    <td>
                                        <input class="form-control" type="text" name="parent" id="parent"
                                            value="<?php echo $result["parent"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์ผู้ปกครอง</td>
                                    <td>
                                        <input class="form-control" type="text" name="phoneparent" id="phoneparent"
                                            value="<?php echo $result["phoneparent"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;โรงเรียน</td>
                                    <td>
                                        <input class="form-control" type="text" name="school" id="school"
                                            value="<?php echo $result["school"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ระดับชั้น</td>
                                    <td>
                                        <input class="form-control" type="text" name="degree" id="degree"
                                            value="<?php echo $result["degree"];?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ชื่อครูที่ปรึกษา</td>
                                    <td>
                                        <input class="form-control" type="text" name="teacher" id="teacher"
                                            value="<?php echo $result["teacher"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;เบอร์โทรศัพท์ครูที่ปรึกษา</td>
                                    <td>
                                        <input class="form-control" type="text" name="phoneteacher" id="phoneteacher"
                                            value="<?php echo $result["phoneteacher"];?>" required>

                                    </td>
                                </tr>
                                <tr>
                                    <td><b> &nbsp;ยาหรืออาหารที่แพ้</td>
                                    <td>
                                        <input class="form-control" type="text" name="allergic" id="allergic"
                                            value="<?php echo $result["allergic"];?>" required>

                                    </td>
                                </tr>
                            </tbody>
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