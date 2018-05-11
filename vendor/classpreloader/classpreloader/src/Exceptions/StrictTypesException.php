(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib.laderboard = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.btn.onClick = function() { 
		  		 window.open("http://www.sfcinemacity.com/index.php/th/promotion-detail/Bangkok-International-Film-Festival-on-Ending-Violence-Against-Women-and-Girls-2015","_blank");
			}
	}
	this.frame_349 = function() {
		endframe();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(349).call(this.frame_349));

	// mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("EhGTAHzIAAvmMCMnAAAIAAPmg");
	mask.setTransform(450,50);

	// btn
	this.btn = new lib.btn();
	this.btn.setTransform(450,50,1,1,0,0,0,450,50);
	this.btn.alpha = 0.012;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.btn}]}).wait(350));

	// logo
	this.instance = new lib.Tween9("synched",0);
	this.instance.setTransform(480,50);
	this.instance.alpha = 0.012;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(294).to({startPosition:0,_off:false},0).to({x:450,alpha:1},5).wait(51));

	// www
	this.instance_1 = new lib.Tween8("synched",0);
	this.instance_1.setTransform(400,50);
	this.instance_1.alpha = 0.012;
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(194).to({startPosition:0,_off:false},0).to({x:450,alpha:1},5).to({startPosition:0},95).to({x:400,alpha:0.012},5).to({_off:true},1).wait(50));

	// free
	this.instance_2 = new lib.Tween7("synched",0);
	this.instance_2.setTransform(500,50);
	this.instance_2.alpha = 0.012;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(194).to({startPosition:0,_off:false},0).to({x:450,alpha:1},5).to({startPosition:0},95).to({x:500,alpha:0.012},5).to({_off:true},1).wait(50));

	// at
	this.instance_3 = new lib.Tween6("synched",0);
	this.instance_3.setTransform(400,50);
	this.instance_3.alpha = 0.012;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(94).to({startPosition:0,_off:false},0).to({x:450,alpha:1},6).to({startPosition:0},94).to({x:400,alpha:0.012},5).to({_off:true},1).wait(150));

	// date
	this.instance_4 = new lib.Tween5("synched",0);
	this.instance_4.setTransform(500,50);
	this.instance_4.alpha = 0.012;
	this.instance_4._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(94).to({startPosition:0,_off:false},0).to({x:450,alpha:1},6).to({startPosition:0},94).to({x:500,alpha:0.012},5).to({_off:true},1).wait(150));

	// t2
	this.instance_5 = new lib.Tween4("synched",0);
	this.instance_5.setTransform(400,50);
	this.instance_5.alpha = 0.012;
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(14).to({startPosition:0,_off:false},0).to({x:450,alpha:1},5).to({startPosition:0},75).to({x:400,alpha:0.012},6).to({_off:true},1).wait(249));

	// t1
	this.instance_6 = new lib.Tween3("synched",0);
	this.instance_6.setTransform(500,50);
	this.instance_6.alpha = 0.012;
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(14).to({startPosition:0,_off:false},0).to({x:450,alpha:1},5).to({startPosition:0},75).to({x:500,alpha:0.012},6).to({_off:true},1).wait(249));

	// eye
	this.instance_7 = new lib.eye();

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_7}]},29).to({state:[]},3).to({state:[{t:this.instance_7}]},27).to({state:[]},3).to({state:[{t:this.instance_7}]},57).to({state:[]},3).to({state:[{t:this.instance_7}]},37).to({state:[]},3).to({state:[{t:this.instance_7}]},77).to({state:[]},3).to({state:[{t:this.instance_7}]},37).to({state:[]},3).to({state:[{t:this.instance_7}]},37).to({state:[]},3).wait(28));

	// bg
	this.instance_8 = new lib.Tween1("synched",0);
	this.instance_8.setTransform(500,50);
	this.instance_8.alpha = 0.012;
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(4).to({startPosition:0,_off:false},0).to({x:450,alpha:1},5).wait(341));

	// cruve
	this.instance_9 = new lib.cruve();

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_9}]}).wait(350));

	// film
	this.instance_10 = new lib.Tween2("synched",0);
	this.instance_10.setTransform(450,100);
	this.instance_10.alpha = 0.012;
	this.instance_10._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(4).to({startPosition:0,_off:false},0).to({y:50,alpha:1},5).wait(341));

	// bg
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("EhGTAHzIAAvmMCMnAAAIAAPmg");
	this.shape.setTransform(450,50);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).wait(350));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


// symbols:
(lib.atSFW = function() {
	this.initialize(img.atSFW);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.bg = function() {
	this.initialize(img.bg);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.cruve = function() {
	this.initialize(img.cruve);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.date = function() {
	this.initialize(img.date);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.eye = function() {
	this.initialize(img.eye);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.film = function() {
	this.initialize(img.film);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.free = function() {
	this.initialize(img.free);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.logosponser = function() {
	this.initialize(img.logosponser);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.t1 = function() {
	this.initialize(img.t1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.t2 = function() {
	this.initialize(img.t2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.www = function() {
	this.initialize(img.www);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,100);


(lib.Tween9 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.logosponser();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween8 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.www();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween7 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.free();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween6 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.atSFW();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween5 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.date();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween4 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.t2();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween3 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.t1();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween2 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.film();
	this.instance.setTransform(-449.9,-49.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-449.9,-49.9,900,100);


(lib.Tween1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.bg();
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