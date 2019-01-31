//random star coordinate generator
function starCoord(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min);
}


var screenWidth = document.documentElement.clientWidth;
var xMin, xMax, yMin, yMax;

if (screenWidth > 1200) {
  xMin = 800; //1200
  xMax = 2400;
  yMin = 600;
  yMax = 2400;
} else if (screenWidth < 1201 && screenWidth > 600) {
  xMin = 600; //800
  xMax = 1584;
  yMin = 396;
  yMax = 1584;
} else {
  xMin = 280;  //480
  xMax = 960;
  yMin = 240;
  yMax = 960;  
}


//populate stars
for (var i = 0; i < 200; i++) {
  
  var x = starCoord(xMin, xMax);
  var y = starCoord(yMin, yMax);
  $(".sky").append(
    "<div class='star' style='top: " + x + "px; left: " + y + "px; z-index: 1'>&#9733;</div>"
  )
  
}

//animation trigger
$(".trigger").on("click", function() {
  console.log(document.documentElement.clientWidth)
  $(".sky").toggleClass("spin");
})

