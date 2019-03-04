<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include("include/title-favicon.php"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/font.css" rel="stylesheet">

<body class="kanit-font">
    <br><br><br><br><br><br><br><br><br>
    <form class="login-form" name="form" method="post" action="admin_login-check.php">
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    <h4>เข้าสู่ระบบ</h4>
                </div>
                <div class="card-body">

                    <div class="modal-body">

                        <div class="row justify-content-md-center">
                            <div class=" col-3" align="center">
                                <input type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" name="txtUsername"
                                    id="txtUsername" required /><br>
                                <input type="password" class="form-control" placeholder="รหัสผ่าน" name="txtPassword"
                                    id="txtPassword" required /><br>
                                <button class="btn btn-success">เข้าสู่ระบบ</button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <p class="card-text">*จำลองการเข้าสู่ระบบผ่านการอนุญาตสิทธิ์.</p>
                    <p class="message1" align="center">คุณยังไม่ได้ลงทะเบียน
                        <a href="register.php">ลงทะเบียน</a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</body>

</html>