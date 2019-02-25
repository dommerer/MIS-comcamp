<?php
session_start();
require_once 'Connections/connection.php';

ini_set('display_errors', 1);
error_reporting(~0);

//check-admin-panel
include "admin_checkadmin.php";

//detail-panel
$sql = "SELECT * FROM customer";
$query = mysqli_query($objCon, $sql) or die("Error Query [" . $sql . "]");
?>
<html>

<head>
    <title></title>
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
                    <div class="row">
                        <div class="col">
                            <?php include("admin_menu.php"); ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-10">
                            <h2 align="left">การชำระเงิน</h2>
                        </div>
                        <div class="col-2">
                            <input class="btn btn-success" type="button" value="การชำระเงิน"
                                onclick="window.location.href=''" />
                        </div>
                    </div>
                    <hr>


                    <table class="table" width="100%">
                        <thead class="thead-dark">
                            <tr align="center">
                                <th width="5%">ลำดับ</th>
                                <th width="15%">ชื่อ</th>
                                <th width="15%">นามสกุล</th>
                                <th width="20%">สลิป</th>
                                <th width="15%">สถานะการชำระเงิน</th>
                                <th width="25%">ตัวเลือก</th>
                            </tr>
                        </thead>
                        <?php $item = 1; ?>
                        <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
                        <tr align="center">
                            <td><?php echo $item++; ?></td>
                            <td><?php echo $result['firstname']; ?></td>
                            <td><?php echo $result['lastname']; ?></td>
                            <td><a target="_blank" href="images/slip/<?php echo $result["slip"];?>"><?php echo $result["slip"];?></a>
                            </td>
                            <td>
                                <?php 
                                    if($result['payment']=="2"){
                                            echo "<font color='#FF0000'>ยังไม่ได้ชำระ</font>";
                                    }if($result['payment']=="1"){
                                            echo "<font color='#31B404'>ชำระแล้ว</font>";
                                    }
                                ?>
                            </td>
                            <td>
                                <form action="admin_payment-update.php" method="post" name="form1">
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="hidden" name="customerID" value=<?php echo $result['customerID'];?>>
                                            <select class="form-control" name="payment" id="payment">
                                                <option disabled="disabled" selected="selected">โปรดระบุ</option>
                                                <?php
                                                    $strSQL = "SELECT * FROM payment ORDER BY payID ASC";
                                                    $objQuery = mysqli_query($objCon,$strSQL);
                                                    while($objResult = mysqli_fetch_array($objQuery)){
                                                ?>
                                                <option value="<?php echo $objResult["payID"];?>">
                                                    <?php echo $objResult["paystatus"];?>
                                                </option>
                                                <?php 
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="">
                                            <input class="btn btn-primary" name="btnSubmit" type="submit"
                                                value="บันทึก">
                                        </div>
                                    </div>
                                </form>

                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    <br>
                </blockquote>
            </div>
        </div>
    </div>
    <br>

</body>

</html>
<?php
mysqli_close($objCon);
?>