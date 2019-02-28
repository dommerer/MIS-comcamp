<div class="modal fade bd-register-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ลงทะเบียน</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="register-form" name="form" method="post" action="user_register-insert.php">
                <div class="modal-body">
                    <div class="container">
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">ชื่อผู้ใช้งาน</label>
                                    <input class="form-control" type="text" name="username" id="username" required>
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">รหัสผ่าน</label>
                                    <input class="form-control" type="password" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">ยืนยันรหัสผ่าน</label>
                                    <input class="form-control" type="password" name="conpassword" id="conpassword"
                                        required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">ชื่อ (คำนำหน้า)</label>
                                    <input class="form-control" type="text" name="firstname" id=firstname" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">นามสกุล</label>
                                    <input class="form-control" type="text" name="lastname" id="lastname" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">ชื่อเล่น</label>
                                    <input class="form-control" type="text" name="nickname" id="nickname" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">วันเกิด</label>
                                    <div class="input-group-icon">
                                        <input class="form-control js-datepicker" type="date" name="birthdate"
                                            onchange="ageCalculator()" id="birthdate" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>


                                </div>
                            </div>
                            <div class="col-2">
                                <div class="from-group">
                                    <label class="col-form-label">อายุ</label>
                                    <input class="form-control" type="text" name="age" id="age" required>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="from-group">
                                    <label class="col-form-label">ศาสนา</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="form-control" name="religion" id="religion" required>
                                            <option disabled="disabled" selected="selected">โปรดระบุ</option>
                                            <option value="พุทธ">พุทธ</option>
                                            <option value="คริสต์">คริสต์</option>
                                            <option value="อิสลาม">อิสลาม</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="from-group">
                                    <label class="col-form-label">เพศ</label>
                                    <div class="p-t-10">
                                        <label class="radio-inline m-r-45">
                                            <input type="radio" checked="checked" name="gender" id="gender" value="ชาย"
                                                required> ชาย
                                            <span class="checkmark"></span>
                                        </label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" id="gender" value="หญิง" required>
                                            หญิง
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="from-group">
                            <label class="col-form-label">ที่อยู่</label>
                            <input class="form-control" type="text" name="address" id="address" required>
                        </div>

                        <div class="row row-space">
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">อีเมล์</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="example@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">หมายเลขโทรศัพท์</label>
                                    <input class="form-control" type="text" name="phone" id="phone" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-space">
                            <div class="col-8">
                                <div class="from-group">
                                    <label class="col-form-label">ชื่อผู้ปกครอง</label>
                                    <input class="form-control" type="text" name="parent" id="parent" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">หมายเลขโทรศัพท์ผู้ปกครอง</label>
                                    <input class="form-control" type="text" name="phoneparent" id="phoneparent"
                                        required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-space">
                            <div class="col-8">
                                <div class="from-group">
                                    <label class="col-form-label">โรงเรียน</label>
                                    <input class="form-control" type="text" name="school" id="school" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">ระดับชั้น</label>
                                    <input class="form-control" type="text" name="degree" id="degree" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-8">
                                <div class="from-group">
                                    <label class="col-form-label">ชื่อครูที่ปรึกษา</label>
                                    <input class="form-control" type="text" name="teacher" id="teacher" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="from-group">
                                    <label class="col-form-label">หมายเลขโทรศัพท์ครูที่ปรึกษา</label>
                                    <input class="form-control" type="text" name="phoneteacher" id="phoneteacher"
                                        required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="from-group">
                                    <label class="col-form-label">ยาหรืออาหารที่แพ้</label>
                                    <input class="form-control" type="text" name="allergic" id="allergic" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="from-group">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="status" value="user" required>
                                        <input type="hidden" id="payment" name="payment" value="2">
                                        ข้อมูลข้างต้นเป็นความจริงทุกประการ
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-primary">ยืนยันการลงทะเบียน</button>
                </div>
            </form>
        </div>
    </div>
</div>