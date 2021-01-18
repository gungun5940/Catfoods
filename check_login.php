<?php
session_start();
//login.php
$uname = $_POST["usernames"];
$passwd = $_POST["passwd"];
include"connectDB.php";
$sqli = "SELECT * FROM member WHERE M_user = '$uname' AND M_passwd = '$passwd'";
$sqlique = mysqli_query($dbconnect,$sqli);
$result = mysqli_fetch_array($sqlique);

if($result <=0)
{
  echo "ERROR" ;
  echo "<meta http-equiv='refresh' content='2;url=form_login.php'/>";
}
else
{
  $_SESSION["mid"] = $result['M_ID'];
  session_write_close();
  if($uname=="gun")
  {
    echo "<meta http-equiv='refresh' content='2;url=mainAdmin.php'/>";
    echo "Waiting Admin";
  }

  else
  {
    echo "<meta http-equiv='refresh' content='2;URL=mainUser.php'>";
    echo " Waiting Member";

  }
}


?>
