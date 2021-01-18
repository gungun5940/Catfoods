<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
<?php
if(isset($_SESSION['mname']))
  session_destroy();
?>
<form action ="check_login.php" method="post" name="frm_data">
  <center>
   <table width="500">
     <caption><h3> Login </h3></caption>
     <tr>
        <td align="right">Username:</td>
        <td><input  class="input-group-addon" name="usernames" type="text"/></td>
    </tr>
    <tr>
        <td align="right">Password:</td>
        <td><input class="input-group-addon" name="passwd" type="password"/></td>
    </tr>
    <tr>
      <td height="36" colspan="2" align="center">
      <input type="submit" name="button" id="button" value="เข้าสู่ระบบ" />
      <input type="reset" name="Reset" id="Reset" value="ยกเลิก" />
    </td>
    </tr>
  </table>
</center>
</form>

  </body>
</html>
