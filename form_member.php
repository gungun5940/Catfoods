<html>
  <head>
    <meta charset="utf-8">
    <title>สมัครสมาชิก</title>
    <script>
  function validateForm()
  {

    if (frm_data.mname.value =='')
    {
      alert("กรุณากรอก ชื่อ-นามสกุล");
      return false;
    }
	else if  (frm_data.muser.value =='')
    {
      alert("กรุณากรอก Username");
      return false;
    }
    else if  (frm_data.mpasswd.value =='')
    {
      alert("กรุณากรอก Password");
      return false;
    }
	else if  (frm_data.mtel.value =='')
    {
      alert("กรุณากรอกเบอร์โทรศัพท์ค่ะ");
      return false;
    }
     else if (frm_data.mstatus.value == '')
    {
      alert("กรุณากรอก สถานะผู้ใช้งานค่ะ (Admin,Member)");
	  return false;
    }
  }
  </script>
  </head>
  <body>
<?php
if(isset($_SESSION['mname']))
 session_destroy();
?>
    <form action ="check_member.php" method="post" name="frm_data" onsubmit="return validateForm();">
  <center>
   <table width="500">
     <caption><h3> สมัครสมาชิก </h3></caption>
     <tr>
        <td align="right">ชื่อ-นามสุกล:</td>
        <td><input name="mname" type="text"/></td>
    </tr>
     <tr>
        <td align="right">ชื่อผู้ใช้งาน:</td>
        <td><input name="muser" type="text"/></td>
    </tr>
    <tr>
        <td align="right">รหัสผ่าน:</td>
        <td><input name="mpasswd" type="password"/></td>
    </tr>
   <tr>
       <td align="right">หมายเลขโทรศัพท์:</td>
       <td><input name="mtel" type="text"/></td>
   </tr>
   <tr>
       <td align="right">สถานะ:</td>
       <td><input name="mstatus" type="text"/></td>
   </tr>
   <tr>
     <td height="36" colspan="2" align="center">
     <input type="submit" name="button" id="button" value="สมัครสมาชิก" />
     <input type="reset" name="Reset" id="Reset" value="ยกเลิก" />
   </td>
   </tr>
 </table>
 </center>
 </form>
</body>
</html>
