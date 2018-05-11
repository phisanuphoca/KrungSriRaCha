<?php 

$status = session_status();
if($status == PHP_SESSION_NONE){

        session_start();
        

    }
 // echo "USER : ".$_SESSION["user"]; echo "<br>"; echo "ถ้า SESSION สามารถทำงานได้ SESSION ID จะไม่เปลี่ยน :".session_id(); 
 ?>

<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/jquery-2.1.4.min.js"></script>
     
<title>LUGUS</title>
</head>

<body>
	<div>
    
        <div class="navbars fixed">
            <div class="navbar2">
                <div class="logo">
                    <img src="img/logo2.png" width="90" height="37" /> 
                </div>
                
              <div class="menu">
                    <ul id="nav">
                        <li><a href="{{ route('home.index') }}">หน้าแรก</a></li><label class="l">|</label>
                        <li><a href="#">สมัครสมาชิก</a></li><label class="l">|</label>
                        <li><a href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    </li>
                </ul>
              </div>
          </div>
        </div>
        
        <div class="_body">
       	  
           	<div class="sub-container2">
                <div class="sub-container2-bar">
                    <p class="text_center" style="margin: 0px;
">สมัครสมาชิก</p>
                </div>
                <div class="sub-container3">
                    <div class="sub-container4">
                    <div>
                     <form action="{{ route('user.store') }}" method="post" >

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   		 <p class="text-center" style="margin-bottom: 10px; color:#EEE">ชื่อ-นามสกุล</p>
						<input name="Name" type="text" class="form-control3" name="Name" id="txt_id"  placeholder="ชื่อ-นามสกุล" maxlength="30" >
						<p class="text-center" style="margin-bottom: 10px; color:#EEE">ไอดีผู้ใช้ (Username)&nbsp; <aa style="color:#FF0000">{{ $textUser }}</aa></p>
						<input name="Username" type="text" class="form-control3" name="Username" id="txt_id" placeholder="Username" maxlength="30">
						<p class="text-center" style="margin-bottom: 10px;  color:#EEE">รหัสผ่าน</p>
						<input name="Password" type="password" class="form-control3" name="Password1"id="txt_id" placeholder="Password" maxlength="30">
						<p class="text-center" style="margin-bottom: 10px; color:#EEE">กรอกรหัสผ่านอีกครั้ง&nbsp;<aa style="color:#FF0000">{{ $textP }}</aa></p>
						<input name="Password2" type="password" class="form-control3"name="Password2" id="txt_id" placeholder="Recently-Password" maxlength="30">
						<p class="text-center" style="margin-bottom: 10px; color:#EEE">E-mail</p>
						<input name="email" type="email" class="form-control3" name="email"id="exampleInputEmail2" placeholder="E-mail" maxlength="30">
                        
                        <center>
                        <aa style="color:#FF0000">{{ $textEE }}</aa>

                        <br />

						<button type="submit" onclick="al2()" class="submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;ยืนยัน</button>
						<button onclick="parent.location.href='{{ route('home.index') }}'" style="margin-left: 15px;" type="button" class="submit shadow" id="reba" style="margin-left:3px;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> &nbsp;ย้อนกลับ</button>
                        </center>
                        </form>
					</div>
                        
                    </div>
                </div>
                    
            </div>
            
        
          </div>
      </div>
        
 
    

</body>
</html>
