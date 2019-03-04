<div class="modal fade" id="popUpWindow">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">เข้าสู่ระบบ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="login-form" name="form" method="post" action="user_login-check.php">
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class=" col-lg-9" align="center">
                                <input type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" name="txtUsername"
                                    id="txtUsername" required /><br>
                                <input type="password" class="form-control" placeholder="รหัสผ่าน" name="txtPassword"
                                    id="txtPassword" required /><br>
                                <button class="btn btn-success">เข้าสู่ระบบ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="message1" align="center">คุณยังไม่ได้ลงทะเบียน
                        <a href="register.php" data-toggle="modal" data-target=".bd-register-modal-lg">ลงทะเบียน</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>