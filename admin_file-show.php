<?php
    session_start();
    require_once('Connections/connection.php');

    ini_set('display_errors', 1);
    error_reporting(~0);

    //check-admin-panel
    include("admin_checkadmin.php");

    //detail-panel

    $sqlfile1 = "SELECT * FROM comcamp_file1 WHERE FilesID = 1";
	$queryfile1 = mysqli_query($objCon,$sqlfile1) or die ("Error Query [".$sqlfile1."]");
    $resultfile1 = mysqli_fetch_array($queryfile1,MYSQLI_ASSOC);

    $sqlfile2 = "SELECT * FROM comcamp_file1 WHERE FilesID = 2";
	$queryfile2 = mysqli_query($objCon,$sqlfile2) or die ("Error Query [".$sqlfile2."]");
    $resultfile2 = mysqli_fetch_array($queryfile2,MYSQLI_ASSOC);

    $sqlfile3 = "SELECT * FROM comcamp_file1 WHERE FilesID = 3";
	$queryfile3 = mysqli_query($objCon,$sqlfile3) or die ("Error Query [".$sqlfile3."]");
    $resultfile3 = mysqli_fetch_array($queryfile3,MYSQLI_ASSOC);

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
                        <div class="col-12">
                            <h2 align="left">ไฟล์เอกสาร</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                <table class="table" align="center" style="width: 100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                <div align="center">ไฟล์</div>
                                            </th>
                                            <th>
                                                <div align="center">ชื่อไฟล์</div>
                                            </th>
                                            <th>
                                                <div align="center">ตัวเลือก</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- ---------------------------------------------------------------------------------------------------------------- -->
                                    <tr>
                                        <td>
                                            <center><a target="_blank"
                                                    href="files/<?php echo $resultfile1["FilesName"];?>"><?php echo $resultfile1["FilesName"];?></a>
                                            </center>
                                        </td>
                                        <td>
                                            <center><?php echo $resultfile1["Name"];?></center>
                                        </td>
                                        <td>
                                            <center><input class="btn btn-primary" type="button" value="แก้ไข"
                                                    onclick="window.location.href='admin_file-edit.php?FilesID=<?php echo $resultfile1['FilesID'];?>'">
                                            </center>
                                        </td>
                                    </tr>
                                    <!-- ---------------------------------------------------------------------------------------------------------------- -->
                                    <tr>
                                        <td>
                                            <center><a target="_blank"
                                                    href="files/<?php echo $resultfile2["FilesName"];?>"><?php echo $resultfile2["FilesName"];?></a>
                                            </center>
                                        </td>
                                        <td>
                                        <center><?php echo $resultfile2["Name"];?></center>
                                        </td>
                                        <td>
                                            <center><input class="btn btn-primary" type="button" value="แก้ไข"
                                                    onclick="window.location.href='admin_file-edit.php?FilesID=<?php echo $resultfile2['FilesID'];?>'">
                                            </center>
                                        </td>
                                    </tr>
                                     <!-- ---------------------------------------------------------------------------------------------------------------- -->
                                     <tr>
                                        <td>
                                            <center><a target="_blank"
                                                    href="files/<?php echo $resultfile3["FilesName"];?>"><?php echo $resultfile3["FilesName"];?></a>
                                            </center>
                                        </td>
                                        <td>
                                        <center><?php echo $resultfile3["Name"];?></center>
                                        </td>
                                        <td>
                                            <center><input class="btn btn-primary" type="button" value="แก้ไข"
                                                    onclick="window.location.href='admin_file-edit.php?FilesID=<?php echo $resultfile3['FilesID'];?>'">
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
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