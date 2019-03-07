<?php
    require_once('Connections/connection.php');
	if(trim($_POST["username"]) == "")
	{
		header("location:alert/alert_username.php");
		exit();	
	}
	
	if(trim($_POST["password"]) == "")
	{
		header("location:alert/alert_password.php");
		exit();	
	}	
		
	if($_POST["password"] != $_POST["conpassword"])
	{
		header("location:alert/alert_password-notmatch.php");
		exit();
	}

    $strSQL = "SELECT * FROM comcamp_users WHERE username = '".trim($_POST['username'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
		header("location:alert/alert_username-already.php");
	}
	else
	{	
		$strSQL = "INSERT INTO comcamp_users (username,password,firstname,lastname,
										nickname,age,birthdate,gender,email,
										phone,address,parent,phoneparent,school,degree,
										teacher,phoneteacher,allergic,religion,status,payment) 
                    VALUES ('".$_POST["username"]."',
                            '".MD5($_POST["password"])."',
                            '".$_POST["firstname"]."',
                            '".$_POST["lastname"]."',
                            '".$_POST["nickname"]."',
                            '".$_POST["age"]."',
                            '".$_POST["birthdate"]."',
                            '".$_POST["gender"]."',
                            '".$_POST["email"]."',
                            '".$_POST["phone"]."',
                            '".$_POST["address"]."',
                            '".$_POST["parent"]."',
                            '".$_POST["phoneparent"]."',
                            '".$_POST["school"]."',
							'".$_POST["degree"]."',
                            '".$_POST["teacher"]."',
							'".$_POST["phoneteacher"]."',
                            '".$_POST["allergic"]."',
                            '".$_POST["religion"]."',
                            '".$_POST["status"]."',
							'".$_POST["payment"]."')";
        $objQuery = mysqli_query($objCon,$strSQL);
		header('Location:admin_namelist-show.php');
	}
	mysqli_close($objCon);
?>