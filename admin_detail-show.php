<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //control-panel
	if($_SESSION['customerID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	if($_SESSION['status'] != "admin")
	{
		echo "This page for Admin only!";
		exit();
	}	
	$strSQL = "SELECT * FROM customer WHERE customerID = '".$_SESSION['customerID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

    //detail-panel
	$sqldetail = "SELECT * FROM details";
    $querydetail = mysqli_query($objCon,$sqldetail) or die ("Error Query [".$sqldetail."]");
    
    $sqlbenefit = "SELECT * FROM benefits";
    $querybenefit = mysqli_query($objCon,$sqlbenefit) or die ("Error Query [".$sqlbenefit."]");
    
    $sqlphotoset = "SELECT * FROM photosets";
    $queryphotoset = mysqli_query($objCon,$sqlphotoset) or die ("Error Query [".$sqlphotoset."]");
    
    $sqlregister = "SELECT * FROM registers";
	$queryregister = mysqli_query($objCon,$sqlregister) or die ("Error Query [".$sqlregister."]");
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
            <div class="card-header">
                <div class="row row-space">
                    <div class="col-8">
                        <h1 class="">Administator</h1>
                        <h5>ระบบรับสมัครค่ายยุวชนคอมพิวเตอร์</h5>
                    </div>
                    <div class="col-4">
                        <div class="input-group">
                            <p class="label" align="right"><b>ชื่อผู้ใช้งาน :</b>
                                <?php echo $objResult["username"];?></p>&nbsp;
                            <p class="label" align="right"><b>สถานะ :</b>
                                <?php 
                                    if($_SESSION['status'] != "user"){echo "ผู้ควบคุม";}
                                    else if($_SESSION['status'] = "user"){echo "ผู้ใช้งาน";}
                                ?>
                            </p>
                        </div>
                        <div class="input-group">
                            <input class="btn btn-dark" type="button" value="ออกจากระบบ"
                                onclick="window.location.href='logout.php';">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="row">
                        <div class="col">
                            <?php include("admin_menu.php"); ?>
                        </div>
                    </div>
                    <!-- about------------------------------------------------------------------------------------------- -->
                    <br>


                    <table class="table"  align="center">
                        <thead class="">
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
                        </thead>
                        <?php
	                        while($resultdetail = mysqli_fetch_array($querydetail))
	                        {
                        ?>

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
                        <?php
	                        }
                        ?>
                    </table>
                    <!-- benefit------------------------------------------------------------------------------------------- -->
                    <br>
                    <table class="table" width="600" align="center">
                        <thead class="">
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
                        </thead>
                        <?php
	                        while($resultbenefit = mysqli_fetch_array($querybenefit)){
                        ?>
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
                        <?php
	                        }
                        ?>
                    </table>
                    <!-- photoset------------------------------------------------------------------------------------------- -->
                    <br>
                    

                    <table class="table" width="600" align="center">
                        <thead class="">
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
                        </thead>
                        <?php
	                        while($resultphotoset = mysqli_fetch_array($queryphotoset)){
                        ?>
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
                        <?php
	                        }
                        ?>
                    </table>
                    <!-- register------------------------------------------------------------------------------------------- -->
                    <br>
                    

                    <table class="table" width="600" align="center">
                        <thead class="">
                            <tr>
                                <th width="500">
                                <div class="row">
                        <div class="col-12">
                            <h2 align="left">ภาพกิจกรรม</h2>
                        </div>
                    </div>
                                </th >
                                <th width="700">
                                    <div align="center">ข้อความ</div>
                                </th>
                                <th>
                                    <div align="center">ตัวเลือก</div>
                                </th>
                            </tr>
                        </thead>
                        <?php
	                        while($resultregister = mysqli_fetch_array($queryregister)){
                        ?>
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
                        <?php
	                        }
                        ?>
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