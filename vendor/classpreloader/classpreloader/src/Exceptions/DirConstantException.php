(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib.laderboard = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.btn.onClick = function() { 
		  		 window.open("http://www.emprivecineclub.com/","_blank");
			}
	}
	this.frame_794 = function() {
		endframe();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(794).call(this.frame_794));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("EhGTAHzIAAvmMCMnAAAIAAPmg");
	mask.setTransform(450,50);

	// btn
	this.btn = new lib.btn();
	this.btn.setTransform(450,50,1,1,0,0,0,450,50);
	this.btn.alpha = 0.012;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.btn}]}).wait(795));

	// at
	this.instance = new lib.Tween8("synched",0);
	this.instance.setTransform(480,50);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(224).to({startPosition:0,_off:false},0).to({x:450,alpha:1},20).to({startPosition:0},105).to({x:480,alpha:0},20).to({_off:true},1).wait(248).wait(1).to({startPosition:0,_off:false},0).to({x:450,alpha:1},20).wait(156));

	// open2
	this.instance_1 = new lib.Tween10("synched",0);
	this.instance_1.setTransform(480,50);
	this.instance_1.alpha = 0;
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(604).to({startPosition:0,_off:false},0).to({x:450,alpha:1},20).wait(171));

	// open
	this.instance_2 = new lib.Tween7("synched",0);
	this.instance_2.setTransform(480,50);
	this.instance_2.alpha = 0;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(209).to({startPosition:0,_off:false},0).to({x:450,alpha:1},20).to({startPosition:0},135).to({x:480,alpha:0},20).to({_off:true},1).wait(410));

	// pic
	this.instance_3 = new lib.Tween6("synched",0);
	this.instance_3.setTransform(480,50);
	this.instance_3.alpha = 0;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(194).to({startPosition:0,_off:false},0).to({x:450,alpha:1},20).to({startPosition:0},165).to({x:480,alpha:0},20).to({_off:true},1).wait(188).wait(1).to({startPosition:0,_off:false},0).to({x:450,alpha:1},20).wait(186));

	// t1
	this.instance_4 = new lib.Tween5("synched",0);
	this.instance_4.setTransform(450,20);
	this.instance_4.alpha = 0;
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(44).to({startPosition:0,_off:false},0).to({y:50,alpha:1},20).to({startPosition:0},86).to({y:20,alpha:0},20).to({_off:true},1).wait(267).wait(1).to({startPosition:0,_off:false},0).to({y:50,alpha:1},20).to({startPosition:0},86).to({y:20,alpha:0},20).to({_off:true},1).wait(229));

	// logo2
	this.instance_5 = new lib.Tween4("synched",0);
	this.instance_5.setTransform(450,20);
	this.instance_5.alpha = 0;
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(29).to({startPosition:0,_off:false},0).to({y:50,alpha:1},20).to({startPosition:0},115).to({y:20,alpha:0},20).to({_off:true},1).wait(238).wait(1).to({startPosition:0,_off:false},0).to({y:50,alpha:1},20).to({startPosition:0},115).to({y:20,alpha:0},20).to({_off:true},1).wait(215));

	// logo1
	this.instance_6 = new lib.Tween3("synched",0);
	this.instance_6.setTransform(450,20);
	this.instance_6.alpha = 0;
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(14).to({startPosition:0,_off:false},0).to({y:50,alpha:1},20).to({startPosition:0},145).to({y:20,alpha:0},20).to({_off:true},1).wait(208).wait(1).to({startPosition:0,_off:false},0).to({y:50,alpha:1},20).to({startPosition:0},145).to({y:20,alpha:0},20).to({_off:true},1).wait(200));

	// bg2
	this.instance_7 = new lib.Tween9("synched",0);
	this.instance_7.setTransform(450,50);
	this.instance_7.alpha = 0;
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(394).to({startPosition:0,_off:false},0).to({alpha:1},20).wait(381));

	// bg1
	this.instance_8 = new lib.Tween2("synched",0);
	this.instance_8.setTransform(400,50);
	this.instance_8.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).to({x:450,alpha:1},19).to({startPosition:0},360).to({x:400,alpha:0},20).to({_off:true},1).wait(395));

	// bg
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("EhGTAHzIAAvmMCMnAAAIAAPmg");
	this.shape.setTransform(450,50);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).wait(795));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-49.9,0,950,100);


// symbols:
(lib.at = function() {
	this.initialize(img.at);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.bg1 = function() {
	this.initialize(img.bg1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.bg2 = function() {
	this.initialize(img.bg2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.logo1 = function() {
	this.initialize(img.logo1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.logo2 = function() {
	this.initialize(img.logo2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.logosf = function() {
	this.initialize(img.logosf);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.open1 = function() {
	this.initialize(img.open1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.open2 = function() {
	this.initialize(img.open2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.pic = function() {
	this.initialize(img.pic);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.t1 = function() {
	this.initialize(img.t1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.Tween10 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.open2();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween9 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.bg2();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween8 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.at();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween7 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.open1();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween6 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.pic();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween5 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.t1();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween4 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.logo2();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween3 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.logo1();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween2 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.bg1();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.btn = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("EhGTAHzIAAvmMCMnAAAIAAPmg");
	this.shape.setTransform(450,50);

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;