<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link media="print" type="text/css" rel="stylesheet"
  href="file:///D|/xampp/htdocs/project/resources/views/lugus/style.css"> 
	<link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet">

    <script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">  
		var name = "#slid";   
		var locateY= null;    
		$(function(){  
  			locateY=parseInt($(name).css("top").replace("px",""));  
   			$(window).scroll(function(){  
       			offset=locateY+$(document).scrollTop()+"px";  
       			$(name).animate({top:offset},{duration:1000,queue:false});  
    		});  
		});  
	</script>  
<title>LUGUS</title>
</head>

<body>
	<div>
    
        <div class="navbar fixed">
            <div class="navbar2">
                <div class="logo">
                    <img src="img/logo2.png" width="90" height="37" /> 
                </div>
                
              <div class="menu">
                    <ul id="nav">
                        <li><a href="#">หน้าแรก</a></li><label class="l">|</label>
                        <li><a href="#">สมัครสมาชิก</a></li><label class="l">|</label>
                        <li><a href="#">เข้าสู่ระบบ</a>
                    </li>
                </ul>
              </div>
          </div>
        </div>
        
        <div class="_body">
       	  <div class="container">
           	<div class="sub-container">
                	<ul class="m_block">
                   	  <li class="m_list m_hov">
                      <a href="#">
                      	<div>
                        	<div class="m_img ">
                            	<img src="img/M-1.jpg" class="sha"/>
                            </div>
                            
                            <a href="#" class="btn-des text_center a_blue text_co1">
                            	
                                359 point
                            </a>
                            <a href="#" class="btn-des  a_green price2 text_center text_co2">
                            	ซื้อsdfsdfsfd
                            </a>
                           
                          <div class="clear"></div>
                        </div>
                        </a>
                      </li>
                        <li class="m_list m_hov">
                      <a href="#">
                      	<div>
                        	<div class="m_img">
                            	<img src="img/M-1.jpg"/>
                            </div>
                            
                            <a href="#" class="btn-des text_center a_blue text_co1">
                            	
                                359 point
                            </a>
                            <a href="#" class="btn-des  a_green price2 text_center text_co2">
                            	ซื้อ
                            </a>
                           
                          <div class="clear"></div>
                        </div>
                        </a>
                        </li>
                        <li class="m_list m_hov">
                      <a href="#">
                      	<div>
                        	<div class="m_img">
                            	<img src="img/M-1.jpg"/>
                            </div>
                            
                            <a href="#" class="btn-des text_center a_blue text_co1">
                            	
                                359 point
                            </a>
                            <a href="#" class="btn-des  a_green price2 text_center text_co2">
                            	ซื้อ
                            </a>
                           
                          <div class="clear"></div>
                        </div>
                        </a>
                        </li>
                        <li class="m_list m_hov">
                      <a href="#">
                      	<div>
                        	<div class="m_img">
                            	<img src="img/M-1.jpg"/>
                            </div>
                            
                            <a href="#" class="btn-des text_center a_blue text_co1">
                            	
                                359 point
                            </a>
                            <a href="#" class="btn-des  a_green price2 text_center text_co2">
                            	ซื้อ
                            </a>
                           
                          <div class="clear"></div>
                        </div>
                        </a>
                        </li>
                        <li class="m_list m_hov">
                      <a href="#">
                      	<div>
                        	<div class="m_img">
                            	<img src="img/M-1.jpg"/>
                            </div>
                            
                            <a href="#" class="btn-des text_center a_blue text_co1">
                            	
                                359 point
                            </a>
                            <a href="#" class="btn-des  a_green price2 text_center text_co2">
                            	ซื้อ
                            </a>
                           
                          <div class="clear"></div>
                        </div>
                        </a>
                        </li>
                        
                    </ul>
                    
            </div>
            <div class="sub-left">
            	<div class="profile-container">
                
                </div>
            </div>
            
            <div id="sub-left">
            <div class="sub-profile1">
                <div class="sub-profile2">                 
					<div class="sub-profile3" id="slid">
    					<div class="sub-profile4">
                        	<h1></h1><br />
                       	  <img src="img/profile.png" />
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
