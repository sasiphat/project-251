<?php
session_start();
include "connect.php";

$sql = "select * from student where StudentID = '".$_REQUEST['username']."' AND StudentSSN = '".$_REQUEST['passwd']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($row) {
	echo "<script>";
	echo "alert('Welcome !');";
	echo "window.location='ข้อมูลนักศึกษา.php';";
	echo "</script>";
	
	$_SESSION['id'] = $_REQUEST['username'];
}elseif (!($row)) {
	echo "<script>";
	echo "alert('Login incorrect !');";
	echo "window.location='login.php';";
	echo "</script>";
}
?>