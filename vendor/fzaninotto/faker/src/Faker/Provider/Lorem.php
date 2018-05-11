<?php 


$status = session_status();
if($status == PHP_SESSION_NONE){
  
        session_start();
        


    }

// echo "USER : ".$_SESSION["user"]; echo "<br>"; echo "ถ้า SESSION สามารถทำงานได้ SESSION ID จะไม่เปลี่ยน :".session_id(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style.css')); ?>">
    <script src="<?php echo e(asset('js/jquery-2.1.4.min.js')); ?>"></script>
    <script type="text/javascript">  
    
    $(document).ready(function(){
    $("#oks1").click(function(){
                                          
       
                                               
                                                
   });  
    });

  </script>  
 
<title>LUGUS</title>
</head>

<body>
  <div>
    
        <div class="navbars fixed">
            <div class="navbar2">
                <div class="logo">
                    <img src="<?php echo e(asset('img/logo2.png')); ?>" width="90" height="37" /> 
                </div>
                
              <div class="menu">
                    <ul id="nav">
                        <li><a href="<?php echo e(route('home.index')); ?>">หน้าแรก</a></li><label class="l">|</label>
                         <li><a href="<?php echo e(route('register')); ?>">สมัครสมาชิก</a></li><label class="l">|</label>
                        <li><a id="ok" href="#">เข้าสู่ระบบ</a>
                    </li>
                </ul>
              </div>
          </div>
        </div>
        
        <div class="_body">
          
            <div class="sub-container22">
                <div class="sub-container2-bar">
                    <p class="text_center" style="margin: 0px;
">เข้าสู่ระบบ</p>
                </div>
                <div class="sub-container33">
                    <div class="sub-container5">
                    <div>
                       <form action="<?php echo e(route('check')); ?>" method="post" >
                       <aa style="color:#FF0000"><?php echo e($tt); ?></aa><br>
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <p class="in"  style="margin-bottom: 10px; color:#EEE">ไอดีผู้ใช้Username)  &nbsp;:</p>
            <input name="txtUsername" type="text" class="form-control4" id="txt_id" placeholder="Username" maxlength="30"><br /><br />
            <p class="in" style="margin-bottom: 10px;  color:#EEE">รหัสผ่าน &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
            <input name="txtPassword" type="password" class="form-control4" id="txt_id" placeholder="Password" maxlength="30">
            
                      <!--   <div id="ecode" class="new newsAlert shadow red" style="margin-bottom: 0px;margin-top: 15px;">
            <p class="text-center while text-s" style="">โค้ดถูกใช้งานแล้ว</p>
            <br>
          </div> -->
         

                        <center>
                        <br />
            <button type="submit" id="ok1" class="submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;ยืนยัน</button>
            <!-- <button type="button"  style="margin-left: 15px;" class="submit shadow" id="reba" style="margin-left:3px;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> &nbsp;ย้อนกลับ</button> -->
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
