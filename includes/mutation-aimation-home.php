<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script>
function LoadGFonts(families, comp) {				
	var lib=comp.getLibrary();				
	var googleObject = {type: "Google", loadedFonts: 0, totalFonts: families.length, callOnLoad: lib.gfontAvailable};				
	for(var i =0; i < families.length; i++)				
		isFontAvailable(gFontsFamilies[i], googleObject);				
}
function isFontAvailable(font, obj) {				
	var timeOut = 5000;				
	var delay = 200;				
	var interval = 0;				
	var timeElapsed = 0;				
	function checkFont() {				
		var node = document.createElement("span");				
		node.innerHTML = "giItT1WQy@!-/#";				
		node.style.position      = "absolute";				
		node.style.left          = "-1000px";				
		node.style.top           = "-1000px";				
		node.style.fontSize      = "300px";				
		node.style.fontFamily    = "sans-serif";				
		node.style.fontVariant   = "normal";				
		node.style.fontStyle     = "normal";				
		node.style.fontWeight    = "normal";				
		node.style.letterSpacing = "0";				
		document.body.appendChild(node);				
		var width = node.offsetWidth;				
		node.style.fontFamily = font+","+node.style.fontFamily;				
		var returnVal = false;				
		if((node && node.offsetWidth != width) || timeElapsed >=timeOut) {				
			obj.loadedFonts++;				
			if(interval)				
				clearInterval(interval);				
			obj.callOnLoad(font, obj.totalFonts);				
			returnVal = true;				
		}				
		if(node) {				
			node.parentNode.removeChild(node);				
			node = null;				
		}				
		timeElapsed += delay;				
		return returnVal;				
	}				
	if(!checkFont()) {				
		interval = setInterval(checkFont, delay);				
	}				
}
</script>
<script>
	var gFontsFamilies = ["Poppins"];
</script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:700&subset=latin">
<script>
(function (cjs, an) {
var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [
		{name:"mutantoAnimation_atlas_1", frames: [[0,0,284,455],[286,0,262,458]]}
];
lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		
lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != null && cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != null && cur2 != cur) {		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {		
		cur = textInst;		
		while(cur != null && cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		
lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		
	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		
lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		
	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
(lib.AnMovieClip = function(){
	this.actionFrames = [];
	this.ignorePause = false;
	this.gotoAndPlay = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndPlay.call(this,positionOrLabel);
	}
	this.play = function(){
		cjs.MovieClip.prototype.play.call(this);
	}
	this.gotoAndStop = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndStop.call(this,positionOrLabel);
	}
	this.stop = function(){
		cjs.MovieClip.prototype.stop.call(this);
	}
}).prototype = p = new cjs.MovieClip();
// symbols:
(lib.adelante2x = function() {
	this.initialize(ss["mutantoAnimation_atlas_1"]);
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();
(lib.atras2x = function() {
	this.initialize(ss["mutantoAnimation_atlas_1"]);
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();
// helper functions:
function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop, this.reversed));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}
function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}
(lib.Tween1 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);
	// Layer_1
	this.instance = new lib.adelante2x();
	this.instance.setTransform(-136.5,-116.45,0.682,0.6445,0,-16.9095,-14.2458);
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));
	this._renderFirstFrame();
}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-136.5,-164.1,273,328.29999999999995);
(lib.AroDelante = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);
	// Layer_1
	this.instance = new lib.atras2x();
	this.instance.setTransform(0,43.95,0.682,0.6445,0,-16.9095,-14.2458);
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));
	this._renderFirstFrame();
}).prototype = getMCSymbolPrototype(lib.AroDelante, new cjs.Rectangle(0,0,259.1,326.4), null);
(lib.AroDetas = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);
	// Aro_Detras
	this.instance = new lib.AroDelante();
	this.instance.setTransform(129.5,163.2,1,1,0,0,0,129.5,163.2);
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));
	this._renderFirstFrame();
}).prototype = getMCSymbolPrototype(lib.AroDetas, new cjs.Rectangle(0,0,259.1,326.4), null);
// stage content:
(lib.mutantoAnimation = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);
	// Tours_Front
	this.instance = new lib.Tween1("synched",0);
	this.instance.setTransform(129.05,147.05);
	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:2.0716,x:331.65,y:146.55},4).to({rotation:4.6624,x:776.15,y:145.95},5).to({rotation:7.2523,x:1051.35,y:145.35},5).to({regX:0.1,regY:0.1,scaleX:0.9999,scaleY:0.9999,rotation:9.8432,x:1183.75,y:144.85},5).to({scaleX:1,scaleY:1,rotation:12.4343,x:1236.05,y:144.15},5).to({rotation:8.6473,x:1182.2,y:144.2},5).to({rotation:4.86,x:860.85},5).to({regY:0.2,scaleX:0.9999,scaleY:0.9999,rotation:1.072,x:528.5,y:144.35},5).to({rotation:-2.7149,x:322.4},5).to({regY:0.3,rotation:-6.5034,x:201.45,y:144.45},5).to({regX:0.2,regY:0.4,rotation:-10.2929,x:140.9},5).to({regX:0.1,regY:0.1,scaleX:1,scaleY:1,rotation:-14.0829,x:124.15,y:144.2,alpha:0},5).wait(1).to({regX:0,regY:0,rotation:0,x:129.05,y:147.05,alpha:1},0).to({rotation:2.0716,x:331.65,y:146.55},4).to({rotation:4.6624,x:776.15,y:145.95},5).to({rotation:7.2523,x:1051.35,y:145.35},5).to({regX:0.1,regY:0.1,scaleX:0.9999,scaleY:0.9999,rotation:9.8432,x:1183.75,y:144.85},5).to({scaleX:1,scaleY:1,rotation:12.4343,x:1236.05,y:144.15},5).to({rotation:8.6473,x:1182.2,y:144.2},5).to({rotation:4.86,x:860.85},5).to({regY:0.2,scaleX:0.9999,scaleY:0.9999,rotation:1.072,x:528.5,y:144.35},5).to({rotation:-2.7149,x:322.4},5).to({regY:0.3,rotation:-6.5034,x:201.45,y:144.45},5).to({regX:0.2,regY:0.4,rotation:-10.2929,x:140.9},5).to({regX:0.1,regY:0.1,scaleX:1,scaleY:1,rotation:-14.0829,x:124.15,y:144.2,alpha:0},5).wait(1));
	// Mascara_1 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_0 = new cjs.Graphics().p("Al0MjIAA5FILpAAIAAZFg");
	var mask_graphics_2 = new cjs.Graphics().p("Ar9RnMAAAgjNIX7AAMAAAAjNg");
	var mask_graphics_3 = new cjs.Graphics().p("AvnQFMAAAggJIfPAAMAAAAgJg");
	var mask_graphics_4 = new cjs.Graphics().p("AzwT7MAAAgn1MAnhAAAMAAAAn1g");
	var mask_graphics_5 = new cjs.Graphics().p("A6DWBMAAAgsBMA0HAAAMAAAAsBg");
	var mask_graphics_6 = new cjs.Graphics().p("EghsASYMAAAgkvMBDZAAAMAAAAkvg");
	var mask_graphics_7 = new cjs.Graphics().p("EgpcAPoIAA/PMBS5AAAIAAfPg");
	var mask_graphics_8 = new cjs.Graphics().p("Egv8AQZMAAAggxMBf5AAAMAAAAgxg");
	var mask_graphics_9 = new cjs.Graphics().p("Eg3EAOkIAA9HMBuJAAAIAAdHg");
	var mask_graphics_10 = new cjs.Graphics().p("Eg9mAOQIAA8fMB7NAAAIAAcfg");
	var mask_graphics_11 = new cjs.Graphics().p("Eg+xASZMAAAgkxMB9jAAAMAAAAkxg");
	var mask_graphics_12 = new cjs.Graphics().p("EhDIAQ3MAAAghtMCGRAAAMAAAAhtg");
	var mask_graphics_13 = new cjs.Graphics().p("EhHLAREMAAAgiHMCOXAAAMAAAAiHg");
	var mask_graphics_14 = new cjs.Graphics().p("EhNaANyIAA7jMCa1AAAIAAbjg");
	var mask_graphics_15 = new cjs.Graphics().p("EhMdAPLIAA+VMCY7AAAIAAeVg");
	var mask_graphics_16 = new cjs.Graphics().p("EhPaAO3IAA9tMCe1AAAIAAdtg");
	var mask_graphics_17 = new cjs.Graphics().p("EhR4ARzMAAAgjlMCjxAAAMAAAAjlg");
	var mask_graphics_18 = new cjs.Graphics().p("EhUXATdMAAAgm5MCovAAAMAAAAm5g");
	var mask_graphics_19 = new cjs.Graphics().p("EhUVAQ3MAAAghtMCorAAAMAAAAhtg");
	var mask_graphics_20 = new cjs.Graphics().p("EhXqANVIAA6pMCvVAAAIAAapg");
	var mask_graphics_21 = new cjs.Graphics().p("EhW0APoIAA/PMCtpAAAIAAfPg");
	var mask_graphics_22 = new cjs.Graphics().p("EhYvAQtMAAAghZMCxfAAAMAAAAhZg");
	var mask_graphics_23 = new cjs.Graphics().p("EhX8AO4IAA9vMCv5AAAIAAdvg");
	var mask_graphics_24 = new cjs.Graphics().p("EhW9APBIAA+BMCt7AAAIAAeBg");
	var mask_graphics_25 = new cjs.Graphics().p("EhWMAWBMAAAgsBMCsZAAAMAAAAsBg");
	var mask_graphics_26 = new cjs.Graphics().p("EhWgASKMAAAgkTMCtBAAAMAAAAkTg");
	var mask_graphics_27 = new cjs.Graphics().p("EhWtAR2MAAAgjrMCtbAAAMAAAAjrg");
	var mask_graphics_28 = new cjs.Graphics().p("EhXCAQSMAAAggjMCuFAAAMAAAAgjg");
	var mask_graphics_29 = new cjs.Graphics().p("EhWSAPCIAA+DMCslAAAIAAeDg");
	var mask_graphics_30 = new cjs.Graphics().p("EhTHAOuIAA9bMCmPAAAIAAdbg");
	var mask_graphics_31 = new cjs.Graphics().p("EhNtAREMAAAgiHMCbbAAAMAAAAiHg");
	var mask_graphics_32 = new cjs.Graphics().p("EhJpAPMIAA+XMCTTAAAIAAeXg");
	var mask_graphics_33 = new cjs.Graphics().p("EhC6AOQIAA8fMCF1AAAIAAcfg");
	var mask_graphics_34 = new cjs.Graphics().p("Eg+3APgIAA+/MB9vAAAIAAe/g");
	var mask_graphics_35 = new cjs.Graphics().p("Eg7QANeIAA67MB2hAAAIAAa7g");
	var mask_graphics_36 = new cjs.Graphics().p("Eg0qAN8IAA73MBpVAAAIAAb3g");
	var mask_graphics_37 = new cjs.Graphics().p("Egv/ALmIAA3LMBf/AAAIAAXLg");
	var mask_graphics_38 = new cjs.Graphics().p("EgqLANKIAA6TMBUXAAAIAAaTg");
	var mask_graphics_39 = new cjs.Graphics().p("Egi1AMOIAA4bMBFrAAAIAAYbg");
	var mask_graphics_40 = new cjs.Graphics().p("EgimANKIAA6TMBFNAAAIAAaTg");
	var mask_graphics_41 = new cjs.Graphics().p("A/wKWIAA0rMA/hAAAIAAUrg");
	var mask_graphics_42 = new cjs.Graphics().p("A7bNeIAA67MA23AAAIAAa7g");
	var mask_graphics_43 = new cjs.Graphics().p("A5CM2IAA5rMAyFAAAIAAZrg");
	var mask_graphics_44 = new cjs.Graphics().p("A2UQmMAAAghLMAspAAAMAAAAhLg");
	var mask_graphics_45 = new cjs.Graphics().p("AzmSoMAAAglPMAnNAAAMAAAAlPg");
	var mask_graphics_46 = new cjs.Graphics().p("AvhPMIAA+XIfDAAIAAeXg");
	var mask_graphics_47 = new cjs.Graphics().p("AuEOQIAA8fIcJAAIAAcfg");
	var mask_graphics_48 = new cjs.Graphics().p("AsUQmMAAAghLIYpAAMAAAAhLg");
	var mask_graphics_49 = new cjs.Graphics().p("Ap/NKIAA6TIT/AAIAAaTg");
	var mask_graphics_50 = new cjs.Graphics().p("AqjSAMAAAgj/IVHAAMAAAAj/g");
	var mask_graphics_51 = new cjs.Graphics().p("AnCRYMAAAgivIOFAAMAAAAivg");
	var mask_graphics_52 = new cjs.Graphics().p("AkhQwMAAAghfIJDAAMAAAAhfg");
	var mask_graphics_53 = new cjs.Graphics().p("AkqOuIAA9bIJVAAIAAdbg");
	var mask_graphics_60 = new cjs.Graphics().p("AjDGIIAAsPIGHAAIAAMPg");
	var mask_graphics_62 = new cjs.Graphics().p("AowUCMAAAgoDIRhAAMAAAAoDg");
	var mask_graphics_63 = new cjs.Graphics().p("AsVWBMAAAgsBIYrAAMAAAAsBg");
	var mask_graphics_64 = new cjs.Graphics().p("AxEWBMAAAgsBMAiJAAAMAAAAsBg");
	var mask_graphics_65 = new cjs.Graphics().p("A3VWBMAAAgsBMAurAAAMAAAAsBg");
	var mask_graphics_66 = new cjs.Graphics().p("A+rUMMAAAgoXMA9XAAAMAAAAoXg");
	var mask_graphics_67 = new cjs.Graphics().p("EgmvAWBMAAAgsBMBNfAAAMAAAAsBg");
	var mask_graphics_68 = new cjs.Graphics().p("EgtFATuMAAAgnbMBaLAAAMAAAAnbg");
	var mask_graphics_69 = new cjs.Graphics().p("Eg0pATQMAAAgmfMBpTAAAMAAAAmfg");
	var mask_graphics_70 = new cjs.Graphics().p("Eg5kATaMAAAgmzMBzJAAAMAAAAmzg");
	var mask_graphics_71 = new cjs.Graphics().p("Eg89AR2MAAAgjrMB57AAAMAAAAjrg");
	var mask_graphics_72 = new cjs.Graphics().p("EhBSAR2MAAAgjrMCClAAAMAAAAjrg");
	var mask_graphics_73 = new cjs.Graphics().p("EhF5ARYMAAAgivMCLzAAAMAAAAivg");
	var mask_graphics_74 = new cjs.Graphics().p("EhKNASoMAAAglPMCUbAAAMAAAAlPg");
	var mask_graphics_75 = new cjs.Graphics().p("EhLcARsMAAAgjXMCW5AAAMAAAAjXg");
	var mask_graphics_76 = new cjs.Graphics().p("EhN9AR2MAAAgjrMCb7AAAMAAAAjrg");
	var mask_graphics_77 = new cjs.Graphics().p("EhPlAREMAAAgiHMCfLAAAMAAAAiHg");
	var mask_graphics_78 = new cjs.Graphics().p("EhRnAREMAAAgiHMCjPAAAMAAAAiHg");
	var mask_graphics_79 = new cjs.Graphics().p("EhTFATGMAAAgmLMCmLAAAMAAAAmLg");
	var mask_graphics_80 = new cjs.Graphics().p("EhU6APgIAA+/MCp1AAAIAAe/g");
	var mask_graphics_81 = new cjs.Graphics().p("EhU6AR2MAAAgjrMCp1AAAMAAAAjrg");
	var mask_graphics_82 = new cjs.Graphics().p("EhU6AS8MAAAgl3MCp1AAAMAAAAl3g");
	var mask_graphics_83 = new cjs.Graphics().p("EhU6ARiMAAAgjDMCp1AAAMAAAAjDg");
	var mask_graphics_84 = new cjs.Graphics().p("EhU6ATaMAAAgmzMCp1AAAMAAAAmzg");
	var mask_graphics_85 = new cjs.Graphics().p("EhU6AWBMAAAgsBMCp1AAAMAAAAsBg");
	var mask_graphics_86 = new cjs.Graphics().p("EhU6ARYMAAAgivMCp1AAAMAAAAivg");
	var mask_graphics_87 = new cjs.Graphics().p("EhU6AS8MAAAgl3MCp1AAAMAAAAl3g");
	var mask_graphics_88 = new cjs.Graphics().p("EhU6ASUMAAAgknMCp1AAAMAAAAkng");
	var mask_graphics_89 = new cjs.Graphics().p("EhU6AS8MAAAgl3MCp1AAAMAAAAl3g");
	var mask_graphics_90 = new cjs.Graphics().p("EhRdAR2MAAAgjrMCi7AAAMAAAAjrg");
	var mask_graphics_91 = new cjs.Graphics().p("EhMNAS8MAAAgl3MCYbAAAMAAAAl3g");
	var mask_graphics_92 = new cjs.Graphics().p("EhIIATQMAAAgmfMCQRAAAMAAAAmfg");
	var mask_graphics_93 = new cjs.Graphics().p("EhB8ASeMAAAgk7MCD5AAAMAAAAk7g");
	var mask_graphics_94 = new cjs.Graphics().p("Eg9pAS8MAAAgl3MB7TAAAMAAAAl3g");
	var mask_graphics_95 = new cjs.Graphics().p("Eg5PAT4MAAAgnvMByfAAAMAAAAnvg");
	var mask_graphics_96 = new cjs.Graphics().p("EgziAQ6MAAAghzMBnFAAAMAAAAhzg");
	var mask_graphics_97 = new cjs.Graphics().p("EguuASoMAAAglPMBddAAAMAAAAlPg");
	var mask_graphics_98 = new cjs.Graphics().p("Ego2ATuMAAAgnbMBRtAAAMAAAAnbg");
	var mask_graphics_99 = new cjs.Graphics().p("EghqAWBMAAAgsBMBDVAAAMAAAAsBg");
	var mask_graphics_100 = new cjs.Graphics().p("EghcATaMAAAgmzMBC5AAAMAAAAmzg");
	var mask_graphics_101 = new cjs.Graphics().p("A+AT4MAAAgnvMA8BAAAMAAAAnvg");
	var mask_graphics_102 = new cjs.Graphics().p("A6HTaMAAAgmzMA0PAAAMAAAAmzg");
	var mask_graphics_103 = new cjs.Graphics().p("A3oWBMAAAgsBMAvRAAAMAAAAsBg");
	var mask_graphics_104 = new cjs.Graphics().p("A0PT4MAAAgnvMAofAAAMAAAAnvg");
	var mask_graphics_105 = new cjs.Graphics().p("AyKTaMAAAgmzMAkVAAAMAAAAmzg");
	var mask_graphics_106 = new cjs.Graphics().p("At8WBMAAAgsBIb5AAMAAAAsBg");
	var mask_graphics_107 = new cjs.Graphics().p("AsCT4MAAAgnvIYFAAMAAAAnvg");
	var mask_graphics_108 = new cjs.Graphics().p("AqJT4MAAAgnvIUTAAMAAAAnvg");
	var mask_graphics_109 = new cjs.Graphics().p("AomTaMAAAgmzIRNAAMAAAAmzg");
	var mask_graphics_110 = new cjs.Graphics().p("AomTaMAAAgmzIRNAAMAAAAmzg");
	var mask_graphics_111 = new cjs.Graphics().p("AlaUMMAAAgoXIK1AAMAAAAoXg");
	var mask_graphics_112 = new cjs.Graphics().p("AiuTaMAAAgmzIFdAAMAAAAmzg");
	var mask_graphics_113 = new cjs.Graphics().p("AgJWBMAAAgsBIATAAMAAAAsBg");
	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:mask_graphics_0,x:122.4243,y:151.8795}).wait(2).to({graphics:mask_graphics_2,x:146.5574,y:151.933}).wait(1).to({graphics:mask_graphics_3,x:179.1126,y:151.9326}).wait(1).to({graphics:mask_graphics_4,x:206.4955,y:152.0159}).wait(1).to({graphics:mask_graphics_5,x:246.6491,y:152.0158}).wait(1).to({graphics:mask_graphics_6,x:290.1136,y:151.9497}).wait(1).to({graphics:mask_graphics_7,x:344.0695,y:151.9497}).wait(1).to({graphics:mask_graphics_8,x:378.1971,y:151.9825}).wait(1).to({graphics:mask_graphics_9,x:429.8764,y:151.9992}).wait(1).to({graphics:mask_graphics_10,x:443.5286,y:151.9497}).wait(1).to({graphics:mask_graphics_11,x:479.0471,y:152.0163}).wait(1).to({graphics:mask_graphics_12,x:506.5785,y:152.0158}).wait(1).to({graphics:mask_graphics_13,x:540.0131,y:151.9497}).wait(1).to({graphics:mask_graphics_14,x:556.0659,y:151.9493}).wait(1).to({graphics:mask_graphics_15,x:576.4734,y:151.9159}).wait(1).to({graphics:mask_graphics_16,x:590.3271,y:151.9825}).wait(1).to({graphics:mask_graphics_17,x:596.2288,y:152.1688}).wait(1).to({graphics:mask_graphics_18,x:604.3104,y:151.9826}).wait(1).to({graphics:mask_graphics_19,x:624.1482,y:152.0158}).wait(1).to({graphics:mask_graphics_20,x:625.6327,y:151.9825}).wait(1).to({graphics:mask_graphics_21,x:631.0656,y:151.9497}).wait(1).to({graphics:mask_graphics_22,x:652.7691,y:151.9164}).wait(1).to({graphics:mask_graphics_23,x:647.7174,y:151.9497}).wait(1).to({graphics:mask_graphics_24,x:638.6535,y:151.9164}).wait(1).to({graphics:mask_graphics_25,x:635.1008,y:152.0145}).wait(1).to({graphics:mask_graphics_26,x:633.0834,y:151.9978}).wait(1).to({graphics:mask_graphics_27,x:631.7356,y:151.9479}).wait(1).to({graphics:mask_graphics_28,x:629.7178,y:151.9979}).wait(1).to({graphics:mask_graphics_29,x:634.423,y:151.9483}).wait(1).to({graphics:mask_graphics_30,x:610.7598,y:151.9983}).wait(1).to({graphics:mask_graphics_31,x:578.1402,y:151.9483}).wait(1).to({graphics:mask_graphics_32,x:552.3273,y:151.9484}).wait(1).to({graphics:mask_graphics_33,x:515.3409,y:151.9483}).wait(1).to({graphics:mask_graphics_34,x:486.4977,y:151.9983}).wait(1).to({graphics:mask_graphics_35,x:449.7853,y:151.9983}).wait(1).to({graphics:mask_graphics_36,x:422.8105,y:151.9483}).wait(1).to({graphics:mask_graphics_37,x:391.6098,y:151.9983}).wait(1).to({graphics:mask_graphics_38,x:354.0713,y:151.9488}).wait(1).to({graphics:mask_graphics_39,x:308.9547,y:151.9483}).wait(1).to({graphics:mask_graphics_40,x:307.3995,y:151.9488}).wait(1).to({graphics:mask_graphics_41,x:281.979,y:151.9488}).wait(1).to({graphics:mask_graphics_42,x:259.0011,y:151.9983}).wait(1).to({graphics:mask_graphics_43,x:242.946,y:151.9483}).wait(1).to({graphics:mask_graphics_44,x:216.7249,y:151.9983}).wait(1).to({graphics:mask_graphics_45,x:207.7938,y:151.9479}).wait(1).to({graphics:mask_graphics_46,x:179.6828,y:151.9484}).wait(1).to({graphics:mask_graphics_47,x:164.3508,y:151.9483}).wait(1).to({graphics:mask_graphics_48,x:151.3966,y:151.9983}).wait(1).to({graphics:mask_graphics_49,x:146.434,y:151.9488}).wait(1).to({graphics:mask_graphics_50,x:143.0465,y:151.9479}).wait(1).to({graphics:mask_graphics_51,x:124.7004,y:151.9978}).wait(1).to({graphics:mask_graphics_52,x:106.3975,y:151.9479}).wait(1).to({graphics:mask_graphics_53,x:106.907,y:151.9983}).wait(1).to({graphics:null,x:0,y:0}).wait(6).to({graphics:mask_graphics_60,x:96.3499,y:151.9497}).wait(2).to({graphics:mask_graphics_62,x:168.4512,y:151.9974}).wait(1).to({graphics:mask_graphics_63,x:192.1918,y:152.0145}).wait(1).to({graphics:mask_graphics_64,x:223.9303,y:152.0145}).wait(1).to({graphics:mask_graphics_65,x:264.0249,y:152.0145}).wait(1).to({graphics:mask_graphics_66,x:309.5613,y:151.9974}).wait(1).to({graphics:mask_graphics_67,x:361.2861,y:152.0145}).wait(1).to({graphics:mask_graphics_68,x:396.7222,y:151.9479}).wait(1).to({graphics:mask_graphics_69,x:450.5746,y:151.9978}).wait(1).to({graphics:mask_graphics_70,x:468.3496,y:151.9978}).wait(1).to({graphics:mask_graphics_71,x:491.5804,y:151.9479}).wait(1).to({graphics:mask_graphics_72,x:518.2879,y:151.9479}).wait(1).to({graphics:mask_graphics_73,x:549.3271,y:151.9978}).wait(1).to({graphics:mask_graphics_74,x:575.4573,y:151.9479}).wait(1).to({graphics:mask_graphics_75,x:582.9552,y:151.9484}).wait(1).to({graphics:mask_graphics_76,x:599.5471,y:151.9479}).wait(1).to({graphics:mask_graphics_77,x:610.5132,y:151.9483}).wait(1).to({graphics:mask_graphics_78,x:621.8442,y:151.9483}).wait(1).to({graphics:mask_graphics_79,x:632.0857,y:151.9979}).wait(1).to({graphics:mask_graphics_80,x:643.2138,y:151.9983}).wait(1).to({graphics:mask_graphics_81,x:643.2138,y:151.9479}).wait(1).to({graphics:mask_graphics_82,x:643.2138,y:151.9483}).wait(1).to({graphics:mask_graphics_83,x:643.2138,y:151.9978}).wait(1).to({graphics:mask_graphics_84,x:643.2138,y:151.9978}).wait(1).to({graphics:mask_graphics_85,x:643.2138,y:152.0145}).wait(1).to({graphics:mask_graphics_86,x:643.2138,y:151.9978}).wait(1).to({graphics:mask_graphics_87,x:643.2138,y:151.9483}).wait(1).to({graphics:mask_graphics_88,x:643.2138,y:151.9983}).wait(1).to({graphics:mask_graphics_89,x:643.2138,y:151.9483}).wait(1).to({graphics:mask_graphics_90,x:620.9365,y:151.9479}).wait(1).to({graphics:mask_graphics_91,x:587.8228,y:151.9483}).wait(1).to({graphics:mask_graphics_92,x:562.0387,y:151.9978}).wait(1).to({graphics:mask_graphics_93,x:521.6261,y:151.9983}).wait(1).to({graphics:mask_graphics_94,x:494.2228,y:151.9483}).wait(1).to({graphics:mask_graphics_95,x:466.7882,y:151.9479}).wait(1).to({graphics:mask_graphics_96,x:430.8507,y:151.9479}).wait(1).to({graphics:mask_graphics_97,x:399.6468,y:151.9479}).wait(1).to({graphics:mask_graphics_98,x:362.5938,y:151.9479}).wait(1).to({graphics:mask_graphics_99,x:315.8959,y:152.0145}).wait(1).to({graphics:mask_graphics_100,x:314.7997,y:151.9978}).wait(1).to({graphics:mask_graphics_101,x:293.1372,y:151.9479}).wait(1).to({graphics:mask_graphics_102,x:267.4557,y:151.9978}).wait(1).to({graphics:mask_graphics_103,x:251.8825,y:152.0145}).wait(1).to({graphics:mask_graphics_104,x:229.9266,y:151.9479}).wait(1).to({graphics:mask_graphics_105,x:216.7461,y:151.9978}).wait(1).to({graphics:mask_graphics_106,x:189.7389,y:152.0145}).wait(1).to({graphics:mask_graphics_107,x:177.529,y:151.9479}).wait(1).to({graphics:mask_graphics_108,x:165.3687,y:151.9479}).wait(1).to({graphics:mask_graphics_109,x:155.439,y:151.9978}).wait(1).to({graphics:mask_graphics_110,x:155.439,y:151.9978}).wait(1).to({graphics:mask_graphics_111,x:135.1102,y:151.9974}).wait(1).to({graphics:mask_graphics_112,x:117.8986,y:151.9978}).wait(1).to({graphics:mask_graphics_113,x:126.7006,y:152.0145}).wait(1).to({graphics:null,x:0,y:0}).wait(6));
	// Text1
	<?php
		$text1 = "INTERFACES INCREIBLES";
		$fuente1 = 86;
		$text2 = "EXPERIENCIAS DIGITALES";
		if ($language == "en") {
			$text1 = "INCREDIBLE INTERFACES";
			$fuente1 = $fuente1;
			$text2 = "DIGITAL EXPERIENCES";
		}
	?>
	this.title1 = new cjs.Text("<?php echo($text1)?>", "normal 700 <?php echo($fuente1)?>px 'Poppins'", "#FFFFFF");
	this.title1.name = "title1";
	this.title1.textAlign = "center";
	this.title1.lineHeight = 154;
	this.title1.lineWidth = 1152;
	this.title1.parent = this;
	this.title1.setTransform(643.2,85.75);
	if(!lib.properties.webfonts['Poppins']) {
		lib.webFontTxtInst['Poppins'] = lib.webFontTxtInst['Poppins'] || [];
		lib.webFontTxtInst['Poppins'].push(this.title1);
	}
	var maskedShapeInstanceList = [this.title1];
	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}
	this.timeline.addTween(cjs.Tween.get(this.title1).to({_off:true},54).wait(6).to({_off:false,text:"<?php echo($text2)?>"},0).to({_off:true},54).wait(6));
	// AroDetas
	this.instance_1 = new lib.AroDetas();
	this.instance_1.setTransform(96.55,144.25,1,1,0,0,0,129.5,163.2);
	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regX:129.6,rotation:2.0891,x:298.05,y:141.5},4).to({rotation:0,skewX:4.7011,skewY:4.7887,x:744.2,y:140.4},5).to({scaleY:0.9999,skewX:7.3135,skewY:7.4482,x:1020.35,y:137.65},5).to({skewX:9.926,skewY:10.1094,x:1152.1,y:136.55},5).to({scaleX:0.9999,skewX:10.4477,skewY:10.6412,x:1162.45,y:135.75},1).to({regX:129.7,regY:163.1,skewX:10.9709,skewY:11.1731,x:1173,y:135.55},1).to({skewX:11.4932,skewY:11.7057,x:1184.4,y:134.8},1).to({skewX:12.017,skewY:12.2383,x:1195.35,y:134.1},1).to({regX:128,regY:155.8,scaleX:1,skewX:12.5396,skewY:12.7706,x:1204.05,y:127.25},1).to({skewX:8.7386,skewY:9.0959,x:1149.35,y:129.55},5).to({regX:128.1,scaleX:0.9999,skewX:4.9365,skewY:5.4203,x:827.85,y:131.75},5).to({regY:155.7,scaleY:1,skewX:1.1349,skewY:1.7438,x:494.5,y:134.85},5).to({scaleY:0.9999,skewX:-2.665,skewY:-1.9293,x:288.4,y:136.3},5).to({regX:128.2,scaleX:0.9998,skewX:-3.4251,skewY:-2.6644,x:264.65,y:136.85},1).to({skewX:-4.1849,skewY:-3.3992,x:239.95,y:136.7},1).to({regY:155.6,skewX:-4.9453,skewY:-4.1345,x:215.5,y:137.35},1).to({skewX:-5.7057,skewY:-4.8703,x:190.15,y:138},1).to({regX:78.3,regY:150.7,scaleX:0.9999,skewX:-6.4672,skewY:-5.6051,x:115.8,y:138.55},1).to({scaleY:1,skewX:-10.2694,skewY:-9.2813,x:55.15,y:142.7},5).to({regY:150.8,skewX:-11.0301,skewY:-10.0175,x:51.85,y:143.5,alpha:0.8008},1).to({regX:78.2,scaleX:0.9998,skewX:-11.7899,skewY:-10.7519,x:49.05,y:145.95,alpha:0.6016},1).to({skewX:-12.5509,skewY:-11.4873,x:46,y:146.95,alpha:0.3984},1).to({skewX:-13.3115,skewY:-12.2218,x:42.05,y:147.45,alpha:0.1992},1).to({regX:127.9,regY:155.9,scaleX:0.9999,skewX:-14.0729,skewY:-12.9582,x:88.45,y:142.8,alpha:0},1).wait(1).to({regX:129.5,regY:163.2,scaleX:1,skewX:0,skewY:0,x:96.55,y:144.25,alpha:1},0).to({regX:129.6,rotation:2.0891,x:298.05,y:141.5},4).to({rotation:0,skewX:4.7012,skewY:4.7887,x:744.2,y:140.4},5).to({scaleY:0.9999,skewX:7.3135,skewY:7.4482,x:1020.35,y:137.65},5).to({skewX:9.926,skewY:10.1094,x:1152.1,y:136.55},5).to({scaleX:0.9999,skewX:10.4477,skewY:10.6412,x:1162.45,y:135.75},1).to({regX:129.7,regY:163.1,skewX:10.9709,skewY:11.1731,x:1173,y:135.55},1).to({skewX:11.4932,skewY:11.7057,x:1184.4,y:134.8},1).to({skewX:12.017,skewY:12.2383,x:1195.35,y:134.1},1).to({regX:128,regY:155.8,scaleX:1,skewX:12.5398,skewY:12.7706,x:1204.05,y:127.25},1).to({skewX:8.7386,skewY:9.0959,x:1149.35,y:129.55},5).to({regX:128.1,scaleX:0.9999,skewX:4.9365,skewY:5.4203,x:827.85,y:131.75},5).to({regY:155.7,scaleY:1,skewX:1.1349,skewY:1.7438,x:494.5,y:134.85},5).to({scaleY:0.9999,skewX:-2.665,skewY:-1.9293,x:288.4,y:136.3},5).to({regX:128.2,scaleX:0.9998,skewX:-3.4251,skewY:-2.6644,x:264.65,y:136.85},1).to({skewX:-4.1849,skewY:-3.3992,x:239.95,y:136.7},1).to({regY:155.6,skewX:-4.9453,skewY:-4.1345,x:215.5,y:137.35},1).to({skewX:-5.7057,skewY:-4.8703,x:190.15,y:138},1).to({regX:78.3,regY:150.7,scaleX:0.9999,skewX:-6.4672,skewY:-5.6051,x:115.8,y:138.55},1).to({scaleY:1,skewX:-10.2694,skewY:-9.2813,x:55.15,y:142.7},5).to({regY:150.8,skewX:-11.0301,skewY:-10.0175,x:51.85,y:143.5,alpha:0.8008},1).to({regX:78.2,scaleX:0.9998,skewX:-11.7899,skewY:-10.7519,x:49.05,y:145.95,alpha:0.6016},1).to({skewX:-12.5509,skewY:-11.4873,x:46,y:146.95,alpha:0.3984},1).to({skewX:-13.3115,skewY:-12.2218,x:42.05,y:147.45,alpha:0.1992},1).to({regX:127.9,regY:155.9,scaleX:0.9999,skewX:-14.0729,skewY:-12.9582,x:88.45,y:142.8,alpha:0},1).wait(1));
	this._renderFirstFrame();
}).prototype = p = new lib.AnMovieClip();
p.nominalBounds = new cjs.Rectangle(592.9,95.9,772.8000000000001,240.99999999999997);
// library properties:
lib.properties = {
	id: 'BBD90256F627E440AEA8B02A2B762271',
	width: 1334,
	height: 298,
	fps: 25,
	color: "#1D1D1B",
	opacity: 1.00,
	webfonts: {},
	manifest: [
		{src:"<?php echo(URL_SITE)?>/mutanto-home-animation/images/mutantoAnimation_atlas_1.png", id:"mutantoAnimation_atlas_1"}
	],
	preloads: []
};
// bootstrap callback support:
(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();
p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }
p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }
an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}
an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};
an.compositions = an.compositions || {};
an.compositions['BBD90256F627E440AEA8B02A2B762271'] = {
	getStage: function() { return exportRoot.stage; },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};
an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}
an.getComposition = function(id) {
	return an.compositions[id];
}
an.makeResponsive = function(isResp, respDim, isScale, scaleType, domContainers) {		
	var lastW, lastH, lastS=1;		
	window.addEventListener('resize', resizeCanvas);		
	resizeCanvas();		
	function resizeCanvas() {			
		var w = lib.properties.width, h = lib.properties.height;			
		var iw = window.innerWidth, ih=window.innerHeight;			
		var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
		if(isResp) {                
			if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
				sRatio = lastS;                
			}				
			else if(!isScale) {					
				if(iw<w || ih<h)						
					sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==1) {					
				sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==2) {					
				sRatio = Math.max(xRatio, yRatio);				
			}			
		}
		domContainers[0].width = w * pRatio * sRatio;			
		domContainers[0].height = h * pRatio * sRatio;
		domContainers.forEach(function(container) {				
			container.style.width = w * sRatio + 'px';				
			container.style.height = h * sRatio + 'px';			
		});
		stage.scaleX = pRatio*sRatio;			
		stage.scaleY = pRatio*sRatio;
		lastW = iw; lastH = ih; lastS = sRatio;            
		stage.tickOnUpdate = false;            
		stage.update();            
		stage.tickOnUpdate = true;		
	}
}
an.handleSoundStreamOnTick = function(event) {
	if(!event.paused){
		var stageChild = stage.getChildAt(0);
		if(!stageChild.paused || stageChild.ignorePause){
			stageChild.syncStreamSounds();
		}
	}
}
an.handleFilterCache = function(event) {
	if(!event.paused){
		var target = event.target;
		if(target){
			if(target.filterCacheList){
				for(var index = 0; index < target.filterCacheList.length ; index++){
					var cacheInst = target.filterCacheList[index];
					if((cacheInst.startFrame <= target.currentFrame) && (target.currentFrame <= cacheInst.endFrame)){
						cacheInst.instance.cache(cacheInst.x, cacheInst.y, cacheInst.w, cacheInst.h);
					}
				}
			}
		}
	}
}
})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;
</script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("BBD90256F627E440AEA8B02A2B762271");
	var lib=comp.getLibrary();
	try {
		if(!(typeof gFontsFamilies === 'undefined' || gFontsFamilies === null))
			LoadGFonts(gFontsFamilies, comp);		
		if(!(typeof totalTypekitFonts === 'undefined' || totalTypekitFonts === null)) {			
			var typekitObject = {type: 'Typekit', loadedFonts: 0, totalFonts: totalTypekitFonts, callOnLoad: lib.tfontAvailable};		
			Typekit.load({
			async: true,
			'fontactive': function(family) {
				isFontAvailable(family, typekitObject);
				}
			});
		}
	} catch(e) {};
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.mutantoAnimation();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.framerate = lib.properties.fps;
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	AdobeAn.makeResponsive(true,'both',true,1,[canvas,anim_container,dom_overlay_container]);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>