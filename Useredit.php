<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แก้ไขข้อมูล</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="Useredit2.php">
<?PHP
session_start();
$_SESSION['id'] = $_REQUEST['ID'];
$MID = $_REQUEST['ID'];
include "connectDB.php";
$sql = "SELECT * FROM member WHERE M_ID=$MID";
$qsql = mysqli_query($dbconnect,$sql);
$result = mysqli_fetch_array($qsql);
?>
  <p align="center"><b> Member Edit :  </b> </p>
  <table width="400" border="0" align="center" cellpadding="0"
           cellspacing="0">
    <tr>
      <td height="39">ID : </td>
      <td height="39"><?PHP echo $result['M_ID'];?></td>
    </tr>
    <tr>
      <td width="141" height="39">Name :</td>
      <td width="253" height="39">
      <input name="Name" type="text" id="Name"
            value="<?PHP echo $result['M_name'];?>" size="40" /></td>
    </tr>
    <tr>
      <td height="39">Username : </td>
      <td><?PHP echo $result['M_user'];?></td>
    </tr>
    <tr>
      <td height="41">Password : </td>
      <td>
      <input type="text" name="Passwd" id="Passwd"
            value="<?PHP echo $result['M_passwd'];?>" /></td>
    </tr>
    <tr>
      <td height="41">Tel : </td>
      <td>
      <input type="text" name="Tel" id="Tel"
            value="<?PHP echo $result['M_tel'];?>" /></td>
    </tr>
    <tr>
      <td height="39">status : </td>
      <td><?PHP echo $result['M_status'];?></td>
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
