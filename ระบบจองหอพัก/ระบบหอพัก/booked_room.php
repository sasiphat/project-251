<?php
include "connect.php";
echo "Room no.".$_REQUEST['room_selected']." จองแล้ว โดย ".$_REQUEST['who_booked'];

$sql = "update room set booked = 1, booked_name = '".$_REQUEST['who_booked']."' where Room_NO = ".$_REQUEST['room_selected'];
//echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) { echo "</br>booked successfully !";}
//$row = mysqli_fetch_array($result);
?>