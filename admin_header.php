<div class="card-header">
    <div class="row row-space">
        <div class="col-8">
            <h1 class="">Administator</h1>
            <h5>ระบบการจัดการโครงการสัมมนาเชิงปฏิบัติการ ค่ายยุวชนคอมพิวเตอร์ </h5>
        </div>
        <div class="col-4">
            <div class="input-group">
                <p class="label" align="right"><b>ชื่อผู้ใช้งาน :</b>
                    <?php echo $objResult["Username"];?></p>&nbsp;
                <p class="label" align="right"><b>สถานะ :</b>
                    <?php 
                        if($_SESSION['Status'] != "user"){echo "ผู้ควบคุม";}
                        else if($_SESSION['Status'] = "user"){echo "ผู้ใช้งาน";}
                    ?>
                </p>
            </div>
            <div class="input-group">
                <input class="btn btn-outline-success" type="button" value="คอมแคมป์"
                    onclick="window.location.href='index.php';">&nbsp;
                <input class="btn btn-dark" type="button" value="ออกจากระบบ"
                    onclick="window.location.href='admin_logout.php';">
            </div>
        </div>
    </div>
</div>