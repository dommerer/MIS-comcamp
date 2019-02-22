<?php
    session_start();
    require_once('Connections/connection.php');

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
?>
<html>

<head>
    <title>ADMIN</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontkanit.css" rel="stylesheet" type="text/css">
</head>

<body class="txt-font">


    <form name="frm" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <br>
        <h1 align="center">Welcome to Admin</h1>

        <table style="width: 600px" align="center" class="table">
            <thead class="thead-dark">
                <tr>
                    <th>
                        <div align="center">ผู้ใช้งาน</div>
                    </th>
                    <th>
                        <div align="center">ชื่อ</div>
                    </th>
                    <th>
                        <div align="center">นามสกุล</div>
                    </th>
                    <th>
                        <div align="center">สถานะ</div>
                    </th>
                    <th colspan="2">
                        <div align="center">ตัวเลือก </div>

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div align="center"><?php echo $objResult["username"];?></div>
                    </td>
                    <td>
                        <div align="center"><?php echo $objResult["firstname"];?></div>
                    </td>
                    <td>
                        <div align="center"><?php echo $objResult["lastname"];?></div>
                    </td>
                    <td>
                        <div align="center"><?php echo $objResult["status"];?></div>
                    </td>
                    <td align="center">
                        <input type="button" value="Edit" style="width:70px;" OnClick="location='edit_profile.php';">
                        <input type="button" value="Logout" style="width:70px;" OnClick="location='logout.php';">
                    </td>
                </tr>
            </tbody>

        </table>
    </form>



    <br>
    <h2 align="center">รายชื่อผู้เข้าร่วม</h2>

    <?php

//*** Add Condition ***//
if($_POST["hdnCmd"] == "Add")
{
	$strSQL = "INSERT INTO customer ";
	$strSQL .="(customerID, firstname, lastname, nickname, age, birthdate, gender, email, phone, address, parent, phoneparent, school, teacher, phoneteacher, allergic, religion) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["txtAddCustomerID"]."','".$_POST["txtAddFirstname"]."','".$_POST["txtAddLastname"]."' ";
	$strSQL .=",'".$_POST["txtAddNickname"]."','".$_POST["txtAddAge"]."','".$_POST["txtAddBirthdate"]."' ";
    $strSQL .=",'".$_POST["txtAddGender"]."','".$_POST["txtAddEmail"]."','".$_POST["txtAddPhone"]."' ";
    $strSQL .=",'".$_POST["txtAddAddress"]."','".$_POST["txtAddParent"]."','".$_POST["txtAddPhoneparent"]."' ";
    $strSQL .=",'".$_POST["txtAddSchool"]."','".$_POST["txtAddTeacher"]."','".$_POST["txtAddPhoneteacher"]."' ";
    $strSQL .=",'".$_POST["txtAddAllergic"]."','".$_POST["txtAddReligion"]."') ";
	$objQuery = mysqli_query($objCon,$strSQL);
	if(!$objQuery)
	{
		echo "Error Save [".mysqli_error()."]";
	}

}

//*** Update Condition ***//
if($_POST["hdnCmd"] == "Update")
{
	$strSQL = "UPDATE customer SET ";
	$strSQL .="customerID = '".$_POST["txtEditCustomerID"]."' ";
	$strSQL .=",firstname = '".$_POST["txtEditFirstname"]."' ";
	$strSQL .=",lastname = '".$_POST["txtEditLastname"]."' ";
	$strSQL .=",nickname = '".$_POST["txtEditNickname"]."' ";
	$strSQL .=",age = '".$_POST["txtEditAge"]."' ";
    $strSQL .=",birthdate = '".$_POST["txtEditBirthdate"]."' ";
    $strSQL .=",gender = '".$_POST["txtEditGender"]."' ";
    $strSQL .=",email = '".$_POST["txtEditEmail"]."' ";
    $strSQL .=",phone = '".$_POST["txtEditPhone"]."' ";
    $strSQL .=",address = '".$_POST["txtEditAddress"]."' ";
    $strSQL .=",parent = '".$_POST["txtEditParent"]."' ";
    $strSQL .=",phoneparent = '".$_POST["txtEditPhoneparent"]."' ";
    $strSQL .=",school = '".$_POST["txtEditSchool"]."' ";
    $strSQL .=",teacher = '".$_POST["txtEditTeacher"]."' ";
    $strSQL .=",phoneteacher = '".$_POST["txtEditPhoneteacher"]."' ";
    $strSQL .=",allergic = '".$_POST["txtEditAllergic"]."' ";
    $strSQL .=",religion = '".$_POST["txtEditReligion"]."' ";
    
	$strSQL .="WHERE customerID = '".$_POST["hdnEditCustomerID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	if(!$objQuery)
	{
		echo "Error Update [".mysqli_error()."]";
	}
}

//*** Delete Condition ***//
if($_GET["Action"] == "Del")
{
	$strSQL = "DELETE FROM customer ";
	$strSQL .="WHERE customerID = '".$_GET["CusID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	if(!$objQuery)
	{
		echo "Error Delete [".mysqli_error()."]";
	}
}

$strSQL = "SELECT * FROM customer";
$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
?>
    <form name="frmMain" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <input type="hidden" name="hdnCmd" value="">
        <table class="table" width="600">
            <thead class="thead-dark">
                <tr>
                    <th width="30">
                        <div align="center">#</div>
                    </th>
                    <th width="60">
                        <div align="center">ชื่อ </div>
                    </th>
                    <th width="60">
                        <div align="center">นามสกุล </div>
                    </th>
                    <th width="98">
                        <div align="center">ชื่อเล่น </div>
                    </th>
                    <th width="98">
                        <div align="center">วันเกิด </div>
                    </th>
                    <th width="98">
                        <div align="center">อายุ </div>
                    </th>

                    <th width="98">
                        <div align="center">เพศ </div>
                    </th>
                    <th width="198">
                        <div align="center">อีเมล์ </div>
                    </th>
                    <th width="198">
                        <div align="center">เบอร์โทรศัพท์ </div>
                    </th>
                    <th width="97">
                        <div align="center">ที่อยู่ </div>
                    </th>
                    <th width="59">
                        <div align="center">ชื่อผู้ปกครอง </div>
                    </th>
                    <th width="198">
                        <div align="center">เบอร์ผู้ปกครอง </div>
                    </th>
                    <th width="198">
                        <div align="center">โรงเรียน </div>
                    </th>
                    <th width="59">
                        <div align="center">ชื่อครูที่ปรึกษา </div>
                    </th>
                    <th width="198">
                        <div align="center">เบอร์ครูที่ปรึกษา </div>
                    </th>
                    <th width="71">
                        <div align="center">อาหารยาที่แพ้ </div>
                    </th>
                    <th width="71">
                        <div align="center">ศาสนา </div>
                    </th>
                    <th width="30">
                        <div align="center">แก้ไข </div>
                    </th>
                    <th width="30">
                        <div align="center">ลบ </div>
                    </th>
                </tr>
            </thead>
            <?php $item = 1; ?>
            <?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>

            <?php
	if($objResult["customerID"] == $_GET["CusID"] and $_GET["Action"] == "Edit")
	{
  ?>
            <tr>
                <td>
                    <div align="center">
                        <?php echo $item++; ?>
                        <input type="hidden" name="hdnEditCustomerID" size="1"
                            value="<?php echo $objResult["customerID"];?>">
                    </div>
                </td>
                <td><input type="text" name="txtEditFirstname" size="7" value="<?php echo $objResult["firstname"];?>">
                </td>
                <td><input type="text" name="txtEditLastname" size="7" value="<?php echo $objResult["lastname"];?>">
                </td>
                <td><input type="text" name="txtEditNickname" size="5" value="<?php echo $objResult["nickname"];?>">
                </td>
                <td><input type="text" name="txtEditBirthdate" size="7" value="<?php echo $objResult["birthdate"];?>">
                </td>
                <td><input type="text" name="txtEditAge" size="2" value="<?php echo $objResult["age"];?>"></td>
                <td><input type="text" name="txtEditGender" size="2" value="<?php echo $objResult["gender"];?>"></td>
                <td><input type="text" name="txtEditEmail" size="15" value="<?php echo $objResult["email"];?>"></td>
                <td><input type="text" name="txtEditPhone" size="10" value="<?php echo $objResult["phone"];?>"></td>
                <td><input type="text" name="txtEditAddress" size="20" value="<?php echo $objResult["address"];?>">
                    </div>
                </td>
                <td><input type="text" name="txtEditParent" size="10" value="<?php echo $objResult["parent"];?>"></td>
                <td><input type="text" name="txtEditPhoneparent" size="10"
                        value="<?php echo $objResult["phoneparent"];?>"></td>
                <td><input type="text" name="txtEditSchool" size="15" value="<?php echo $objResult["school"];?>"></td>
                <td><input type="text" name="txtEditTeacher" size="10" value="<?php echo $objResult["teacher"];?>"></td>
                <td><input type="text" name="txtEditPhoneteacher" size="10"
                        value="<?php echo $objResult["phoneteacher"];?>"></td>
                <td><input type="text" name="txtEditAllergic" size="10" value="<?php echo $objResult["allergic"];?>">
                </td>
                <td><input type="text" name="txtEditReligion" size="3" value="<?php echo $objResult["religion"];?>">
                </td>

                <td colspan="2" align="right">
                    <div align="center">
                        <input name="btnAdd" type="button" id="btnUpdate" value="ปรับปรุง" style="width:70px;height:px"
                            OnClick="frmMain.hdnCmd.value='Update';frmMain.submit();">
                        <input name="btnAdd" type="button" id="btnCancel" value="ยกเลิก" style="width:70px;height:px"
                            OnClick="window.location='<?php echo $_SERVER["PHP_SELF"];?>';">
                    </div>
                </td>
            </tr>
            <?php
	}
  else
	{
  ?>
            <tr>
                <td>
                    <div align="center"><?php echo $item++; ?></div>
                </td>
                <td><?php echo $objResult["firstname"];?></td>
                <td><?php echo $objResult["lastname"];?></td>
                <td>
                    <div align="center"><?php echo $objResult["nickname"];?></div>
                </td>
                <td>
                    <div align="center"><?php echo $objResult["birthdate"];?></div>
                </td>
                <td>
                    <div align="center"><?php echo $objResult["age"];?></div>
                </td>
                <td>
                    <div align="center"><?php echo $objResult["gender"];?></div>
                </td>
                <td><?php echo $objResult["email"];?></td>
                <td>
                    <div align="center"><?php echo $objResult["phone"];?></div>
                </td>
                <td><?php echo $objResult["address"];?></div>
                </td>
                <td><?php echo $objResult["parent"];?></td>
                <td>
                    <div align="center"><?php echo $objResult["phoneparent"];?></div>
                </td>
                <td><?php echo $objResult["school"];?></td>
                <td><?php echo $objResult["teacher"];?></td>
                <td>
                    <div align="center"><?php echo $objResult["phoneteacher"];?></div>
                </td>
                <td><?php echo $objResult["allergic"];?></td>
                <td>
                    <div align="center"><?php echo $objResult["religion"];?></div>
                </td>


                <td align="center"><a
                        href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&CusID=<?php echo $objResult["customerID"];?>">แก้ไข</a>
                    </div>
                </td>
                <td align="center"><a
                        href="JavaScript:if(confirm('ต้องการที่จะลบข้อมูลหรือไม่?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult["customerID"];?>';}">ลบ</a>
                    </div>
                </td>
            </tr>
            <?php
	}
  ?>
            <?php
}
?>
            <tr>
                <td>
                    <div align="center">#
                </td>
                <td><input type="text" name="txtAddFirstname" size="7" required></td>
                <td><input type="text" name="txtAddLastname" size="7" required></td>
                <td>
                    <div align="center"><input type="text" name="txtAddNickname" size="5" required></div>
                </td>
                <td>
                    <div align="center"><input type="text" name="txtAddBirthdate" size="7" required></div>
                </td>
                <td>
                    <div align="center"><input type="text" name="txtAddAge" size="2" required></div>
                </td>
                <td>
                    <div align="center"><input type="text" name="txtAddGender" size="2" required></div>
                </td>
                <td><input type="text" name="txtAddEmail" size="15"></td>
                <td>
                    <div align="center"><input type="text" name="txtAddPhone" size="10" required></div>
                </td>
                <td><input type="text" name="txtAddAddress" size="20" required></td>
                <td><input type="text" name="txtAddParent" size="10" required></td>
                <td>
                    <div align="center"><input type="text" name="txtAddPhoneparent" size="10" required></div>
                </td>
                <td><input type="text" name="txtAddSchool" size="15" required></td>
                <td><input type="text" name="txtAddTeacher" size="10" required></td>
                <td>
                    <div align="center"><input type="text" name="txtAddPhoneteacher" size="10" required></div>
                </td>
                <td><input type="text" name="txtAddAllergic" size="10" required></td>
                <td>
                    <div align="center"><input type="text" name="txtAddReligion" size="3" required></div>
                </td>

                <td colspan="2" align="right">
                    <div align="center">
                        <input name="btnAdd" type="button" id="btnAdd" value="เพิ่ม" style="width:70px;height:px"
                            required OnClick="frmMain.hdnCmd.value='Add';frmMain.submit();">
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
	mysqli_close($objCon);
?>