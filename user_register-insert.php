<?php
    require_once('Connections/connection.php');
	if(trim($_POST["username"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["password"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["password"] != $_POST["conpassword"])
	{
		echo "Password not Match!";
		exit();
	}
	
	if(trim($_POST["firstname"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}	
    $strSQL = "SELECT * FROM comcamp_users WHERE username = '".trim($_POST['username'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{	
		$strSQL = "INSERT INTO comcamp_users (username,password,firstname,lastname,
										nickname,age,birthdate,gender,email,
										phone,address,parent,phoneparent,school,degree,
										teacher,phoneteacher,allergic,religion,status,payment) 
                    VALUES ('".$_POST["username"]."',
                            '".$_POST["password"]."',
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
		header('Location:user_page.php');
	}
	mysqli_close($objCon);
?>