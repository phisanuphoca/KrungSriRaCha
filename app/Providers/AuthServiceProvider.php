<!Doctype html>
<html>
<head>
	
	<meta charset="UTF-8">
	<title>Project</title>
	<link rel="stylesheet" href="mystyle.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	<script>
		function clickOK(){
			alert("ยืนยันการโอนเงีนเรียบร้อย !!");

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
		<h2>แจ้งการโอนเงิน</h2>
		<div>
	        <center><p>ชื่อผู้โอน<img src="star.png"class="star" ><input type="text">
					</p></center> 
	              <center><p>ชื่อสินค้า<img src="star.png"class="star" ><input type="text">
					</p></center> 
					<center><p>จำนวนเงิน<img src="star.png"class="star" ><input type="text"> บาท
					</p></center> 
					<center><p>วันที่โอนเงิน<img src="star.png"class="star" >
						<select>
						  <option value="วันที่">วันที่</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="1">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="21">22</option>
						  <option value="23">23</option>
						  <option value="24">23</option>
						  <option value="25">24</option>
						  <option value="26">26</option>
						  <option value="27">27</option>
						  <option value="28">28</option>
						  <option value="39">29</option>
						  <option value="30">30</option>
						  <option value="31">31</option>
						</select>
						<select>
						  <option value="เดือน">เดือน</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="1">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						</select>
						<select>
						  <option value="พ.ศ.">พ.ศ.</option>
						  <option value="2555">2555</option>
						  <option value="2556">2556</option>
						  <option value="2557">2557</option>
						  <option value="2558">2558</option>
						  <option value="2559">2559</option>
						  <option value="31">31</option>
						</select>

					</center>
					<center>
						<center><p>ช่วงเวลา<img src="star.png"class="star" >
						<select>
						  <option value="--">--</option>
						  <option value="00">00</option>
						  <option value="01">01</option>
						  <option value="02">02</option>
						  <option value="03">03</option>
						  <option value="04">04</option>
						  <option value="05">05</option>
						  <option value="06">06</option>
						  <option value="07">07</option>
						  <option value="08">08</option>
						  <option value="09">09</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="21">22</option>
						  <option value="23">23</option>
						  <option value="24">23</option>
						  <option value="25">24</option>
						  
						</select>
						<select>
						<option value="--">--</option>
						  <option value="00">00</option>
						  <option value="01">01</option>
						  <option value="02">02</option>
						  <option value="03">03</option>
						  <option value="04">04</option>
						  <option value="05">05</option>
						  <option value="06">06</option>
						  <option value="07">07</option>
						  <option value="08">08</option>
						  <option value="09">09</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="21">22</option>
						  <option value="23">23</option>
						  <option value="24">23</option>
						  <option value="25">24</option>
						  <option value="26">26</option>
						  <option value="27">27</option>
						  <option value="28">28</option>
						  <option value="39">29</option>
						  <option value="30">30</option>
						  <option value="31">31</option>
						  <option value="32">32</option>
						  <option value="33">33</option>
						  <option value="34">34</option>
						  <option value="35">35</option>
						  <option value="36">36</option>
						  <option value="37">37</option>
						  <option value="38">38</option>
						  <option value="39">39</option>
						  <option value="40">40</option>
						  <option value="41">41</option>
						  <option value="42">42</option>
						  <option value="43">43</option>
						  <option value="44">44</option>
						  <option value="45">45</option>
						  <option value="46">46</option>
						  <option value="47">47</option>
						  <option value="48">48</option>
						  <option value="49">49</option>
						  <option value="50">50</option>
						  <option value="51">51</option>
						  <option value="51">52</option>
						  <option value="53">53</option>
						  <option value="54">53</option>
						  <option value="55">54</option>
						  <option value="56">56</option>
						  <option value="57">57</option>
						  <option value="58">58</option>
						  <option value="59">59</option>

						</select>
					</center> 
					<br>
					<center>
		  					<a href="#" onclick="clickOK();"</a>
		  					<img src="OK.png "class="photoOK" ></center>
						
	    
		
	</div>

</body>
</html>