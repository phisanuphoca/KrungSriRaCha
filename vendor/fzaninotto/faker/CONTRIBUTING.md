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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('jquery-1.9.0.min.js') }} " type="text/javascript" ></script>

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
	</script>  
<title>LUGUS</title>
</head>

<body>


	<div>
    
        <div class="navbars fixed">
            <div class="navbar2">
                <div class="logo">
                    <img src="{{ asset('img/logo2.png') }}" width="90" height="37" /> 
                </div>
                
              <div class="menu">
                    <ul id="nav">
                     <li><a href="{{ route('home.index') }}">หน้าแรก</a></li><label class="l">|</label>
                     
                        <li><a href="#">คลัง</a></li><label class="l">|</label>
                         <li><a href="{{ route('point.edit',$User->UserID)}}">เติม Point</a></li><label class="l">|</label>
                        <li><a href="{{ route('user.edit',$User->UserID) }}">แกไขข้อมูลส่วนตัว</a></li><label class="l">|</label>
                         <li><a href="{{ route('logout') }}">ออกจากระบบ</a></li><label class="l">
                        

                    </li>
                </ul>
              </div>
          </div>
        </div>
        
        <div class="_body">
       	  <div class="container">
           	<div class="sub-container">
                	<ul class="m_block">
                   	  
                      
                        @foreach($MoviesBox as $MoviesBoxs)
                          <li class="m_list m_hov">
                      <a href="#">
                        <div>
                          <div class="m_img ">
                              <img src="http://localhost:8000/img/<?php echo $MoviesBoxs->Picture;?>" class="sha"/>
                            </div>
                            
                            <a href="#" class="btn-des text_center a_blue text_co1">
                              
                                {{ $MoviesBoxs->Price}} point
                            </a>
                            <a href="#" style="background: #00FF00;" class="btn-des  a_green price2 text_center text_co2">
                              ซื้อแล้ว
                            </a>
                           
                          <div class="clear"></div>
                        </div>
                        </a>
                      </li>
                        @endforeach
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
                          <img src="{{ asset('img/profile.png') }}"/>
                          </div>
                          <div class="tb_pro">
                            <table class="pro while " border="1" style="width: 100%;">
                                <tbody>
                                
                                  <tr>
                                    <td> &nbsp;Username</td>
                                    <td>
                                       <span class="label label-info">  {{ $User->Username }}</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;ชื่อ-นามสกุล</td>
                                    <td>
                                     <span class="label label-info">{{ $User->Name }}</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;Point คงเหลือ</td>
                                    <td>
                                    <span class="label label-info">{{ $User->Point }} Point</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> &nbsp;E-mail</td>
                                    <td>
                                     <span class="label label-info">{{ $User->email }}</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                              <br>

                              <button type="submit" style="margin-left: 15px;"  class="submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;คลังของฉัน</button>&nbsp;
                              <button type="submit" onclick="parent.location.href='{{ route('point.edit',$User->UserID) }}'" class="submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;เติม Point</button>
            <button onclick="parent.location.href='{{ route('logout') }}'" type="button" class="submit shadow" id="reba" style="margin-left:3px;"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> &nbsp;ออกจากระบบ</button>
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
