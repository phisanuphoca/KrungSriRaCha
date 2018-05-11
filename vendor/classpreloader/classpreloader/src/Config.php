(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib.laderboard = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.btn.onClick = function() { 
		  		 window.open("http://www.sfcinemacity.com/index.php/th/promotion/detail/UOB-buy-1-get-1-Free-Promotion","_blank");
			}
	}
	this.frame_299 = function() {
	// endframe()
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(299).call(this.frame_299));

	// btn
	this.btn = new lib.btn();
	this.btn.setTransform(135,60,0.3,1.2,0,0,0,450,50);
	this.btn.alpha = 0.012;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.btn}]}).wait(300));

	// bg2
	this.instance = new lib.Tween2("synched",0);
	this.instance.setTransform(135,60);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(140).to({startPosition:0,_off:false},0).to({alpha:1},9).to({startPosition:0},140).to({alpha:0},10).wait(1));

	// bg1
	this.instance_1 = new lib.Tween1("synched",0);
	this.instance_1.setTransform(135,60);
	this.instance_1.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({alpha:1},9).to({startPosition:0},131).to({alpha:0},9).to({_off:true},1).wait(150));

	// bg
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("A1FJXIAAyuMAqLAAAIAASug");
	this.shape.setTransform(135,60);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).wait(300));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,270,120);


// symbols:
(lib.bg1 = function() {
	this.initialize(img.bg1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,270,120);


(lib.bg2 = function() {
	this.initialize(img.bg2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,270,120);


(lib.Tween2 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.bg2();
	this.instance.setTransform(-134.9,-59.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-134.9,-59.9,270,120);


(lib.Tween1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.bg1();
	this.instance.setTransform(-134.9,-59.9);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-134.9,-59.9,270,120);


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