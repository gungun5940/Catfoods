<html>
  <head>
    <meta charset="utf-8">
    <title>เพิ่มสินค้า</title>
  </head>
  <body>

<?php
if(isset($_SESSION['mname']))
 session_destroy();
?>
    <form action ="check_product.php" method="post" name="frm_data" enctype="multipart/form-data">
  <center>
   <table width="500">
     <caption><h3> เพิ่มสินค้า </h3></caption>
     <tr>
        <td align="right">ชื่อสินค้า:</td>
        <td><input name="pname" type="text"/></td>
    </tr>
     <tr>
        <td align="right">ประเภทสินค้า:</td>
        <td><input name="ptype" type="text"/></td>
    </tr>
    <tr>
        <td align="right">ราคาสินค้า:</td>
        <td><input name="pprice" type="float"/></td>
    </tr>
   <tr>
       <td align="right">รายละเอียดสินค้า:</td>
       <td><input name="pdetail" type="text"/></td>
   </tr>
   <tr>
       <td align="right">จำนวนสินค้า:</td>
       <td><input name="punit" type="int"/></td>
   </tr>
   <tr>
       <td align="right">รูปภาพสินค้า:</td>
       <td><input name="pimg" type="file"/></td>
   </tr>
   <tr>
     <td height="36" colspan="2" align="center">
     <input type="submit" name="button" id="button" value="เพิ่มสินค้า" />
     <input type="reset" name="Reset" id="Reset" value="ยกเลิก" />
   </td>
   </tr>
 </table>
 </center>
 </form>
</body>
</html>
