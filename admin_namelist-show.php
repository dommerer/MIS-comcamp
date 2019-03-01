<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");
    
    //detail-panel
    $sql = "SELECT * FROM comcamp_users";
    $query = mysqli_query($objCon,$sql);
?>
<html>

<head>
    <title>ADMIN</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
                    <div class="row ">
                        <div class="col">
                            <?php include("admin_menu.php"); ?>
                        </div>
                    </div>

                    <form name="form1" method="post" action="save_profile.php">
                        <hr>
                        <div class="row">
                            <div class="col-10">
                                <h2 align="left">รายชื่อผู้เข้าร่วม</h2>
                            </div>
                            <div class="col-2">
                                <input class="btn btn-success" type="button" value="เพิ่มรายชื่อ"
                                    onclick="window.location.href='admin_namelist-insert.php'" />&nbsp;
                            </div>
                        </div>
                        <hr>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>
                                        <div align="center">#</div>
                                    </th>
                                    <th>
                                        <div align="center">ชื่อ </div>
                                    </th>
                                    <th>
                                        <div align="center">นามสกุล </div>
                                    </th>
                                    <th>
                                        <div align="center">ชื่อเล่น </div>
                                    </th>
                                    <th>
                                        <div align="center">เบอร์โทรศัพท์ </div>
                                    </th>
                                    <th>
                                        <div align="center">โรงเรียน </div>
                                    </th>
                                    <th>
                                        <div align="center">ชั้น </div>
                                    </th>
                                    <th>
                                        <div align="center">ตัวเลือก </div>
                                    </th>

                                </tr>
                            </thead>

                            <?php $item = 1; ?>
                            <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>

                            <tr>
                                <td>
                                    <div align="center"><?php echo $item++; ?></div>
                                </td>
                                <td><?php echo $result["firstname"];?></td>
                                <td><?php echo $result["lastname"];?></td>
                                <td>
                                    <div align="center"><?php echo $result["nickname"];?></div>
                                </td>
                                <td>
                                    <div align="center"><?php echo $result["phone"];?></div>
                                </td>
                                </td>

                                <td><?php echo $result["school"];?></td>
                                <td><?php echo $result["degree"];?></td>

                                <td align="center">
                                    <input class="btn btn-primary" type="button" value="แก้ไข"
                                        onclick="window.location.href='admin_namelist-edit.php?userID=<?php echo $result['userID'];?>'">

                                    <input class="btn btn-danger" type="button" value="ลบ"
                                        onclick="JavaScript:if(confirm('Confirm Delete?')==true){window.location='admin_namelist-delete.php?userID=<?php echo $result['userID'];?>';}">
                                </td>
                            </tr>
                            <?php
	}
  ?>
                        </table>
                        <footer class="blockquote-footer">
                            ข้อมูลข้างต้นเป็นแค่ส่วนประกอบที่ใช้สำหรับกิจกรรมภายในค่ายเท่านั้น
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