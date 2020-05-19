<html>
<head>
<link type="text/css" rel="stylesheet" href="css_layout.css">
<title>ข้อมูลนักศึกษา</title>
</head>
<body>
<style>
    * { margin: 0; padding: 0; }
#all{
     width:980px; 
    height:100%; 
    margin:0px auto;
    position:relative;
    margin: center;
    margin-top: 5px;
  }

#header{ background-color:#ec8000;
     width:1482.5px;
            height:173px;
            margin: auto;
            background-color:#235680;
  }
#left{ 
    background-color: #B0D5D5;;
     height:1000px; 
     width:300px;
      position:absolute;
      }
#content{ 
    position: absolute;
    width: 844px;
    height: 397px;
    left: 350px;
    top: 282px;
    background-color: #FFFDFD;
    border: 4px solid #C4C4C4;
    box-sizing: border-box;
        
     }

#footer{ 
    width:1482.5px;
            height:150px;
            margin: auto;
            background-image: url("footer4.png") ;
            top:1170px;
            position: absolute;
            background-repeat:no-repeat;
         }

</style>
<div id="all">
    <div id="header"> 
    <img src="Rectangle2.png" style="padding-top:0px;position:relative;left:660px; ">
    <img src="Rectangle3.png" style="padding-top:0px; position:relative;left:550px;">

    <p style="padding-top:0px;position:relative;left:80px; top:-129px; color:white;font-family: Roboto;
     font-style: normal; font-weight: normal; font-size:30px;"><b>ระบบหอพักนักศึกษา</b></p>
     <p style="padding-top:0px;position:relative;left:80px; top:-130px; color:white;font-family: Roboto;
     font-style: normal; font-weight: normal; font-size:30px;"><b>Dormitory Management System</b></p>
     <img src="home1.png" style="padding-top:10px; position:relative;left:360px; top:-215px;">

    </h1></div>
    <div id="left"> 
    <a href="login.php" target="_blank">
    <img src="logout.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a>
    <br><br><br><br><br><br><br><br><br>
    <a href="ข้อมูลนักศึกษา.php" target="_blank">
    <img src="data.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a><br><br> 
    <a href="จองหอพัก.php" target="_blank"> 
    <img src="ปุ่มจองหอ.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a><br><br>
    <a href="แสดงรายละเอียด.php" target="_blank">
    <img src="test.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a><br><br>
    <a href="test.php" target="_blank">
    <img src="ประกาศ.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a><br><br>
    <a href="ชำระเงิน.php" target="_blank">
    <img src="spent.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a><br><br> 
    <a href="test.php" target="_blank">
    <img src="post.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a><br><br>
    <a href="test.php" target="_blank">
    <img src="service.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a><br><br>
    <a href="test.php" target="_blank">
    <img src="care.png" style="width:220px; height:60px; padding-top:10px; position:relative;left:30px; top:20px;"></a><br><br><br>
    <a href="test.php" target="_blank"><p style="color:blue; text-align: center;font-size:24px; ">Contact us</p></a>
    </div>
<?php
session_start();
include "connect.php";
$sql = "select * from student where StudentID = '".$_SESSION['id']."';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo $row['StudentID'];
?>
    <img src="ข้อมูลนักศึกษา.png" style="width:263px; height:45px; padding-top:40px; position:relative;left:350px;">  
     
     <div id="content">
        <img src="ชื่อ-สกุล.png" style="width:170px; height:46px; padding-top:10px; position:relative;left:30px; top:20px;">
        <p style="padding-top:0px; position:relative; left:220px; top:-15px; color:black; font-family: Roboto;
        font-style: normal; font-weight: bold; font-size:20px;"><?=$row['StudentName']?></p></a>
        <img src="เลขปชช.png" style="width:244px; height:46px; padding-top:-50px; position:relative;left:30px; top:20px;">
        <p style="padding-top:0px; position:relative; left:300px; top:-15px; color:black; font-family: Roboto;
        font-style: normal; font-weight: bold; font-size:20px;"><?=$row['StudentSSN']?></p></a>
        <img src="รหัสนักศึกษา.png" style="width:149px; height:46px; padding-top:-50px; position:relative;left:30px; top:20px;">
        <img src="เพศ.png" style="width:85px; height:46px; padding-top:-50px; position:relative;left:300px; top:20px;">
        <p style="padding-top:0px; position:relative; left:200px; top:-20px; color:black; font-family: Roboto;
        font-style: normal; font-weight: bold; font-size:20px;"><?=$row['StudentID']?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?=$row['StudentGender']?></p>
        <img src="ที่อยู่.png" style="width:85px; height:46px; padding-top:-10px; position:relative;left:30px; top:20px;">
        <p style="padding-top:0px; position:relative; left:140px; top:-15px; color:black; font-family: Roboto;
        font-style: normal; font-weight: bold; font-size:15px;"><?=$row['StudentAddress']?></p></a>
        <img src="เบอร์โทรศัพท์.png" style="width:149px; height:46px; padding-top:-50px; position:relative;left:30px; top:20px;">
        <p style="padding-top:0px; position:relative; left:200px; top:-15px; color:black; font-family: Roboto;
        font-style: normal; font-weight: bold; font-size:20px;"><?=$row['StudentTel']?></p></a>

       </div>
       
       <div id="footer"></div>
</div>
</body>
</html>