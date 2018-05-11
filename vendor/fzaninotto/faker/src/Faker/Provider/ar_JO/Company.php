<?php $_SESSION["user"]=$UserID; 

// echo "USER : ".$_SESSION["user"]; echo "<br>"; echo "ถ้า SESSION สามารถทำงานได้ SESSION ID จะไม่เปลี่ยน :".session_id(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('style.css')); ?>">

  <script src="js/jquery-2.1.4.min.js"></script>
<script src="jquery-1.9.0.min.js" type="text/javascript" ></script>

    <script type="text/javascript">  
		var name = "#slid";   
		var locateY= null;    
		$(function(){  
  			locateY=parseInt($(name).css("top").replace("px",""));  
   			$(window).scroll(function(){  
       			offset=locateY+$(document).scrollTop()+"px";  
       			$(name).animate({top:offset},{duration:500,queue:false});  
    		});  
		});  
    $(document).ready(function(){
      $(".onc").click(function(){
        
     
          $("#ecode1").slideDown("fast").delay( 3000 ).slideUp("fast");;
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
                        <li><a href="#">หน้าแรก</a></li><label class="l">|</label>
                        <li><a href="<?php echo e(route('register')); ?>">สมัครสมาชิก</a></li><label class="l">|</label>
                        <li><a href="<?php echo e(route('login'),$UserID); ?>">เข้าสู่ระบบ</a>
                    </li>
                </ul>
              </div>
          </div>
        </div>
         
        <div class="_body">
       	  <div class="container">

           	<div class="sub-container">
            <div id="ecode1" style="display:none " class="new newsAlert shadow red2" style="background-color:#A00;margin-bottom: 0px;width: 635px;margin-bottom: 15px;margin-top: 15px;">
            <p class="text_center while text-s" style="margin-top: 5px;margin-bottom: 0px;">กรุณาเข้าสู่ระบบ !!</p>
            <br>
          </div>
                	<ul class="m_block">
                      
                      
                        <?php foreach($Movies as $Movie): ?>
                          <li class="m_list m_hov onc">
                      <a href="#">
                        <div>
                          <div class="m_img ">
                              <img src="http://localhost:8000/img/<?php echo $Movie->Picture;?>" class="sha"/>
                            </div>
                            
                            <a href="#" class="btn-des text_center a_blue text_co1">
                              
                                <?php echo e($Movie->Price); ?> point
                            </a>
                            <a href="#" class="btn-des  a_green price2 text_center text_co2">
                              ซื้อ
                            </a>
                           
                          <div class="clear"></div>
                        </div>
                        </a>
                      </li>
                        <?php endforeach; ?>
                      </ul>
                    
            </div>
            <!-- <div class="sub-left">
            	<div class="profile-container">
                
                </div>
            </div> -->
            
            <div id="sub-left">
            <div class="sub-profile1">
                <div class="sub-profile2">                 
					<div class="sub-profile3 " id="slid">
    					<div class="sub-profile4 text_center" style=" color: #000;">
                        
                          
                          <h1></h1><br />
                          <img src="<?php echo e(asset('img/profile.png')); ?>" />
                            <h2>คุณยังไม่ได้เข้าสู่ระบบ</h2>
                            <p>กรุณาเข้าสู่ระบบก่อนใช้งาน</p>
                        </div>
                         
                         
                        	
					</div>


                </div>
            </div>
            
        </div>

          

          </div>
      </div>
        
 
    
    </div>
</body>
</html>
