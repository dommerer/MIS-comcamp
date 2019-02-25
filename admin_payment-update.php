<?php 
    require_once('Connections/connection.php'); 

    ini_set('display_errors', 1);
	error_reporting(~0);

	//*** Update Record ***//
	$strSQL = "UPDATE customer SET payment = '".trim($_POST["payment"])."' 
                WHERE customerID = '".$_POST["customerID"]."' ";
    $objQuery = mysqli_query($objCon,$strSQL);

    header('Location:admin_payment-show.php');
?>		