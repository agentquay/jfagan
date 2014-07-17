
/* Dynamic top menu positioning
 *
 */

var num = 141; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
});




//background image rotator
var imgArr = new Array('https://raw.githubusercontent.com/agentquay/jfagan/master/img/trees.jpg', 'https://raw.githubusercontent.com/agentquay/jfagan/master/img/cliffs.jpg', 'https://raw.githubusercontent.com/agentquay/jfagan/master/img/clovers.jpg');
//var imgArr = new Array('trees', 'cliffs', 'clovers');

var preloadArr = new Array();
var i;

/* preload images */
for (i = 0; i < imgArr.length; i++) {
    preloadArr[i] = new Image();
    preloadArr[i].src = imgArr[i];
}

var currImg = 1;
var intID = setInterval(changeImg, 10000);

//function changeImg() {
  //  $('.head').css({ 'background': 'url(' +  preloadArr[currImg++ % preloadArr.length].src + ')' });
//}

//function changeImg() {
//	$( ".head" ).fadeIn( "slow", function() {
  //  $('.head').toggleClass( preloadArr[currImg++ % preloadArr.length]);

    // });
//}

function changeImg() {
    $('.head').css({ 

    	'background': 'url(' +  preloadArr[currImg++ % preloadArr.length].src + ')' 

    });
}








