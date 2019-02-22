
<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <input type="button" class="btn btn-secondary" value="หน้าแรก" onclick="window.location.href='admin_page.php';">
    <input type="button" class="btn btn-secondary" value="รายชื่อผู้เข้าร่วม" onclick="window.location.href='admin_showname-list.php';">
    <input type="button" class="btn btn-secondary" value="สไลด์หน้าหลัก" onclick="window.location.href='admin_carousel-show.php';">
    <input type="button" class="btn btn-secondary" value="รายละเอียดหน้าหลัก" onclick="window.location.href='admin_detail-show.php';">
    <input type="button" class="btn btn-secondary" value="การชำระเงิน" onclick="window.location.href='admin_payment-show.php';">

    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            เพิ่มเติม
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">1</a>
            <a class="dropdown-item" href="#">2</a>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>