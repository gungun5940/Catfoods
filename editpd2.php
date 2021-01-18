<?PHP
include "connectDB.php";
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
 date_default_timezone_set('Asia/Bangkok');
 //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
 $date1 = date("Ymd");
 //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
 $numrand = (mt_rand());
$ptype = $_REQUEST['Type'];
$pname = $_REQUEST['Name'];
$pprice = $_REQUEST['Price'];
$pdetail = $_REQUEST['Detail'];
$punit = $_REQUEST['UnitStock'];
//  $pimg = (isset($_POST['pimg']) ? $_POST['pimg'] : '');
 $FileUpload = $_FILES["img"]["name"];
 	if($FileUpload <> '') {
		//โฟลเดอร์ที่เก็บไฟล์
		$path="img";
  //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
  date_default_timezone_set('Asia/Bangkok');
  //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
  $date1 = date("Ymd");
  //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
  $numrand = (mt_rand());
  //ตัวขื่อกับนามสกุลภาพออกจากกัน
  $type = strrchr($FileUpload,".");
  //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
  $newname =$numrand."_".$date1.$type;
	$path_copy=$path.$newname;
  $path_link=$path.$newname;

	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);
	}
  if($FileUpload==NULL)
  {
		$sql = "UPDATE product SET P_name = '$pname' , P_type = '$ptype', P_price = '$pprice' ,P_detail = '$pdetail',P_unit ='$punit' WHERE P_ID = ".$_SESSION['id'];
	}
else
	{
	 $sql = "UPDATE product SET P_name = '$pname' , P_img = '$newname', P_type = '$ptype', P_price = '$pprice' ,P_detail = '$pdetail',P_unit ='$punit' WHERE P_ID = ".$_SESSION['id'];

	}

	$result = mysqli_query($dbconnect, $sql);
		mysqli_close($dbconnect);
		if($result) //ถ้าทำการqureyผ่านก็แสดงเพิ่มสินค้าเรียบน้อย
{
	echo "Record Updated";
	echo "<meta http-equiv='refresh' content='2; url=showallpd.php' />";
}
else
{
	echo "Update Error";
	echo "<meta http-equiv='refresh' content='2; url=showallpd.php' />";
}
?>
