<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <style>
        .Overall{
            width:1482.5px;
            height:1018px;
            overflow:hidden;
        }
        </style>
    <div clss ="Overall">
    <style>
         
        header{
            width:1482.5px;
            height:173px;
            margin: auto;
            background-color:#235680;
        }
        section{
            width: 1482.5px;
            height:700px;
                background-image: url("Dorm.jpg") ;
                margin:  auto;   
                background-repeat:no-repeat;
                position:relative;
        }
        footer{
            width:1482.5px;
            height:150px;
            margin: auto;
            background-image: url("footer4.png") ;
            top:808px;
            position: absolute;
            background-repeat:no-repeat;
        }
       
        .contrainerlogin{
            width:500px;
            height:250px;
            margin:auto;
            background-color:#235680;
            padding-top:0px; 
            position:relative;
            left:350px; 
            top:90px;
        }
        .contrainerlogin2{
            width:500px;
            height:250px;
            
            background-color:#B7EBFF;
            padding-top:0px; 
            position:relative;
           right:15px; 
            top:15px;
        }
        .clearfix{
            clear:both;
        }
        
        </style>
            <div class="fix" style=" position:relative; width:1483px; height:1423; float:left; float:right;">
    <header>
    <img src="Rectangle2.png" style="padding-top:0px;position:relative;left:660px; ">
    <img src="Rectangle3.png" style="padding-top:0px; position:relative;left:550px;">
    <img src="property.png" style="padding-top:0px; position:relative;left:630px; top:-39px;">
    <p style="padding-top:0px;position:relative;left:1130px; top:-79px; color:white;font-style: normal;
     font-weight: normal; font-size: 15px;"><b>CONTACT US : +(66) 2028-2222</b></p>
    <p style="padding-top:0px;position:relative;left:80px; top:-209px; color:white;font-family: Roboto;
     font-style: normal; font-weight: normal; font-size:30px;"><b>ระบบหอพักนักศึกษา</b></p>
     <p style="padding-top:0px; position:relative;left:80px; top:-230px; color:white;font-family: Roboto;
     font-style: normal; font-weight: normal; font-size:30px;"><b>Dormitory Management System</b></p>
     <img src="home1.png" style="width:38px; height:32px; padding-top:0px; position:relative;left:360px; top:-340px;">

    </header>
<section>
        <img src="flag_th.jpg" style="width:30px; height:20px; padding-top:1px; position:relative;left:1440px; margin-top:10px">
        <img src="flag_en.jpg" style="width:30px; height:20px; padding-top:1px; position:relative;left:1360px;  margin-top:10px">
        <div class="contrainerlogin">
            <div class="contrainerlogin2">
			<form action=verify_login.php method=get>
				<h2 style="width: 338px; height: 42px;
                        left: 710px; top: 291px; font-family: Roboto; font-style: normal; font-weight: bold; font-size: 30px; line-height: 42px; color: #000000;"> 
                        <img src="image20.png" style="width:30px; height:30px; position:relative;left:15px; margin-top:10px" >&nbsp; เข้าสู่ระบบ (นักศึกษา)</h2>
                
                    <input class="w3-container w3-white" type="text"
                        name="username" placeholder="เลขทะเบียนนักศึกษา 10 หลัก" 
                        pattern="[0-9]*" maxlength="10" 
                        style="width:465px; height:35px; position:relative; left:15px;
                        color:#474646; font-family: Roboto; font-style: normal; font-weight: bold; font-size:15px;"> 
                    <br>
                    <br>
                    <input class="w3-container w3-white"type="password" 
                        name="passwd" placeholder="รหัสผ่าน" pattern="[A-z0-9]*" maxlength="13" 
                        style="width:465px; height:35px; position:relative; left:15px;
                        color:#474646; font-family: Roboto; font-style: normal; font-weight: bold; font-size:15px;">
                    <br><br>
                  
                    <button style="background:#C4C4C4; width:120px; height:30px; position:relative; left:255px; 
                    color:#474646; font-family: Roboto; font-style: normal; font-weight: bold; font-size:15px;">เปลี่ยนรหัสผ่าน</button>
                    <a href="ข้อมูลนักศึกษา.php" target="_blank">
                    <button style="background:#235680; width:100px; height:30px; position:relative; left:260px;
                    color:white; font-family: Roboto; font-style: normal; font-weight: bold; font-size:18px;">Submit</button>                              
                </form>

            </div> 

        </div>

    </section>

    <footer>
    

    </footer>
    
    </div>
</body>
</html>