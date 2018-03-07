var tl = new TimelineMax({onUpdate:updateSlider});

tl.to("#scramble", 3, {scrambleText:{text:"All the news that's fit to read!", chars:"lowerCase", revealDelay:0.5, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom1", 4, {scrambleText:{text:"Technology", chars:"lowercasse", revealDelay:0.5, tweenLength:false, ease:Linear.easeNone}})

.to("#charsCustom2", 4, {scrambleText:{text:"World", chars:"lowercase", revealDelay:0.5, tweenLength:false, revealDelay:0.5, ease:Linear.easeNone}})

.to("#charsCustom3", 4, {scrambleText:{text:"Nation", chars:"lowercase", revealDelay:0.5, tweenLength:false, revaelDelay:0.5, ease:Linear.easeNone}})

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