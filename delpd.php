<?PHP
$PID = $_REQUEST['ID'];
include "connectDB.php";
$dsql = "DELETE FROM product WHERE P_ID = $PID";
$sql = mysqli_query($dbconnect,$dsql);
if ($sql)
{
	echo "Record Deleted.";
	echo "<meta http-equiv='refresh' content='2;url=showallpd.php' />";
}
else
{
	echo "Delete Error";
	echo "<meta http-equiv='refresh' content='2;url=showallpd.php' />";
}
?>
