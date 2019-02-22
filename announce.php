<?php require_once('Connections/connection.php'); ?>


<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strSQL = "SELECT * FROM customer";
	$query = mysqli_query($objCon,$strSQL);
?>

<!DOCTYPE html>
<html >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/font.css" rel="stylesheet">

    <title>ANNOUNCE</title>

</head>

<body class="kanit-font">
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row row-space">
                    <div class="col-9">
                        <h1>ประกาศรายชื่อผู้เข้าร่วมกิจกรรม</h2>
                            <h5>ระบบรับสมัครค่ายยุวชนคอมพิวเตอร์</h5>
                    </div>
                    <div class="col-3">
                        <div class="input-group">

                        </div>
                        <div class="input-group">
                            
                            <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target=".bd-register-modal-lg">ลงทะเบียน</button>
                            &nbsp;
                            <button class="btn btn-primary" type='button' data-toggle="modal" data-target="#popUpWindow"
                                href="#" data-toggle="modal" data-target="#login-modal">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <br>
                    <div id="container">
                        <table class="table" width="100%">
                            <thead class="thead-dark">
                                <tr align="center">
                                    <th scope="col">ลำดับ</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>ชื่อเล่น</th>
                                    <th>โรงเรียน</th>
                                    <th>การชำระเงิน</th>
                                </tr>
                            </thead>
                            <?php $item = 1; ?>
                            <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
                            <tr align="center">
                                <td><?php echo $item++; ?></td>
                                <td><?php echo $result['firstname']; ?></td>
                                <td><?php echo $result['lastname']; ?></td>
                                <td><?php echo $result['nickname']; ?></td>
                                <td><?php echo $result['school']; ?></td>
                                <td><?php 
                                    if($result['payment']=="false"){
                                        echo "<font color='#FF0000'>ยังไม่ได้ชำระ</font>";
                                    }if($result['payment']=="true"){
                                        echo "<font color='1E90FF'>ชำระแล้ว</font>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <br>
                    <p align="center">
                        <a href="index.php" class="btn btn-dark">หน้าเว็บหลัก</a>
                    </p>
                    <br>
                    <footer class="blockquote-footer">ข้อมูลข้างต้นเป็นแค่ส่วนประกอบที่ใช้สำหรับกิจกรรมภายในค่ายเท่านั้น
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
    <br>

    <!-- Login Modal -->
    <?php include("login.php"); ?>

    <!-- Register modal -->
    <?php include("register.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
    window.jQuery || document.write('<script src="vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/age-calculate.js"></script>
</body>
</html>
<?php
mysqli_close($objCon);
?>