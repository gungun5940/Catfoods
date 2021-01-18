<?php
/*mysqli_connect("ชื่อ sever","ชื่อผู้ใช้ของ mysql",
"รหัสผ่านของ mysql","ชื่อ database") */
$dbconnect = mysqli_connect("localhost","root","","catfoods");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>
