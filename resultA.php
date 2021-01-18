<?php
//resultA.php
session_start();
echo "Welcome".$_SESSION["mname"];
echo "<br><a href=\"index.php\">Logout</a>";
echo "<br><a href=\"mainAdmin.php\">หน้าหลัก</a>";
session_destroy();
?>
