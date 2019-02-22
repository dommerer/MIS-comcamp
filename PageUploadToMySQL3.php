<?php require_once('Connections/connection.php'); ?>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
    <?php
	$strSQL = "SELECT * FROM details";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
?>
    <table width="340" border="1">
        <tr>
            <th width="50">
                <div align="center">Files ID </div>
            </th>
            <th width="150">
                <div align="center">Picture</div>
            </th>
            <th width="150">
                <div align="center">Name</div>
            </th>
            <th width="150">
                <div align="center">Edit</div>
            </th>
        </tr>
        <?php
	while($objResult = mysqli_fetch_array($objQuery))
	{
?>
        <tr>
            <td>
                <div align="center"><?=$objResult["FilesID"];?></div>
            </td>
            <td>
                <center><img src="images/files-detail/<?=$objResult["FilesName"];?>"></center>
            </td>
            <td>
                <center><?=$objResult["Name"];?></center>
            </td>
            <td>
                <center><a href="PageUploadToMySQL4.php?FilesID=<?=$objResult["FilesID"];?>">Edit</a></center>
            </td>
        </tr>
        <?php
	}
?>
    </table>
    <?php
mysqli_close($objCon);
?>
</body>

</html>