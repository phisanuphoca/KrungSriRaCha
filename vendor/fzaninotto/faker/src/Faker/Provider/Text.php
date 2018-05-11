
<?php 
$status = session_status();
if($status == PHP_SESSION_NONE){

        session_start();
        


    }

 $_SESSION["user"]=$User;

// $_SESSION["user"]=$User;; echo "USER : ".$_SESSION["user"]; echo "<br>"; echo "ถ้า SESSION สามารถทำงานได้ SESSION ID จะไม่เปลี่ยน :".session_id();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('style.css')); ?>">
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="<?php echo e(asset('js/jquery-2.1.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('jquery-1.9.0.min.js')); ?> " type="text/javascript" ></script>

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
      $(".koko").click(function(){
          $("#okok").fadeIn("slow");
      });
      $(".cl").click(function(){
        
     
          $("#okok").fadeOut("slow");
      });
      $(".onc2").click(function(){
        
     
          $("#ecode2").slideDown("fast").delay( 3000 ).slideUp("fast");;
      });
    });

    function myFunction(elmnt,clr,id,point) {
      if (point<clr) {
        document.getElementById("asd").style.background = '#BBBBBB';
        document.getElementById("asd").style.color = '#555555';
        document.getElementById("demo2").innerHTML = "Point ไม่พอ กรุณาเติมเงิน";
        document.getElementById("asd").disabled = true;
      };
          document.getElementById("myText").value = id;
           document.getElementById("demo").innerHTML = clr;
           
           $("#okok").fadeIn("slow");
    }
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
                     
                        <li><a href="<?php echo e(route('box.show',$User->UserID)); ?>">คลัง</a></li><label class="l">|</label>
                         <li><a href="<?php echo e(route('point.edit',$User->UserID)); ?>">เติม Point</a></li><label class="l">|</label>
                        <li><a href="<?php echo e(route('user.edit',$User->UserID)); ?>">แกไขข้อมูลส่วนตัว</a></li><label class="l">|</label>
                         <li><a href="<?php echo e(route('logout')); ?>">ออกจากระบบ</a></li><label class="l">
                        

                    </li>
                </ul>
              </div>
          </div>
        </div>
        
        <div class="_body">
       	  <div class="container">
           	<div class="sub-container">
             <div id="ecode2"  class="new newsAlert shadow red2" style="display:none ">
            <p class="text_center while text-s" style="margin-top: 5px;margin-bottom: 0px;">มีอยู่ในคลังแล้ว !!</p>
            </div>
            <br>
                	<ul class="m_block">
                   	
                      
                        <?php foreach($Movies as $Movie): ?>
                        <?php
                            $x=0;
                            foreach ($MoviesBox as $MoviesBoxs){
                                if($MoviesBoxs->MovieID == $Movie->MovieID)
                                    {
                                        $x=1;
                                        // echo "ซื้อแล้ว".$MoviesBoxs->MovieID." ยังง ".$Movie->MovieID;
                                    }
                               
                            }
                        ?>

                          
                            
                            
                              <?php
                              if ($x==1) {
                                echo '

                                  <li  class=" onc2 m_list m_hov">
                          
                      <a href="#">

                        <div>
                          <div class="onc2 m_img ">
                              <img   src="http://localhost:8000/img/'.$Movie->Picture.'" class="onc2 sha"/>
                            </div>
                            
                            <a  href="#"  class="onc2 btn-des text_center a_blue text_co1">
                              
                                '.$Movie->Price.' point
                            </a>


                                <a href="#" style="background: #00FF00;" class="onc2 btn-des a_green price2 text_center text_co2">
                                  ซื้อแล้ว
                                </a>';
                                   
                              }else{
                                    echo '

                            <li  class=" koko m_list m_hov">
                                      
                                  <a href="#">

                        <div>
                          <div onclick="myFunction(this,'.$Movie->Price.','.$Movie->MovieID.','.$User->Point.')" class="koko m_img ">
                              <img   src="http://localhost:8000/img/'.$Movie->Picture.'" class="koko sha"/>
                            </div>
                            
                            <a  href="#"  class="koko btn-des text_center a_blue text_co1">
                              
                                '.$Movie->Price.' point
                            </a>

                                    <a href="#" class="btn-des koko  a_green price2 text_center text_co2">
                                  ซื้อ
                                </a>';
                              }

                            ?>
                            
                         


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
					<div class="sub-profile333" id="slid">
    					<div class="sub-profile4">
                        





                          <div id="ecode1"  class="new newsAlert shadow red2" style="background-color:#A00;margin-bottom: 0px;width: 285px;margin-bottom: 15px;margin-top: 15px;padding-right: 0px;padding-left: 0px;">
            <p class="text_center while text-s" style="margin-top: 5px;margin-bottom: 0px;">ข้อมูลส่วนตัว </p>
            <br>
            </div>




                          
                          
                          <div class="img22">
                          <img src="<?php echo e(asset('img/profile.png')); ?>"/>
                          </div>
                          <div class="tb_pro">
                            <table class="pro while " border="1" style="width: 100%;">
                                <tbody>
                                
                                  <tr>
                                    <td> &nbsp;Username</td>
                                    <td>
                                       <span class="label label-info">  <?php echo e($User->Username); ?></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;ชื่อ-นามสกุล</td>
                                    <td>
                                     <span class="label label-info"><?php echo e($User->Name); ?></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;Point คงเหลือ</td>
                                    <td>
                                    <span class="label label-info"><?php echo e($User->Point); ?> Point</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;E-mail</td>
                                    <td>
                                     <span class="label label-info"><?php echo e($User->email); ?></span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                              <br>

                              <button type="submit" onclick="parent.location.href='<?php echo e(route('box.show',$User->UserID)); ?>'" style="margin-left: 15px;"  class="submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;คลังของฉัน</button>&nbsp;
                              <button type="submit" onclick="parent.location.href='<?php echo e(route('point.edit',$User->UserID)); ?>'"  class="submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;เติม Point</button>
            <button onclick="parent.location.href='<?php echo e(route('logout')); ?>'" type="button" class="submit shadow" id="reba" style="margin-left:3px;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> &nbsp;ออกจากระบบ</button>
                        </div>
                         
                         
                        	
					</div>


                </div>
            </div>
            
        </div>

          

          </div>
      </div>
        
 
    
    </div>
    <div class="pop fixed2 " id="okok" style="display:none;">
          <div class="_body" style="padding-top: 20px;  box-shadow: 0 2px 3px rgba(0,0,0,1);">
          
            <div class="sub-container22">
                <div class="sub-container2-bar">
                    <p class="text_center" style="margin: 0px;
">ยืนยันการซื้อ</p>
                </div>
                <div class="sub-container33" style=" box-shadow: 0 2px 3px rgba(0,0,0,1);
">

                    <div class="sub-container44">
                    <div>
                     
                    <div class="sub-profile88" style="margin-left: auto!important;
    margin-right: auto!important;">
                  <div class="sub-profile4 cen">
                  
                     <div id="ecode1"  class="new newsAlert shadow red2" style="background-color:#A00;margin-bottom: 0px;height: 25px;width: 300px;margin-bottom: 15px;margin-top: 15px;padding-right: 0px;padding-left: 0px;">
            <p class="text_center while text-s" style="margin-top: 5px;margin-bottom: 0px;">ซื้อไปยังคลังของ</p>
            <br>
            </div>                          
                          
                          <div class="img222">
                          <img id="aaa" src="<?php echo e(asset('img/profile.png')); ?>"/>
                          </div>
                          <div class="tb_pro">
                            <table class="pro while " border="1" style="width: 100%;">
                                <tbody>
                                
                                  <tr>
                                    <td> &nbsp;Username</td>
                                    <td>
                                       <span class="label label-info">  <?php echo e($User->Username); ?></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;ชื่อ-นามสกุล</td>
                                    <td>
                                     <span class="label label-info"><?php echo e($User->Name); ?></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;Point คงเหลือ</td>
                                    <td>
                                    <span class="label label-info"><?php echo e($User->Point); ?> Point</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;E-mail</td>
                                    <td>
                                     <span class="label label-info"><?php echo e($User->email); ?></span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                              <br>


                    </div>
                    
                    <form action="<?php echo e(route('box.store')); ?>" method="post">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    
                      <label id="demo2" style="color: #FF0000;"></label><br>
                      &nbsp;&nbsp;ราคา&nbsp;&nbsp; <label id="demo"></label>&nbsp;&nbsp;&nbsp;Point
                      
                      <input  type="hidden" id="myText" name="p" value="">
                      
                     <button type="submit" id="asd" style="margin-left: 10px;margin-bottom: 25px;"class="submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;&nbsp;ยืนยัน&nbsp;&nbsp;</button>
                       <button type="button" style="margin-left: 10px;margin-bottom: 25px;"class="cl submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;&nbsp;&nbsp;&nbsp;ปิด&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                 
                      </form>

            
          </div>
                        
                    </div>
                </div>
                    
            </div>
            
        
          </div>
      </div>
        
          </div>
    </div>
    <script>

 </script>
</body>
</html>
