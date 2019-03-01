<?php 
    require_once('Connections/connection.php'); 

    ini_set('display_errors', 1);
	error_reporting(~0);

	//*** Update Record ***//
	$strSQL = "UPDATE comcamp_users SET payment = '".trim($_POST["payment"])."' 
                WHERE userID = '".$_POST["userID"]."' ";
    $objQuery = mysqli_query($objCon,$strSQL);

    header('Location:admin_payment-show.php');
?>		