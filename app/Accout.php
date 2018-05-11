<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Project</title>
	<link rel="shortcut icon" href="icon.png" type="image/x-icon">
	<link rel="stylesheet" href="mystyle.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	<script>
		function clickBy(){
			alert("สั่งซื้อสำเร็จ 231312");

		}
	</script>
	
</head>
<body class="bodybg">
	<div >
		<p class="text"><img src="13199.jpg"  class="photo-1"></p>
	</div>
	<div class="row">
		<nav>
    <div class="btn-group btn-group-justified" role="group">
        <div class="btn-group" role="group">
            <a class="btn btn-primary btn-color-overlay" href="project.html" role="button"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> หน้าแรก</a>
        </div>
	   
	    <div class="btn-group" role="group">
	        <a class="btn btn-default btn-color-overlay" href="notification.html" role="button"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> วิธีการชำระเงิน</a>
	    </div>
	    <div class="btn-group" role="group">
	        <a class="btn btn-default btn-color-overlay" href="notification.html" role="button"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> แจ้งการโอนเงิน</a>
	    </div>
	    <div class="btn-group" role="group">
	        <a class="btn btn-default btn-color-overlay" href="contact.html" role="button"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> ติดต่อร้าน</a>
	    </div>
	    <div class="btn-group" role="group">
	        <a class="btn btn-default btn-color-overlay" href="login.html" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Login</a>
	     </div>
    </div>
</nav>

  	</div>
	<br>
	<div class="col-xs-3 bodysinka">
	 	<div class="panel panel-default transparent-overlay">
	    <div class="panel-heading panel-overlay"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
	    	รายการสินค้า
	    </div>
	    <div class="panel-body panel-overlay">
	    	<ul class="category-menu">
			    <li>
			    	<a href="{{ url('/shirt') }}">เสื้อผ้า</a>
			    </li>
			    <ul>
			    	<li>
		    			<a href="shirt.html">เสื้อ</a>
		    		</li>
		    		<li>
			   			<a href="shirt.html">สินค้าลดราคาพิเศษ</a>
		    		</li>
		    	</ul>
		    	<li>
		    		<a href="boot1.html">รองเท้า</a>
		    	</li>
		    	<ul>
		    		<li>
		    			<a href="boot1.html">รองเท้า</a>
		    		</li>
		    		<li>
		    			<a href="boot1.html">สินค้าลดราคาพิเศษ</a>
			   		</li>
			   	</ul>
			    	<li>
			    		<a href="bag1.html">กระเป๋า</a>
			    	</li>
			  	<ul>
			   		<li>
			   			<a href="bag1.html">กระเป๋า</a>
			   		</li>
			   		<li>
			   			<a href="bag1.html">สินค้าลดราคาพิเศษ</a>
			   		</li>
			   	</ul>
		    </ul>	
	    </div>
		<br>
		<br>
		
		</div>
		<br>
		<br>
	  	<div class="sinkabest">
	  	<div class="panel panel-default transparent-overlay">
	    <div class="panel-heading panel-overlay"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
	    	สินค้ามาใหม่
	    </div>
	    <div class="panel-body panel-overlay">
	      	<div class="text-center">
	       	    <ul class="category-menu">
	       	    	<div style="margin-right: 35px;">
						<img src="shirt1.jpg" class="photobest" style="width:100px; height:100px;"><br><p>เสื้อผ้าแฟชั่น ลายWASHINGTON BULLDOGS</p><br>
						<img src="boot1.jpg" class="photobest" style="width:100px; height:100px;"><br><p>รองเท้า NIKE สะท้อนแสง</p><br>
						<img src="bag1.jpg" class="photobest" style="width:100px; height:100px;"><br><p>กระเป๋า YAGMAN</p>
					</div>
				</ul>
	      </div>    
	    </div>
	</div>
	</div>
	</div>
		<br>
	<div class="col-xs-8">
	  	<h2>ร้องเท้า</h2>
	  	<br>
	  	<br>
		<tbody>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot1.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot2.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot4.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot5.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot6.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot7.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot8.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot9.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot10.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot11.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot12.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot14.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า converse</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot13.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า new balance</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot15.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า new balance</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot16.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า new balance</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot17.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า new balance</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot18.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า nike</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		  		<div class="productrow col-md-4">
		  			<tbody>
		  				<tr>
		  					<center><img src="boot20.jpg"class="photoboot"></center>
		  					<center><p>รองเท้า nike</p></center>
		  					<br>
		  					<p class="textdecoration">ปกติราคา 1590 บาท</p>
		  					<p class="fontspeacial"> พิเศษราคา 1390 บาท</p>
		  					<center><a href="#" onclick="clickBy();"><img src="buy1.gif "class="photobuy"></a></center>
		  				</tr>
		  			</tbody>
		  		</div>
		</tbody>
		
		<div class="col-xs-12"><center><a href="boot2.html">หน้า2 >></a></center></div>
	</div>
	  
	</div>
	

</body>
</html>