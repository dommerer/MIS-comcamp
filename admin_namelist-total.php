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
<?php include_once("include/title-favicon.php"); ?>
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
                                <input class="btn btn-success" type="button" value="กลับหน้ารายชื่อ"
                                    onclick="window.location.href='admin_namelist-show.php'" />&nbsp;
                            </div>
                        </div>
                        <hr>
                        <div style=" width:100%; height:500px; overflow: auto;">
                            <table class="table">
                                <thead class="thead-dark" >
                                    <tr align="center" >
                                        <th>#</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>ชื่อเล่น</th>
                                        <th>วันเกิด</th>
                                        <th>อายุ</th>
                                        <th>เพศ</th>
                                        <th>อีเมล์</th>
                                        <th>เบอร์</th>
                                        <th>ที่อยู่</th>
                                        <th>ชื่อผู้ปกครอง</th>
                                        <th>เบอร์ผู้ปกครอง</th>
                                        <th>โรงเรียน</th>
                                        <th>ชั้น</th>
                                        <th>ชื่อครูที่ปรึกษา</th>
                                        <th>เบอร์ครูที่ปรึกษา</th>
                                        <th>อาหาร/ยาที่แพ้</th>
                                        <th>ศาสนา</th>
                                    </tr>
                                </thead>

                                <?php $item = 1; ?>
                                <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>

                                <tr>
                                    <td> <?php echo $item++; ?></td>
                                    <td><?php echo $result["firstname"];?></td>
                                    <td><?php echo $result["lastname"];?></td>
                                    <td><?php echo $result["nickname"];?></td>
                                    <td><?php echo $result["birthdate"];?></td>
                                    <td><?php echo $result["age"];?></td>
                                    <td><?php echo $result["gender"];?></td>
                                    <td><?php echo $result["email"];?></td>
                                    <td><?php echo $result["phone"];?></td>
                                    <td><?php echo $result["address"];?></td>
                                    <td><?php echo $result["parent"];?></td>
                                    <td><?php echo $result["phoneparent"];?></td>
                                    <td><?php echo $result["school"];?></td>
                                    <td><?php echo $result["degree"];?></td>
                                    <td><?php echo $result["teacher"];?></td>
                                    <td><?php echo $result["phoneteacher"];?></td>
                                    <td><?php echo $result["allergic"];?></td>
                                    <td><?php echo $result["religion"];?></td>
                                </tr>
                                <?php
	                                    }
                                        ?>
                            </table>
                        </div>

                </blockquote>
            </div>
        </div>
    </div>
</body>

</html>
<?php
	mysqli_close($objCon);
?>