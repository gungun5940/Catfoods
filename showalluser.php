<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"
       content="text/html; charset=utf-8" />
<title>ข้อมูลสมาชิก</title>
</head>
<body>
<?PHP
include "connectDB.php";// เรียกใช้งาน ConnectDB.php
$sql = mysqli_query($dbconnect,"SELECT * FROM member");
?>
<p align="center"><b>แสดงข้อมูลทั้งหมด</b> &nbsp;(<a href="form_member.php">เพิ่มสมาชิก</a>)</p>
<table align="center" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">ID</td>
    <td align="center">ชื่อ-นามสกุล</td>
    <td align="center">ชื่อผู้ใช้</td>
    <td align="center">รหัสผ่าน</td>
    <td align="center">หมายเลขโทรศัพท์</td>
    <td align="center">สถานะ</td>
    <td align="center">แก้ไข</td>
  </tr>
<?PHP
while($result = mysqli_fetch_array($sql))
{
  echo "<tr>";
  echo "<td align=\"center\" width=\"30\" >".$result['M_ID']."</td>";
  echo "<td align=\"center\" width=\"200\">".$result['M_name']."</td>";
  echo "<td align=\"center\" width=\"100\" >".$result['M_user']."</td>";
  echo "<td align=\"center\" width=\"100\">".$result['M_passwd']."</td>";
  echo "<td align=\"center\" width=\"150\">".$result['M_tel']."</td>";
  echo "<td align=\"center\" width=\"150\">".$result['M_status']."</td>";
  echo "<td align=\"center\" width=\"60\"> <a href='Useredit.php?ID=".$result['M_ID']."'>แก้ไข</a></td>";
  echo "</tr>";
	}
	mysqli_close($dbconnect);
?>
</table>
<p>&nbsp;</p>
<p align="center"><a href="index.php">Logout</a></p>
<p align="center"><a href="mainUser.php">หน้าหลัก</a></p>
</body>
</html>
