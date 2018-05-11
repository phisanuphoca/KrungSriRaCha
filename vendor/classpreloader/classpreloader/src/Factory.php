(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib.laderboard = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.btn.onClick = function() { 
		  		 window.open("https://www.facebook.com/WeLoveSF","_blank");
			}
	}
	this.frame_299 = function() {
		endframe();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(299).call(this.frame_299));

	// btn
	this.btn = new lib.btn();
	this.btn.setTransform(130.5,60,0.29,1.2,0,0,0,449.9,50);
	this.btn.alpha = 0.012;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.btn}]}).wait(300));

	// fb
	this.instance = new lib.Tween6("synched",0);
	this.instance.setTransform(131,20);
	this.instance.alpha = 0.012;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(194).to({startPosition:0,_off:false},0).to({y:70,alpha:1},5).to({y:60},1).to({startPosition:0},99).wait(1));

	// t3
	this.instance_1 = new lib.Tween5("synched",0);
	this.instance_1.setTransform(131,10);
	this.instance_1.alpha = 0.012;
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(189).to({startPosition:0,_off:false},0).to({y:70,alpha:1},5).to({y:60},1).to({startPosition:0},104).wait(1));

	// t3
	this.instance_2 = new lib.Tween4("synched",0);
	this.instance_2.setTransform(131,10);
	this.instance_2.alpha = 0.012;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(99).to({startPosition:0,_off:false},0).to({y:70,alpha:1},5).to({y:60},1).to({startPosition:0},84).to({y:110,alpha:0.012},5).to({_off:true},1).wait(105));

	// t2
	this.instance_3 = new lib.Tween3("synched",0);
	this.instance_3.setTransform(131,10);
	this.instance_3.alpha = 0.012;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(94).to({startPosition:0,_off:false},0).to({y:70,alpha:1},5).to({y:60},1).to({startPosition:0},89).to({y:110,alpha:0.012},5).to({_off:true},1).wait(105));

	// we
	this.instance_4 = new lib.Tween2("synched",0);
	this.instance_4.setTransform(131,20);
	this.instance_4.alpha = 0.012;
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(14).to({startPosition:0,_off:false},0).to({y:70,alpha:1},5).to({y:60},1).to({startPosition:0},74).to({y:110,alpha:0.012},5).to({_off:true},1).wait(200));

	// t1
	this.instance_5 = new lib.Tween1("synched",0);
	this.instance_5.setTransform(131,10);
	this.instance_5.alpha = 0.012;
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(9).to({startPosition:0,_off:false},0).to({y:70,alpha:1},5).to({y:60},1).to({startPosition:0},79).to({y:110,alpha:0.012},5).to({_off:true},1).wait(200));

	// bg
	this.instance_6 = new lib.bg();

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_6}]}).wait(300));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,262,120);


// symbols:
(lib.bg = function() {
	this.initialize(img.bg);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,262,120);


(lib.fb = function() {
	this.initialize(img.fb);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,262,120);


(lib.like = function() {
	this.initialize(img.like);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,262,120);


(lib.t1 = function() {
	this.initialize(img.t1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,262,120);


(lib.t2 = function() {
	this.initialize(img.t2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,262,120);


(lib.t3 = function() {
	this.initialize(img.t3);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,262,120);


(lib.welove = function() {
	this.initialize(img.welove);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,262,120);


(lib.Tween6 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.fb();
	this.instance.setTransform(-130.9,-59.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-130.9,-59.9,262,120);


(lib.Tween5 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.like();
	this.instance.setTransform(-130.9,-59.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-130.9,-59.9,262,120);


(lib.Tween4 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.t3();
	this.instance.setTransform(-130.9,-59.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-130.9,-59.9,262,120);


(lib.Tween3 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.t2();
	this.instance.setTransform(-130.9,-59.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-130.9,-59.9,262,120);


(lib.Tween2 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.welove();
	this.instance.setTransform(-130.9,-59.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-130.9,-59.9,262,120);


(lib.Tween1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.t1();
	this.instance.setTransform(-130.9,-59.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-130.9,-59.9,262,120);


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