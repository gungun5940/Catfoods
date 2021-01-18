<?PHP
$MID = $_REQUEST['ID'];
include "connectDB.php";
$dsql = "DELETE FROM member WHERE M_ID = $MID";
$sql = mysqli_query($dbconnect,$dsql);
if ($sql)
{
	echo "Record Deleted.";
	echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
}
else
{
	echo "Delete Error";
	echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
}
?>
