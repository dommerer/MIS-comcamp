<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");

    //detail-panel
	$sqldetail = "SELECT * FROM details";
    $querydetail = mysqli_query($objCon,$sqldetail) or die ("Error Query [".$sqldetail."]");
    $resultdetail = mysqli_fetch_array($querydetail,MYSQLI_ASSOC);
                         
    $sqlbenefit = "SELECT * FROM benefits";
    $querybenefit = mysqli_query($objCon,$sqlbenefit) or die ("Error Query [".$sqlbenefit."]");
    $resultbenefit = mysqli_fetch_array($querybenefit,MYSQLI_ASSOC);

    $sqlphotoset = "SELECT * FROM photosets";
    $queryphotoset = mysqli_query($objCon,$sqlphotoset) or die ("Error Query [".$sqlphotoset."]");
    $resultphotoset = mysqli_fetch_array($queryphotoset,MYSQLI_ASSOC);
                       

    $sqlregister = "SELECT * FROM registers";
	$queryregister = mysqli_query($objCon,$sqlregister) or die ("Error Query [".$sqlregister."]");
    $resultregister = mysqli_fetch_array($queryregister,MYSQLI_ASSOC);
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
                    <br>
                    <!-- about------------------------------------------------------------------------------------------- -->
                    <table class="table" align="center" style="width: 1000px">
                        <tr>
                            <th width="500">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 align="left">เกี่ยวกับค่าย</h2>
                                    </div>
                                </div>
                            </th>
                            <th width="700">
                                <div align="center">ข้อความ</div>
                            </th>
                            <th>
                                <div align="center">ตัวเลือก</div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <center><img src="images/files-detail/<?php echo $resultdetail["FilesName"];?>"
                                        width="500" height="320">
                                </center>
                            </td>
                            <td>
                                <center><?php echo $resultdetail["Name"];?></center>
                            </td>
                            <td>
                                <center><input class="btn btn-primary" type="button" value="แก้ไข"
                                        onclick="window.location.href='admin_detail-about-edit.php?FilesID=<?php echo $resultdetail['FilesID'];?>'">
                                </center>
                            </td>
                        </tr>
                        <!-- benefit------------------------------------------------------------------------------------------- -->
                        
                        <tr>
                            <th width="500">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 align="left">ประโยชน์จากค่าย</h2>
                                    </div>
                                </div>
                            </th>
                            <th width="700">
                                <div align="center">ข้อความ</div>
                            </th>
                            <th>
                                <div align="center">ตัวเลือก</div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <center><img src="images/files-benefit/<?php echo $resultbenefit["FilesName"];?>"
                                        width="500" height="320">
                                </center>
                            </td>
                            <td>
                                <center><?php echo $resultbenefit["Name"];?></center>
                            </td>
                            <td>
                                <center><input class="btn btn-primary" type="button" value="แก้ไข"
                                        onclick="window.location.href='admin_detail-benefit-edit.php?FilesID=<?php echo $resultbenefit['FilesID'];?>'">
                                </center>
                            </td>
                        </tr>
                        <!-- photoset------------------------------------------------------------------------------------------- -->
                        <tr>
                            <th width="500">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 align="left">ภาพกิจกรรม</h2>
                                    </div>
                                </div>
                            </th>
                            <th width="700">
                                <div align="center">ข้อความ</div>
                            </th>
                            <th>
                                <div align="center">ตัวเลือก</div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <center><img src="images/files-photoset/<?php echo $resultphotoset["FilesName"];?>"
                                        width="500" height="320">
                                </center>
                            </td>
                            <td>
                                <center><?php echo $resultphotoset["Name"];?></center>
                            </td>
                            <td>
                                <center><input class="btn btn-primary" type="button" value="แก้ไข"
                                        onclick="window.location.href='admin_detail-photoset-edit.php?FilesID=<?php echo $resultphotoset['FilesID'];?>'">
                                </center>
                            </td>
                        </tr>
                        <!-- register------------------------------------------------------------------------------------------- -->
                        <tr>
                            <th width="500">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 align="left">ลงทะเบียน</h2>
                                    </div>
                                </div>
                            </th>
                            <th width="700">
                                <div align="center">ข้อความ</div>
                            </th>
                            <th>
                                <div align="center">ตัวเลือก</div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <center><img src="images/files-register/<?php echo $resultregister["FilesName"];?>"
                                        width="500" height="320">
                                </center>
                            </td>
                            <td>
                                <center><?php echo $resultregister["Name"];?></center>
                            </td>
                            <td>
                                <center><input class="btn btn-primary" type="button" value="แก้ไข"
                                        onclick="window.location.href='admin_detail-register-edit.php?FilesID=<?php echo $resultregister['FilesID'];?>'">
                                </center>
                            </td>
                        </tr>
                    </table>
                    <!-- ------------------------------------------------------------------------------------------- -->
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