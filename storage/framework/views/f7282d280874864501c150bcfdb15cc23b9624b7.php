(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib.dtac70 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.btn.onClick = function() { 
		  		 window.open("http://www.sfcinemacity.com/index.php/th/promotion/detail/Dtac-Reward-70-Baht-Promotion","_blank");
			}
	}
	this.frame_149 = function() {
		endframe();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(149).call(this.frame_149));

	// btn
	this.btn = new lib.btn();
	this.btn.setTransform(150.1,125,0.333,2.5,0,0,0,450.2,50);
	this.btn.alpha = 0.012;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.btn}]}).wait(150));

	// btn
	this.instance = new lib.btn();
	this.instance.setTransform(150,125,1,1,0,0,0,150,125);
	this.instance.alpha = 0;
	this.instance._off = true;
	new cjs.ButtonHelper(this.instance, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(40).to({_off:false},0).wait(110));

	// head
	this.instance_1 = new lib.head_1();
	this.instance_1.setTransform(150,26.5,1,1,0,0,0,150,26.5);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1).to({_off:false},0).wait(149));

	// ticket
	this.instance_2 = new lib.movieticket();
	this.instance_2.setTransform(151.7,126.1,0.404,0.404,0,0,0,54,54);
	this.instance_2.alpha = 0;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(59).to({_off:false},0).to({scaleX:1.21,scaleY:1.21,alpha:1},9,cjs.Ease.get(1)).to({scaleX:0.95,scaleY:0.95},4).to({scaleX:1,scaleY:1},4).wait(74));

	// txt
	this.instance_3 = new lib.txtwatchmovie();
	this.instance_3.setTransform(332.8,25.5,1,1,0,0,0,66,23.5);
	this.instance_3.alpha = 0;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(51).to({_off:false},0).to({x:111.9,y:56.8,alpha:1},8,cjs.Ease.get(-0.69)).to({x:113.6},3).wait(88));

	// pop-corn
	this.instance_4 = new lib.popcorn_1();
	this.instance_4.setTransform(234.5,240.6,1,0.86,0,0,0,42.5,50);
	this.instance_4.alpha = 0;
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(89).to({_off:false},0).to({scaleY:1.12,y:189.3,alpha:1},5,cjs.Ease.get(0.39)).to({scaleY:0.93,y:198.9},4).to({scaleY:1,y:195.4},4).wait(48));

	// tab
	this.instance_5 = new lib.tab_1();
	this.instance_5.setTransform(408.4,218.5,1,1,0,0,0,150,31.5);
	this.instance_5.alpha = 0;
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(79).to({_off:false},0).to({scaleX:1.02,x:147,alpha:1},6,cjs.Ease.get(1)).to({scaleX:1,x:150},4).wait(61));

	// curtain_left
	this.instance_6 = new lib.curtain_left_1();
	this.instance_6.setTransform(74.5,125,1,1,0,0,0,74.5,125);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1).to({_off:false},0).wait(18).to({x:-76.6,y:123.3},20,cjs.Ease.get(-0.57)).to({_off:true},12).wait(99));

	// curtain_right
	this.instance_7 = new lib.curtain_right_1();
	this.instance_7.setTransform(224.5,125,1,1,0,0,0,75.5,125);
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(1).to({_off:false},0).wait(18).to({x:381.1},20,cjs.Ease.get(-0.57)).to({_off:true},12).wait(99));

	// cinema chair
	this.instance_8 = new lib.cinema_chair2_1();
	this.instance_8.setTransform(150,125.1,0.938,0.926,0,0,0,160,135.1);
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(19).to({_off:false},0).wait(5).to({regY:135,scaleX:1,scaleY:1,x:145.1,y:125.7},19).wait(107));

	// bg-white
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("A3bTiMAAAgnDMAu2AAAMAAAAnDg");
	this.shape.setTransform(150,125);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape}]},1).wait(149));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,100,625);


// symbols:
(lib.bg1 = function() {
	this.initialize(img.bg1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,250);


(lib.bg2 = function() {
	this.initialize(img.bg2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,250);


(lib.cinema_chair2 = function() {
	this.initialize(img.cinema_chair2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,320,270);


(lib.curtain_left = function() {
	this.initialize(img.curtain_left);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,149,250);


(lib.curtain_right = function() {
	this.initialize(img.curtain_right);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,151,250);


(lib.head = function() {
	this.initialize(img.head);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,53);


(lib.popcorn = function() {
	this.initialize(img.popcorn);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,85,100);


(lib.tab = function() {
	this.initialize(img.tab);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,63);


(lib.ticket = function() {
	this.initialize(img.ticket);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,108,108);


(lib.txt1 = function() {
	this.initialize(img.txt1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,132,47);


(lib.txtwatchmovie = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.txt1();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,132,47);


(lib.tab_1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.tab();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,300,63);


(lib.popcorn_1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.popcorn();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,85,100);


(lib.movieticket = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.ticket();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,108,108);


(lib.head_1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.head();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,300,53);


(lib.curtain_right_1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.curtain_right();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,151,250);


(lib.curtain_left_1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.curtain_left();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,149,250);


(lib.cinema_chair2_1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.cinema_chair2();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,320,270);


(lib.btn = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("A3bTiMAAAgnDMAu2AAAMAAAAnDg");
	this.shape.setTransform(150,125);

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,300,250);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;