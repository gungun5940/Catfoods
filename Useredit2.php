<?PHP
session_start();
$mname = $_REQUEST['Name'];
$mpasswd = $_REQUEST['Passwd'];
$mtel = $_REQUEST['Tel'];
include "connectDB.php";
$dsql = "UPDATE member SET M_name = '$mname' , M_passwd = '$mpasswd', M_tel = '$mtel' WHERE M_ID = ".$_SESSION['id'];
$result = mysqli_query($dbconnect,$dsql);
if ($result)
{
	echo "Record Updated";
	echo "<meta http-equiv='refresh' content='2; url=showall.php' />";
}
else
{
	echo "Update Error";
	echo "<meta http-equiv='refresh' content='2; url=showall.php' />";
}
?>
