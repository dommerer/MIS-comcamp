<?php require_once('Connections/connection.php'); ?>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
	$strSQL = "SELECT * FROM customer WHERE customerID = '".$_GET["customerID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysqli_fetch_array($objQuery);
?>
    <form name="form1" method="post" action="5.php?customerID=<?=$_GET["customerID"];?>"
        enctype="multipart/form-data">
        Edit Picture :<br>
        
        <img src="images/slip/<?=$objResult["slip"];?>"><br>
        
        Picture : <input type="file" name="filUpload"><br>
        
        <input type="hidden" name="hdnOldFile" value="<?=$objResult["slip"];?>">
        
        <input name="btnSubmit" type="submit" value="Submit">
    </form>
</body>

</html>