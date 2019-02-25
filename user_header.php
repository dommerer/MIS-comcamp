<div class="card-header">
    <div class="row row-space">
        <div class="col-8">
            <h1>ยินดีตอนรับ</h2>
                <h5>โครงการสัมมนาเชิงปฏิบัติการ ค่ายยุวชนคอมพิวเตอร์ </h5>
        </div>
        <div class="col-4">
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
                <input class="btn btn-primary" type="button" value="คอมแคมป์"
                    onclick="window.location.href='index.php';">&nbsp;
                <input class="btn btn-dark" type="button" value="ออกจากระบบ"
                    onclick="window.location.href='logout.php';">
            </div>
        </div>
    </div>
</div>