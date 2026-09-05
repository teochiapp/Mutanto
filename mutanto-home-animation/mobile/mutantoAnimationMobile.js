(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [
		{name:"mutantoAnimationMobile_atlas_1", frames: [[0,0,284,455],[286,0,262,458]]}
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
	this.initialize(ss["mutantoAnimationMobile_atlas_1"]);
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.atras2x = function() {
	this.initialize(ss["mutantoAnimationMobile_atlas_1"]);
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
(lib.mutantoAnimationMobile = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// tourus_front
	this.instance = new lib.Tween1("synched",0);
	this.instance.setTransform(80.45,173.45,0.7437,0.7437,9.8426,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:0.2,rotation:-5.1557,x:386.9,y:171},24).wait(1).to({rotation:-5.1557},0).to({regX:0.1,rotation:9.8426,x:80.45,y:173.45},24).wait(1).to({rotation:9.8426},0).to({regX:0.2,rotation:-5.1557,x:386.9,y:171},24).wait(1).to({rotation:-5.1557},0).to({regX:0.1,rotation:9.8426,x:80.45,y:173.45},24).to({rotation:9.8426,alpha:0},5).wait(1));

	// Mask (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_0 = new cjs.Graphics().p("AmoVDIAA+8INRAAIAAe8g");
	var mask_graphics_1 = new cjs.Graphics().p("AnwVDIAA+8IPhAAIAAe8g");
	var mask_graphics_2 = new cjs.Graphics().p("Ao3VDIAA+8IRvAAIAAe8g");
	var mask_graphics_3 = new cjs.Graphics().p("Ap/VDIAA+8IT/AAIAAe8g");
	var mask_graphics_4 = new cjs.Graphics().p("ArHVDIAA+8IWPAAIAAe8g");
	var mask_graphics_5 = new cjs.Graphics().p("AsOVDIAA+8IYdAAIAAe8g");
	var mask_graphics_6 = new cjs.Graphics().p("AtWVDIAA+8IatAAIAAe8g");
	var mask_graphics_7 = new cjs.Graphics().p("AueVDIAA+8Ic9AAIAAe8g");
	var mask_graphics_8 = new cjs.Graphics().p("AvdVDIAA+8Ie7AAIAAe8g");
	var mask_graphics_9 = new cjs.Graphics().p("AwdVDIAA+8MAg7AAAIAAe8g");
	var mask_graphics_10 = new cjs.Graphics().p("AxdVDIAA+8MAi7AAAIAAe8g");
	var mask_graphics_11 = new cjs.Graphics().p("AycVDIAA+8MAk5AAAIAAe8g");
	var mask_graphics_12 = new cjs.Graphics().p("AzcVDIAA+8MAm5AAAIAAe8g");
	var mask_graphics_13 = new cjs.Graphics().p("A0cVDIAA+8MAo5AAAIAAe8g");
	var mask_graphics_14 = new cjs.Graphics().p("A1bVDIAA+8MAq3AAAIAAe8g");
	var mask_graphics_15 = new cjs.Graphics().p("A2bVDIAA+8MAs3AAAIAAe8g");
	var mask_graphics_16 = new cjs.Graphics().p("A3bVDIAA+8MAu3AAAIAAe8g");
	var mask_graphics_17 = new cjs.Graphics().p("A4bVDIAA+8MAw3AAAIAAe8g");
	var mask_graphics_18 = new cjs.Graphics().p("A5bVDIAA+8MAy3AAAIAAe8g");
	var mask_graphics_19 = new cjs.Graphics().p("A7EVDIAA+8MA2JAAAIAAe8g");
	var mask_graphics_20 = new cjs.Graphics().p("A8tVDIAA+8MA5bAAAIAAe8g");
	var mask_graphics_21 = new cjs.Graphics().p("A+WVDIAA+8MA8tAAAIAAe8g");
	var mask_graphics_22 = new cjs.Graphics().p("A/+VDIAA+8MA/9AAAIAAe8g");
	var mask_graphics_23 = new cjs.Graphics().p("EghnAVDIAA+8MBDPAAAIAAe8g");
	var mask_graphics_24 = new cjs.Graphics().p("EgjQAVDIAA+8MBGhAAAIAAe8g");
	var mask_graphics_25 = new cjs.Graphics().p("EgjQAVDIAA+8MBGhAAAIAAe8g");
	var mask_graphics_26 = new cjs.Graphics().p("EghnAVDIAA+8MBDPAAAIAAe8g");
	var mask_graphics_27 = new cjs.Graphics().p("A/+VDIAA+8MA/9AAAIAAe8g");
	var mask_graphics_28 = new cjs.Graphics().p("A+WVDIAA+8MA8tAAAIAAe8g");
	var mask_graphics_29 = new cjs.Graphics().p("A8tVDIAA+8MA5bAAAIAAe8g");
	var mask_graphics_30 = new cjs.Graphics().p("A7EVDIAA+8MA2JAAAIAAe8g");
	var mask_graphics_31 = new cjs.Graphics().p("A5bVDIAA+8MAy3AAAIAAe8g");
	var mask_graphics_32 = new cjs.Graphics().p("A4bVDIAA+8MAw3AAAIAAe8g");
	var mask_graphics_33 = new cjs.Graphics().p("A3bVDIAA+8MAu3AAAIAAe8g");
	var mask_graphics_34 = new cjs.Graphics().p("A2bVDIAA+8MAs3AAAIAAe8g");
	var mask_graphics_35 = new cjs.Graphics().p("A1bVDIAA+8MAq3AAAIAAe8g");
	var mask_graphics_36 = new cjs.Graphics().p("A0cVDIAA+8MAo5AAAIAAe8g");
	var mask_graphics_37 = new cjs.Graphics().p("AzcVDIAA+8MAm5AAAIAAe8g");
	var mask_graphics_38 = new cjs.Graphics().p("AycVDIAA+8MAk5AAAIAAe8g");
	var mask_graphics_39 = new cjs.Graphics().p("AxdVDIAA+8MAi7AAAIAAe8g");
	var mask_graphics_40 = new cjs.Graphics().p("AwdVDIAA+8MAg7AAAIAAe8g");
	var mask_graphics_41 = new cjs.Graphics().p("AvdVDIAA+8Ie7AAIAAe8g");
	var mask_graphics_42 = new cjs.Graphics().p("AueVDIAA+8Ic9AAIAAe8g");
	var mask_graphics_43 = new cjs.Graphics().p("AtWVDIAA+8IatAAIAAe8g");
	var mask_graphics_44 = new cjs.Graphics().p("AsOVDIAA+8IYdAAIAAe8g");
	var mask_graphics_45 = new cjs.Graphics().p("ArHVDIAA+8IWPAAIAAe8g");
	var mask_graphics_46 = new cjs.Graphics().p("Ap/VDIAA+8IT/AAIAAe8g");
	var mask_graphics_47 = new cjs.Graphics().p("Ao3VDIAA+8IRvAAIAAe8g");
	var mask_graphics_48 = new cjs.Graphics().p("AnwVDIAA+8IPhAAIAAe8g");
	var mask_graphics_49 = new cjs.Graphics().p("AmoVDIAA+8INRAAIAAe8g");
	var mask_graphics_50 = new cjs.Graphics().p("AmoVDIAA+8INRAAIAAe8g");
	var mask_graphics_51 = new cjs.Graphics().p("AnwVDIAA+8IPhAAIAAe8g");
	var mask_graphics_52 = new cjs.Graphics().p("Ao3VDIAA+8IRvAAIAAe8g");
	var mask_graphics_53 = new cjs.Graphics().p("Ap/VDIAA+8IT/AAIAAe8g");
	var mask_graphics_54 = new cjs.Graphics().p("ArHVDIAA+8IWPAAIAAe8g");
	var mask_graphics_55 = new cjs.Graphics().p("AsOVDIAA+8IYdAAIAAe8g");
	var mask_graphics_56 = new cjs.Graphics().p("AtWVDIAA+8IatAAIAAe8g");
	var mask_graphics_57 = new cjs.Graphics().p("AueVDIAA+8Ic9AAIAAe8g");
	var mask_graphics_58 = new cjs.Graphics().p("AvdVDIAA+8Ie7AAIAAe8g");
	var mask_graphics_59 = new cjs.Graphics().p("AwdVDIAA+8MAg7AAAIAAe8g");
	var mask_graphics_60 = new cjs.Graphics().p("AxdVDIAA+8MAi7AAAIAAe8g");
	var mask_graphics_61 = new cjs.Graphics().p("AycVDIAA+8MAk5AAAIAAe8g");
	var mask_graphics_62 = new cjs.Graphics().p("AzcVDIAA+8MAm5AAAIAAe8g");
	var mask_graphics_63 = new cjs.Graphics().p("A0cVDIAA+8MAo5AAAIAAe8g");
	var mask_graphics_64 = new cjs.Graphics().p("A1bVDIAA+8MAq3AAAIAAe8g");
	var mask_graphics_65 = new cjs.Graphics().p("A2bVDIAA+8MAs3AAAIAAe8g");
	var mask_graphics_66 = new cjs.Graphics().p("A3bVDIAA+8MAu3AAAIAAe8g");
	var mask_graphics_67 = new cjs.Graphics().p("A4bVDIAA+8MAw3AAAIAAe8g");
	var mask_graphics_68 = new cjs.Graphics().p("A5bVDIAA+8MAy3AAAIAAe8g");
	var mask_graphics_69 = new cjs.Graphics().p("A7EVDIAA+8MA2JAAAIAAe8g");
	var mask_graphics_70 = new cjs.Graphics().p("A8tVDIAA+8MA5bAAAIAAe8g");
	var mask_graphics_71 = new cjs.Graphics().p("A+WVDIAA+8MA8tAAAIAAe8g");
	var mask_graphics_72 = new cjs.Graphics().p("A/+VDIAA+8MA/9AAAIAAe8g");
	var mask_graphics_73 = new cjs.Graphics().p("EghnAVDIAA+8MBDPAAAIAAe8g");
	var mask_graphics_74 = new cjs.Graphics().p("EgjQAVDIAA+8MBGhAAAIAAe8g");
	var mask_graphics_75 = new cjs.Graphics().p("EgjQAVDIAA+8MBGhAAAIAAe8g");
	var mask_graphics_76 = new cjs.Graphics().p("EghnAVDIAA+8MBDPAAAIAAe8g");
	var mask_graphics_77 = new cjs.Graphics().p("A/+VDIAA+8MA/9AAAIAAe8g");
	var mask_graphics_78 = new cjs.Graphics().p("A+WVDIAA+8MA8tAAAIAAe8g");
	var mask_graphics_79 = new cjs.Graphics().p("A8tVDIAA+8MA5bAAAIAAe8g");
	var mask_graphics_80 = new cjs.Graphics().p("A7EVDIAA+8MA2JAAAIAAe8g");
	var mask_graphics_81 = new cjs.Graphics().p("A5bVDIAA+8MAy3AAAIAAe8g");
	var mask_graphics_82 = new cjs.Graphics().p("A4bVDIAA+8MAw3AAAIAAe8g");
	var mask_graphics_83 = new cjs.Graphics().p("A3bVDIAA+8MAu3AAAIAAe8g");
	var mask_graphics_84 = new cjs.Graphics().p("A2bVDIAA+8MAs3AAAIAAe8g");
	var mask_graphics_85 = new cjs.Graphics().p("A1bVDIAA+8MAq3AAAIAAe8g");
	var mask_graphics_86 = new cjs.Graphics().p("A0cVDIAA+8MAo5AAAIAAe8g");
	var mask_graphics_87 = new cjs.Graphics().p("AzcVDIAA+8MAm5AAAIAAe8g");
	var mask_graphics_88 = new cjs.Graphics().p("AycVDIAA+8MAk5AAAIAAe8g");
	var mask_graphics_89 = new cjs.Graphics().p("AxdVDIAA+8MAi7AAAIAAe8g");
	var mask_graphics_90 = new cjs.Graphics().p("AwdVDIAA+8MAg7AAAIAAe8g");
	var mask_graphics_91 = new cjs.Graphics().p("AvdVDIAA+8Ie7AAIAAe8g");
	var mask_graphics_92 = new cjs.Graphics().p("AueVDIAA+8Ic9AAIAAe8g");
	var mask_graphics_93 = new cjs.Graphics().p("AtWVDIAA+8IatAAIAAe8g");
	var mask_graphics_94 = new cjs.Graphics().p("AsOVDIAA+8IYdAAIAAe8g");
	var mask_graphics_95 = new cjs.Graphics().p("ArHVDIAA+8IWPAAIAAe8g");
	var mask_graphics_96 = new cjs.Graphics().p("Ap/VDIAA+8IT/AAIAAe8g");
	var mask_graphics_97 = new cjs.Graphics().p("Ao3VDIAA+8IRvAAIAAe8g");
	var mask_graphics_98 = new cjs.Graphics().p("AnwVDIAA+8IPhAAIAAe8g");
	var mask_graphics_99 = new cjs.Graphics().p("AmoVDIAA+8INRAAIAAe8g");

	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:mask_graphics_0,x:41.1181,y:134.7}).wait(1).to({graphics:mask_graphics_1,x:48.2674,y:134.7}).wait(1).to({graphics:mask_graphics_2,x:55.4167,y:134.7}).wait(1).to({graphics:mask_graphics_3,x:62.566,y:134.7}).wait(1).to({graphics:mask_graphics_4,x:69.7153,y:134.7}).wait(1).to({graphics:mask_graphics_5,x:76.8646,y:134.7}).wait(1).to({graphics:mask_graphics_6,x:84.014,y:134.7}).wait(1).to({graphics:mask_graphics_7,x:91.272,y:134.7}).wait(1).to({graphics:mask_graphics_8,x:97.5741,y:134.7036}).wait(1).to({graphics:mask_graphics_9,x:103.8761,y:134.7071}).wait(1).to({graphics:mask_graphics_10,x:110.1782,y:134.7107}).wait(1).to({graphics:mask_graphics_11,x:116.4802,y:134.7143}).wait(1).to({graphics:mask_graphics_12,x:122.7823,y:134.7179}).wait(1).to({graphics:mask_graphics_13,x:129.0843,y:134.7214}).wait(1).to({graphics:mask_graphics_14,x:135.5475,y:134.7}).wait(1).to({graphics:mask_graphics_15,x:141.9018,y:134.6938}).wait(1).to({graphics:mask_graphics_16,x:148.2561,y:134.6875}).wait(1).to({graphics:mask_graphics_17,x:154.6104,y:134.6813}).wait(1).to({graphics:mask_graphics_18,x:161.1558,y:134.675}).wait(1).to({graphics:mask_graphics_19,x:171.8123,y:134.6708}).wait(1).to({graphics:mask_graphics_20,x:182.4688,y:134.6667}).wait(1).to({graphics:mask_graphics_21,x:193.1253,y:134.6625}).wait(1).to({graphics:mask_graphics_22,x:203.7819,y:134.6583}).wait(1).to({graphics:mask_graphics_23,x:214.4384,y:134.6542}).wait(1).to({graphics:mask_graphics_24,x:224.3002,y:134.7}).wait(1).to({graphics:mask_graphics_25,x:224.2995,y:134.7}).wait(1).to({graphics:mask_graphics_26,x:213.68,y:134.7042}).wait(1).to({graphics:mask_graphics_27,x:203.0605,y:134.7083}).wait(1).to({graphics:mask_graphics_28,x:192.441,y:134.7125}).wait(1).to({graphics:mask_graphics_29,x:181.8215,y:134.7167}).wait(1).to({graphics:mask_graphics_30,x:171.202,y:134.7208}).wait(1).to({graphics:mask_graphics_31,x:161.1558,y:134.675}).wait(1).to({graphics:mask_graphics_32,x:154.794,y:134.6813}).wait(1).to({graphics:mask_graphics_33,x:148.4322,y:134.6875}).wait(1).to({graphics:mask_graphics_34,x:142.0703,y:134.6938}).wait(1).to({graphics:mask_graphics_35,x:135.5475,y:134.7}).wait(1).to({graphics:mask_graphics_36,x:129.2379,y:134.6964}).wait(1).to({graphics:mask_graphics_37,x:122.9284,y:134.6929}).wait(1).to({graphics:mask_graphics_38,x:116.6189,y:134.6893}).wait(1).to({graphics:mask_graphics_39,x:110.3094,y:134.6857}).wait(1).to({graphics:mask_graphics_40,x:103.9998,y:134.6821}).wait(1).to({graphics:mask_graphics_41,x:97.6903,y:134.6786}).wait(1).to({graphics:mask_graphics_42,x:91.272,y:134.7}).wait(1).to({graphics:mask_graphics_43,x:84.1143,y:134.7}).wait(1).to({graphics:mask_graphics_44,x:76.9566,y:134.7}).wait(1).to({graphics:mask_graphics_45,x:69.7989,y:134.7}).wait(1).to({graphics:mask_graphics_46,x:62.6412,y:134.7}).wait(1).to({graphics:mask_graphics_47,x:55.4834,y:134.7}).wait(1).to({graphics:mask_graphics_48,x:48.3257,y:134.7}).wait(1).to({graphics:mask_graphics_49,x:41.1181,y:134.7}).wait(1).to({graphics:mask_graphics_50,x:41.1181,y:134.7}).wait(1).to({graphics:mask_graphics_51,x:48.2674,y:134.7}).wait(1).to({graphics:mask_graphics_52,x:55.4167,y:134.7}).wait(1).to({graphics:mask_graphics_53,x:62.566,y:134.7}).wait(1).to({graphics:mask_graphics_54,x:69.7153,y:134.7}).wait(1).to({graphics:mask_graphics_55,x:76.8646,y:134.7}).wait(1).to({graphics:mask_graphics_56,x:84.014,y:134.7}).wait(1).to({graphics:mask_graphics_57,x:91.272,y:134.7}).wait(1).to({graphics:mask_graphics_58,x:97.5741,y:134.7036}).wait(1).to({graphics:mask_graphics_59,x:103.8761,y:134.7071}).wait(1).to({graphics:mask_graphics_60,x:110.1782,y:134.7107}).wait(1).to({graphics:mask_graphics_61,x:116.4802,y:134.7143}).wait(1).to({graphics:mask_graphics_62,x:122.7823,y:134.7179}).wait(1).to({graphics:mask_graphics_63,x:129.0843,y:134.7214}).wait(1).to({graphics:mask_graphics_64,x:135.5475,y:134.7}).wait(1).to({graphics:mask_graphics_65,x:141.9018,y:134.6938}).wait(1).to({graphics:mask_graphics_66,x:148.2561,y:134.6875}).wait(1).to({graphics:mask_graphics_67,x:154.6104,y:134.6813}).wait(1).to({graphics:mask_graphics_68,x:161.1558,y:134.675}).wait(1).to({graphics:mask_graphics_69,x:171.8122,y:134.6708}).wait(1).to({graphics:mask_graphics_70,x:182.4686,y:134.6667}).wait(1).to({graphics:mask_graphics_71,x:193.125,y:134.6625}).wait(1).to({graphics:mask_graphics_72,x:203.7814,y:134.6583}).wait(1).to({graphics:mask_graphics_73,x:214.4378,y:134.6542}).wait(1).to({graphics:mask_graphics_74,x:224.2995,y:134.7}).wait(1).to({graphics:mask_graphics_75,x:224.2995,y:134.7}).wait(1).to({graphics:mask_graphics_76,x:213.68,y:134.7042}).wait(1).to({graphics:mask_graphics_77,x:203.0605,y:134.7083}).wait(1).to({graphics:mask_graphics_78,x:192.441,y:134.7125}).wait(1).to({graphics:mask_graphics_79,x:181.8215,y:134.7167}).wait(1).to({graphics:mask_graphics_80,x:171.202,y:134.7208}).wait(1).to({graphics:mask_graphics_81,x:161.1558,y:134.675}).wait(1).to({graphics:mask_graphics_82,x:154.794,y:134.6813}).wait(1).to({graphics:mask_graphics_83,x:148.4322,y:134.6875}).wait(1).to({graphics:mask_graphics_84,x:142.0703,y:134.6938}).wait(1).to({graphics:mask_graphics_85,x:135.5475,y:134.7}).wait(1).to({graphics:mask_graphics_86,x:129.2379,y:134.6964}).wait(1).to({graphics:mask_graphics_87,x:122.9284,y:134.6929}).wait(1).to({graphics:mask_graphics_88,x:116.6189,y:134.6893}).wait(1).to({graphics:mask_graphics_89,x:110.3094,y:134.6857}).wait(1).to({graphics:mask_graphics_90,x:103.9998,y:134.6821}).wait(1).to({graphics:mask_graphics_91,x:97.6903,y:134.6786}).wait(1).to({graphics:mask_graphics_92,x:91.272,y:134.7}).wait(1).to({graphics:mask_graphics_93,x:84.1143,y:134.7}).wait(1).to({graphics:mask_graphics_94,x:76.9566,y:134.7}).wait(1).to({graphics:mask_graphics_95,x:69.7989,y:134.7}).wait(1).to({graphics:mask_graphics_96,x:62.6412,y:134.7}).wait(1).to({graphics:mask_graphics_97,x:55.4834,y:134.7}).wait(1).to({graphics:mask_graphics_98,x:48.3257,y:134.7}).wait(1).to({graphics:mask_graphics_99,x:41.1181,y:134.7}).wait(6));

	// text_Top
	this.title1 = new cjs.Text("EXPERIENCIAS\nDIGITALES ", "normal 700 40px 'Poppins'", "#FFFFFF");
	this.title1.name = "title1";
	this.title1.textAlign = "center";
	this.title1.lineHeight = 36;
	this.title1.lineWidth = 293;
	this.title1.parent = this;
	this.title1.setTransform(225,127.95);
	if(!lib.properties.webfonts['Poppins']) {
		lib.webFontTxtInst['Poppins'] = lib.webFontTxtInst['Poppins'] || [];
		lib.webFontTxtInst['Poppins'].push(this.title1);
	}

	var maskedShapeInstanceList = [this.title1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.title1).wait(50).to({text:"INTERFACES INCREIBLES"},0).wait(49).to({text:"EXPERIENCIAS\nDIGITALES "},0).to({_off:true},1).wait(5));

	// text_lock
	this.text = new cjs.Text("CREAMOS", "normal 300 24px 'Poppins'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 6;
	this.text.lineWidth = 116;
	this.text.parent = this;
	this.text.setTransform(225,105.55);
	if(!lib.properties.webfonts['Poppins']) {
		lib.webFontTxtInst['Poppins'] = lib.webFontTxtInst['Poppins'] || [];
		lib.webFontTxtInst['Poppins'].push(this.text);
	}

	var maskedShapeInstanceList = [this.text];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.text).wait(99).to({_off:true},1).wait(5));

	// tourus_back
	this.instance_1 = new lib.AroDetas();
	this.instance_1.setTransform(57.1,166.95,0.7438,0.7437,0,9.9254,10.1088,129.7,163.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({skewX:-5.0733,skewY:-4.8902,x:362.55,y:170.75},24).wait(1).to({skewX:9.9254,skewY:10.1088,x:57.1,y:166.95},24).wait(1).to({skewX:-5.0733,skewY:-4.8902,x:362.55,y:170.75},24).wait(1).to({skewX:9.9254,skewY:10.1088,x:57.1,y:166.95},24).to({alpha:0},5).wait(1));

	this._renderFirstFrame();

}).prototype = p = new lib.AnMovieClip();
p.nominalBounds = new cjs.Rectangle(166.2,210.5,329.5,92.89999999999998);
// library properties:
lib.properties = {
	id: 'F98E8A917C0C2E4AB3A604D371A7980B',
	width: 450,
	height: 360,
	fps: 25,
	color: "#1D1D1B",
	opacity: 1.00,
	webfonts: {},
	manifest: [
		{src:"images/mutantoAnimationMobile_atlas_1.png", id:"mutantoAnimationMobile_atlas_1"}
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
an.compositions['F98E8A917C0C2E4AB3A604D371A7980B'] = {
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