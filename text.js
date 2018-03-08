var tl = new TimelineMax({onUpdate:updateSlider});

tl.to("#scramble", 3, {scrambleText:{text:"All the news that's fit to read!", chars:"lowerCase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom1", 3, {scrambleText:{text:"World", chars:"lowercasse", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom2", 3, {scrambleText:{text:"Local", chars:"lowercase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom3", 3, {scrambleText:{text:"US", chars:"lowercase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom4", 3, {scrambleText:{text:"Technology", chars:"lowercase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom5", 3, {scrambleText:{text:"Health", chars:"lowercase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom6", 3, {scrambleText:{text:"Business", chars:"lowercase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom7", 3, {scrambleText:{text:"Sports", chars:"lowercase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom8", 3, {scrambleText:{text:"Science", chars:"lowercase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom9", 3, {scrambleText:{text:"Entertainment", chars:"lowercase", revealDelay:0.1, tweenLength:false, ease:Linear.easeNone}})

$("#scrambleSlider").slider({
  range: false,
  min: 0,
  max: 1,
  step:.001,
  slide: function ( event, ui ) {
    tl.progress( ui.value ).pause();
  },
  stop: function () {
    tl.play();
  }
});	

function updateSlider() {
  $("#scrambleSlider").slider("value", tl.progress());
} 