<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ข้อมูลสินค้า</title>
</head>
<body>
  <?PHP
  include "connectDB.php";// เรียกใช้งาน ConnectDB.php
  $sql = "SELECT * FROM product";
  $result = mysqli_query($dbconnect,$sql);
  $obresult = mysqli_fetch_array($result);
  $path = 'imgpd/'; //---->เช่น 'images/';
  ?>
  <br><br>
<p align="center"><b>แสดงข้อมูลทั้งหมด</b> &nbsp;(<a href="form_product.php">เพิ่มสินค้า</a>)</p>
  <table align="center" border="1" cellspacing="0" cellpadding="0">
    <tr>
          <td align="center">&nbsp;รหัสสินค้า&nbsp;</td>
          <td align="center">&nbsp;รูปสินค้า&nbsp;</td>
          <td align="center">&nbsp;ชื่อสินค้า&nbsp;</td>
          <td align="center">&nbsp;ประเภทสินค้า&nbsp;</td>
          <td align="center">&nbsp;รายละเอียดสินค้า&nbsp;</td>
          <td align="center">&nbsp;ราคาสินค้า&nbsp;</td>
          <td align="center">&nbsp;จำนวนสินค้า&nbsp;</td>
          <td align="center">แก้ไข</td>
          <td align="center">ลบ</td>
          <td align="center">&nbsp;&nbsp;</td>
        </tr>

    </div>

    <div class="col-sm">

      <?PHP
      while($obresult = mysqli_fetch_array($result))
      {
        echo "<tr>";
        echo "<td align=\"center\" width=\"100\">"." &nbsp;".$obresult['P_ID']." &nbsp;"."</td>";
        echo "<td><img src=" .$path.$obresult['P_img'] . " width=150 </td>";
        echo "<td align=\"center\" width=\"100\">"." &nbsp;".$obresult['P_name']." &nbsp;"."</td>";
        echo "<td align=\"center\" width=\"100\">"." &nbsp;".$obresult['P_type']." &nbsp;"."</td>";
        echo "<td align=\"center\" width=\"200\">"." &nbsp;".$obresult['P_detail']."&nbsp; "."</td>";
        echo "<td align=\"center\" width=\"100\">"." &nbsp;".$obresult['P_price']."&nbsp; "."</td>";
        echo "<td align=\"center\" width=\"100\">"." &nbsp;".$obresult['P_unit']."&nbsp; "."</td>";
        echo "<td align=\"center\" width=\"60\"> <a href='editpd.php?ID=".$obresult['P_ID']."'>แก้ไข</a></td>";
        echo "<td align=\"center\" width=\"60\"> <a href='delpd.php?ID=".$obresult['P_ID']."'>ลบ</a></td>";
        echo "</tr>";
        }
        mysqli_close($dbconnect);
      ?>
      </table>
      <p>&nbsp;</p>
      <p align="center"><a href="index.php">Logout</a></p>
        <p align="center"><a href="mainAdmin.php">หน้าหลัก</a></p>
      </body>
      </html>
