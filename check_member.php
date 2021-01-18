<?php
//Checkmember.PHP
$mname = $_REQUEST["mname"];
$muser = $_REQUEST["muser"];
$mpasswd = $_REQUEST["mpasswd"];
$mtel = $_REQUEST["mtel"];
$mstatus = $_REQUEST["mstatus"];
/*mysqli_connect("ชื่อ sever","ชื่อผู้ใช้ของ mysql",
"รหัสผ่านของ mysql","ชื่อ database") */
$con = mysqli_connect("localhost","root","","catfoods");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM member WHERE M_user ='$muser'";
$result = mysqli_query($con,$sql);
$obresult= mysqli_fetch_array($result);
if($obresult)
{
  echo"Cann't register member . Username is already used ";
  echo"<meta http-equiv=\"refresh\" content=\"2; url= form_member.php\">";
}
else {
  Session_start();
  $_SESSION["mname"] = $obresult["M_name"];
  $_SESSION["muser"] = $obresult["M_user"];
  $insql = "INSERT INTO member VALUES (NULL,'$mname','$muser','$mpasswd','$mtel','$mstatus')";
  $inresult = mysqli_query($con,$insql);
  echo "Insert Complete";
  if ($mstatus == 'Admin')
  {
    echo"<meta http-equiv=\"refresh\" content=\"2; url=resultA.php\">";
  }
  else
  {
    echo"<meta http-equiv=\"refresh\" content=\"2; url=resultM.php\">";
  }
}
 ?>
