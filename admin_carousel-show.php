<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");

    //detail-panel
	$sql = "SELECT * FROM comcamp_slids";
	$query = mysqli_query($objCon,$sql);
?>
<html>

<head>
    <?php include_once("include/title-favicon.php"); ?>
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
                            <h2 align="left">สไลด์</h2>
                            <h5 align="left">
                                <font color='#FF0000'>*อัตราส่วนภาพ 3 : 1 แสดงภาพสได้สูงสุด 5 ภาพ</font>
                            </h5>
                        </div>
                        <div class="col-2">
                            <input class="btn btn-success" type="button" value="เพิ่มสไลด์"
                                onclick="window.location.href='admin_carousel-insert.php'" />&nbsp;
                        </div>
                    </div>
                    <hr>
                    <div style=" width:100%; height:550px; overflow: auto;">
                        <table class="table" align="center" width="100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="20">
                                        <div align="center">#</div>
                                    </th>
                                    <th width="500">
                                        <div align="center">รูปภาพ</div>
                                    </th>
                                    <th width="350">
                                        <div align="center">ลายละเอียด</div>
                                    </th>
                                    <th width="175">
                                        <div align="center">ตัวเลือก</div>
                                    </th>
                                </tr>
                            </thead>
                            <?php $item = 1; ?>
                            <?php
	                        while($result = mysqli_fetch_array($query))
	                        {
                        ?>
                            <tr>
                                <td>
                                    <div align="center"><?php echo $item++; ?></div>
                                </td>
                                <td>
                                    <center><img src="images/slide/<?php echo $result["FilesName"];?>" width="500"
                                            height="200">
                                    </center>
                                </td>
                                <td>
                                    <left>
                                        <b>ชื่อไฟล์:</b><br>
                                        <p><?php echo $result["FilesName"];?></p>

                                        <b>รายละเอียด:</b><br>
                                        <p><?php echo $result["Name"];?></p>
                                    </left>
                                </td>
                                <td>
                                    <center>
                                        <input class="btn btn-primary" type="button" value="แก้ไข"
                                            onclick="window.location.href='admin_carousel-edit.php?FilesID=<?php echo $result['FilesID'];?>'">
                                        <input class="btn btn-danger" type="button" value="ลบ"
                                            onclick="window.location.href='admin_carousel-delete.php?FilesID=<?php echo $result['FilesID'];?>'">
                                    </center>
                                </td>
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
    <br>

</body>

</html>
<?php
mysqli_close($objCon);
?>