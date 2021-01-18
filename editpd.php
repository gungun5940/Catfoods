<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แก้ไขข้อมูล</title>
</head>
<body>
<form id="check_product" name="form1" method="post" action="editpd2.php" enctype="multipart/form-data">
  <?php
session_start();
$_SESSION['id'] = $_REQUEST['ID'];
$PID = $_REQUEST['ID'];
include "connectDB.php";
$sql = "SELECT * FROM product WHERE P_ID=$PID";
$qsql = mysqli_query($dbconnect,$sql);
$result = mysqli_fetch_array($qsql);
?>
  <p align="center"><b> Product Edit :  </b> </p>
  <table width="400" border="0" align="center" cellpadding="0"
           cellspacing="0">
    <tr>
      <td height="39">ID : </td>
      <td height="39"><?PHP echo $result['P_ID'];?></td>
    </tr>
    <tr>
      <td width="141" height="39">img :</td>
      <td width="253" height="39">
      <input name="img" type="file" id="img" class="form-control"
            value="<?PHP echo $result['P_img'];?>" size="40" /></td>
    </tr>
    <tr>
      <td width="141" height="39">Name :</td>
      <td width="253" height="39">
      <input name="Name" type="text" id="Name"
            value="<?PHP echo $result['P_name'];?>" size="40" /></td>
    </tr>
    <tr>
      <td height="41">Type: </td>
      <td>
      <input type="text" name="Type" id="Type"
            value="<?PHP echo $result['P_type'];?>" /></td>
    </tr>
    <tr>
      <td width="141" height="39">Price :</td>
      <td width="253" height="39">
      <input name="Price" type="float" id="Price"
            value="<?PHP echo $result['P_price'];?>" size="40" /></td>
    </tr>
    <tr>
      <td height="41">Detail : </td>
      <td>
      <input type="text" name="Detail" id="Detail"
            value="<?PHP echo $result['P_detail'];?>" /></td>
    </tr>
    <tr>
      <td height="41">UnitStock : </td>
      <td>
      <input type="int" name="UnitStock" id="UnitStock"
            value="<?PHP echo $result['P_unit'];?>" /></td>
    </tr>
    <tr>
      <td height="36" colspan="2" align="center">
      <input type="submit" name="button" id="button" value="บันทึก" />
      <input type="reset" name="Reset" id="Reset" value="ยกเลิก" />
    </td>
    </tr>
  </table>
</form>
</body>
</html>
