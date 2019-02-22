<?php require_once('Connections/connection.php'); ?>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
	$strSQL = "SELECT * FROM details WHERE FilesID = '".$_GET["FilesID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysqli_fetch_array($objQuery);
?>
    <form name="form1" method="post" action="PageUploadToMySQL5.php?FilesID=<?=$_GET["FilesID"];?>"
        enctype="multipart/form-data">
        Edit Picture :<br>
        Name : <input type="text" name="txtName" value="<?=$objResult["Name"];?>"><br>
        <img src="images/files-detail/<?=$objResult["FilesName"];?>"><br>
        Picture : <input type="file" name="filUpload"><br>
        <input type="hidden" name="hdnOldFile" value="<?=$objResult["FilesName"];?>">
        <input name="btnSubmit" type="submit" value="Submit">
    </form>
</body>

</html>