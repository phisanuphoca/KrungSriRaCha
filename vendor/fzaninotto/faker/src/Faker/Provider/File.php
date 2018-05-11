<!DOCTYPE html>
<html>
<head>
<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>  " rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('style.css')); ?>">
    <script src="js/jquery-2.1.4.min.js"></script>
     
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
                        <li><a href="<?php echo e(route('box.show',$User->UserID)); ?>">คลัง</a></li><label class="l">|</label>
                        
                        <li><a href="<?php echo e(route('user.edit',$User->UserID)); ?>">แกไขข้อมูลส่วนตัว</a></li><label class="l">|</label>
                         <li><a href="<?php echo e(route('logout')); ?>">ออกจากระบบ</a></li><label class="l">
                    </li>
                </ul>
              </div>
          </div>
        </div>
        
        <div class="_body">
       	  
           	<div class="sub-container22">
                <div class="sub-container2-bar">
                    <p class="text_center" style="margin: 0px;
">เตืม Point</p>
                </div>
                <div class="sub-container33">

                    <div class="sub-container44">
                    <div>
                     
                    <div class="sub-profile88" style="margin-left: auto!important;
    margin-right: auto!important;">
                  <div class="sub-profile4 cen">
                  
                     <div id="ecode1"  class="new newsAlert shadow red2" style="background-color:#A00;margin-bottom: 0px;width: 300px;margin-bottom: 15px;margin-top: 15px;padding-right: 0px;padding-left: 0px;height: 35px;">
            <p class="text_center while text-s" style="margin-top: 5px;margin-bottom: 0px;">ข้อมูลส่วนตัว </p>
            <br>
            </div>                          
                          
                          <div class="img222">
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


                    </div>
                    
                    <form action="<?php echo e(route('point.update',$User->UserID)); ?>" method="post">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="_method" value="put">
                   <aa style="color:#00FF00;margin-left: 70px;">&nbsp;<?php echo e($ttt); ?>&nbsp;</aa>
                    <input name="point" type="number" class="form-control4" id="txt_id" placeholder="รหัสแลก Point" maxlength="30"><br /><br />
                   		 
						          <button type="submit" id="ok1" style="margin-left: 112px;margin-bottom: 25px;"class="submit shadow" ><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> &nbsp;ยืนยัน</button>
                    </form>
					</div>
                        
                    </div>
                </div>
                    
            </div>
            
        
          </div>
      </div>
        
 
    

</body>
</html>
