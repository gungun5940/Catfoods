<meta charset="UTF-8" />
 <?php
 include "connectDB.php";
 //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
  date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
 	//รับชื่อไฟล์จากฟอร์ม
  $ptype = $_POST['ptype'];
  $pname = $_POST['pname'];
  $pprice = $_POST['pprice'];
  $pdetail = $_POST['pdetail'];
  $punit = $_POST['punit'];
//  $pimg = (isset($_POST['pimg']) ? $_POST['pimg'] : '');
 	$FileUpload = $_FILES["pimg"]["name"];
 	if($FileUpload <> '') {

 	//โฟลเดอร์ที่เก็บไฟล์
 	$path="imgpd/";
 	//ตั้งขื่อกับนามสกุลภาพออกจากกัน
 	$type = strrchr($_FILES['pimg']['name'],".");
 	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
 	$newname =$numrand."_".$date1.$type;

 	$path_copy=$path.$newname;
 	$path_link="imgpd/".$newname;
 	//คัดลอกไฟล์ไปยังโฟลเดอร์
 	move_uploaded_file($_FILES['pimg']['tmp_name'],$path_copy);
 	}
 		$sql = "INSERT INTO product (P_ID,P_name,P_type,P_price,P_detail,P_unit,P_img) VALUES (NULL,'$pname','$ptype','$pprice','$pdetail','$punit','$newname')";
 		$result = mysqli_query($dbconnect, $sql);

 	if($result){

 			echo "เพิ่มสินค้าเรียบร้อย";
 			echo"<meta http-equiv=\"refresh\" content=\"2; url=showallpd.php\">";
 	  }
 	  else{
      echo "เพิ่มสินค้าไม่สำเร็จ";
 			echo"<meta http-equiv=\"refresh\" content=\"2; url=showallpd.php\">";
 	  }

  ?>
