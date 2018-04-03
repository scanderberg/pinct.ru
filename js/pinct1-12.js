
// ****************Адаптация под разрешение**************

// Инициализация размера меню

function funcScreen() {
navWidth = $("#response-nav").width();
menutopWidth = $("#menutop").width();
asideWidth = $("#right-litebox").width();
myscreen = menutopWidth - navWidth - asideWidth;
myheight = $("#menutop").height();
loadHeight = $("div.loading-box").height();
iconHeight = $("div.loading-icon").height();
resLoadHeight = loadHeight/2-iconHeight+20;



windowHeight = $(window).height()-20;
windowHeight2 = windowHeight/2;
reportsHeight = $("div.boxed-dark").height();
resRepHeight = windowHeight-reportsHeight;
resRepHeight2 = resRepHeight/2;
textResRepHeight2 = resRepHeight2 - 35;
heightDark = $('div.boxed-dark').height()+40;

$('div.boxed-dark').animate({
		'marginTop': resRepHeight2+'px'

}, 0, function(){ 
$.getScript('http://pinct.ru/js/script.js');
 

$('div.box-dark').animate({
        'height': windowHeight+'px'

}, 0);

 });
 
heightLeftView = $('div.left-view').height();
heightRightView = $('div.right-view').height();
 
$('div.left-view').animate({
'top': windowHeight2+'px'

}, 0);
 
$('div.right-view').animate({
'top': windowHeight2+'px'

}, 0);
 
 



      $("#screen").html("Размер: <b>"+myscreen+"X"+ myheight+"</b>");

$('div.loading-icon').animate({
        'marginTop': resLoadHeight+'px'

}, 0, function(){ 

$(this).css("display","block");

 });  
	  
	  
	  
// Вывод в зависимости от разрешения экрана
	  
if (myscreen < 1340 && myscreen > 1200) {

$("input#search").width(260);
$("input#search").attr("placeholder","Поиск по Pinct.ru");
$("div#top-sort").css("display","inline");
$("div#top-glide").width(840);
$("div#menu-boxed ul li:gt(5)").css("display","inline");
$("div#menu-boxed ul li:gt(6)").css("display","inline");
$("div#menu-boxed ul li:gt(7)").css("display","none");

}
	  
else if (myscreen < 1200 && myscreen >1050) {

$("input#search").width(260);
$("input#search").attr("placeholder","Поиск по Pinct.ru");
$("div#top-sort").css("display","inline");
$("div#top-glide").width(840);
$("div#menu-boxed ul li:gt(5)").css("display","inline");
$("div#menu-boxed ul li:gt(6)").css("display","none");
$("div#menu-boxed ul li:gt(7)").css("display","inline");

} 
	  
else if (myscreen < 1050 && myscreen >600) {

$("input#search").width(125);
$("input#search").attr("placeholder","Поиск...");
$("div#top-sort").css("display","none");
$("div#top-glide").width(660);
$("div#menu-boxed ul li:gt(5)").css("display","none");
$("div#menu-boxed ul li:gt(6)").css("display","none");
$("div#menu-boxed ul li:gt(7)").css("display","inline");

}

else {

$("input#search").width(260);
$("input#search").attr("placeholder","Поиск по Pinct.ru");
$("div#top-sort").css("display","inline");
$("div#top-glide").width(1120);
$("div#menu-boxed ul li:gt(5)").css("display","inline");
$("div#menu-boxed ul li:gt(6)").css("display","inline");
$("div#menu-boxed ul li:gt(7)").css("display","none");

}
	    
}


function loadScreen() {
$(document).ready(function(){
$("div.loading-box").hide();
});
}


  // Запуск скрипта по расписанию

function loadStart(){
   id=setTimeout('loadScreen()',2000);
}
  
function start(){
   id=setInterval('funcScreen()',10);
}
  
// ****************Анимация меню**************
  
  
$(document).ready(function(){
  
   $("#but1").mouseover(function(){
      $(this).toggleClass("class1");
   });

});
  
  
  $(document).ready(function(){
$("#boxed-menu").mouseover(function(){

$(this).toggleClass("boxed-menu-hover");
$("#boxed-menu .navtooltip").css("display","inline");
  
  });
});

  $(document).ready(function(){
$("#boxed-menu").mouseout(function(){

$(this).removeClass("boxed-menu-hover");
$("#boxed-menu .navtooltip").css("display","none");

  
  });
  
  

$("#boxed-menu").click(function(){

$(this).css("display","none");
$("#boxed-menu2").css("display","inline");

$("nav#response-nav").animate({
        "width": "+=40px",
        "opacity": "1"
}, 100 );

$("header.top-menu").animate({
        "marginLeft": "+=50px",
}, 500 );

$("div#box-right").animate({
        "marginRight": "+=50px",
}, 500 );

$("div#all-section-main").animate({
        "marginLeft": "+=50px",
}, 500, function(){ 

var $container = $('#container_infinity');
$container.masonry();

 });

$("nav#response-nav").show(200);

  });

  
  $("#boxed-menu2").mouseover(function(){

$(this).removeClass("boxed-menu-click-out");
$("#boxed-menu2 .navtooltip").css("display","inline");
  
  });
  
$("#boxed-menu2").mouseout(function(){

$(this).toggleClass("boxed-menu-click-out");
$("#boxed-menu2 .navtooltip").css("display","none");
  
  });
  
  
$("#boxed-menu2").click(function(){

$(this).css("display","none");
$("#boxed-menu").css("display","inline");

$("nav#response-nav").animate({
        "width": "-=40px",
        "opacity": "0"
}, 500 );
	  
$("header.top-menu").animate({
        "marginLeft": "-=50px",
}, 500 );

$("div#box-right").animate({
        "marginRight": "-=50px",
}, 500 );

$("div#all-section-main").animate({
        "marginLeft": "-=50px",
}, 500, function(){ 

var $container = $('#container_infinity');
$container.masonry();

 });
	  
$("nav#response-nav").hide(500);

  });
  
  
$("#response-show").mouseover(function(){

$("#response-show .navtooltip").css("display","inline");
  
  });
  
    $("#response-show").mouseout(function(){

$("#response-show .navtooltip").css("display","none");
  
  });
  
  $("#response-show2").mouseover(function(){

$("#response-show2 .navtooltip").css("display","inline");
  
  });
  
    $("#response-show2").mouseout(function(){

$("#response-show2 .navtooltip").css("display","none");
  
  });
 
  
  $("header").mouseover(function(){
  
  $("#modal-cat").toggleClass("modal-cat-show", false);
$("#modal-hash").toggleClass("modal-hash-show", false);
$("#modal-part").toggleClass("modal-part-show", false);
$("#modal-about").toggleClass("modal-about-show", false);
$("#modal-help").toggleClass("modal-help-show", false);
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);
  
});

$("#all-section-main").mouseover(function(){
  
  $("#modal-cat").toggleClass("modal-cat-show", false);
$("#modal-hash").toggleClass("modal-hash-show", false);
$("#modal-part").toggleClass("modal-part-show", false);
$("#modal-about").toggleClass("modal-about-show", false);
$("#modal-help").toggleClass("modal-help-show", false);
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);
  
});
  
  
  
  
  
$("#response-show").click(function(event){

event.preventDefault();
$(this).css("display","none");
$("#response-show2").css("display","block");
$("nav#response-nav").animate({
        "width": "+=110px",
}, 500 );

$("#response-show2").animate({
        "paddingLeft": "+=35px",
}, 0);
$("#response-show2").html("Свернуть");

$("#response-cat").animate({
        "paddingLeft": "+=35px",
}, 0);
$("#response-cat").prepend("<span>Категории</span>");
$("#response-cat i").html("");
$("#response-cat .navtooltip").remove();
$("#modal-cat").toggleClass("modal-cat-show", false);
$("#modal-cat").animate({
        "marginLeft": "+=5px",
}, 0);


$("#response-topp").animate({
        "paddingLeft": "+=35px",
}, 0);
$("#response-topp").html("Популярное");

$("#response-new").animate({
        "paddingLeft": "+=35px",
}, 0);
$("#response-new").html("Новое");

$("#response-video").animate({
        "paddingLeft": "+=35px",
}, 0);
$("#response-video").html("Видео");

$("#response-hash").animate({
        "paddingLeft": "+=35px",
}, 0);

$("#response-hash").prepend("<span>Хэш#теги</span>");
$("#response-hash i").html("");
$("#response-hash .navtooltip").remove();
$("#modal-hash").toggleClass("modal-hash-show", false);
$("#modal-hash").animate({
        "marginLeft": "+=5px",
}, 0);

$("#response-part").animate({
        "paddingLeft": "45px",
}, 0);

$("#response-part").prepend("<span>Партнёрам</span>");
$("#response-part i").html("");
$("#response-part .navtooltip").remove();
$("#modal-part").toggleClass("modal-part-show", false);
$("#modal-part").animate({
        "marginLeft": "32px",
}, 0);

$("#response-about").animate({
        "paddingLeft": "+=35px",
}, 0);
$("#response-about").prepend("<span>О&nbsp;нас</span>");
$("#response-about i").html("");
$("#response-about .navtooltip").remove();
$("#modal-about").toggleClass("modal-about-show", false);
$("#modal-about").animate({
        "marginLeft": "+=43px",
}, 0);

$("#response-help").animate({
        "paddingLeft": "+=35px",
}, 0);

$("#response-help").prepend("<span>Помощь</span>");
$("#response-help i").html("");
$("#response-help .navtooltip").remove();
$("#modal-help").toggleClass("modal-help-show", false);
$("#modal-help").animate({
        "marginLeft": "+=19px",
}, 0);

$("header.top-menu").animate({
        "marginLeft": "+=110px",
}, 500 );

$("div#box-right").animate({
        "marginRight": "+=110px",
}, 500 );

$("div#all-section-main").animate({
        "marginLeft": "+=110px",
}, 500, function(){ 

var $container = $('#container_infinity');
$container.masonry();

 });

  });
  
  
  
  
  $("#response-show2").click(function(event){

event.preventDefault();
$("#modal-cat").toggleClass("modal-cat-show", false);
$("#modal-hash").toggleClass("modal-hash-show", false);
$("#modal-part").toggleClass("modal-part-show", false);
$("#modal-about").toggleClass("modal-about-show", false);
$("#modal-help").toggleClass("modal-help-show", false);

$("nav#response-nav").animate({
        "width": "-=110px",
}, 500, function(){ 

$("#response-show2").css("display","none");
$("#response-show").css("display","block");



$("#response-show2").animate({
        "paddingLeft": "-=35px",
}, 0);
$("#response-show2").html("&nbsp;&nbsp;<div id='tooltip-menu' class='navtooltip'><img src='img/tik-menu-left-top.png' align='left' width='17'/>свернуть</div>");

$("#response-cat").animate({
        "paddingLeft": "-=35px",
}, 0);

$("#response-cat span").remove();

$("#modal-cat").animate({
        "marginLeft": "-=5px",
}, 0);
$("#response-cat").prepend("<i>&nbsp;&nbsp;</i>");
$("#response-cat").append("<div id='tooltip-menu' class='navtooltip'><img src='img/tik-menu-left.png' align='left' width='17'/>категории</div>");

$("#response-topp").animate({
        "paddingLeft": "-=35px",
}, 0);
$("#response-topp").html("&nbsp;&nbsp;<div id='tooltip-menu2' class='navtooltip'><img src='img/tik-menu-left.png' align='left' width='17'/>популярное</div>");

$("#response-new").animate({
        "paddingLeft": "-=35px",
}, 0);
$("#response-new").html("&nbsp;&nbsp;<div id='tooltip-menu3' class='navtooltip'><img src='img/tik-menu-left.png' align='left' width='17'/>новое</div>");

$("#response-video").animate({
        "paddingLeft": "-=35px",
}, 0);
$("#response-video").html("&nbsp;&nbsp;<div id='tooltip-menu4' class='navtooltip'><img src='img/tik-menu-left.png' align='left' width='17'/>видеоролики</div>");

$("#response-hash").animate({
        "paddingLeft": "-=35px",
}, 0);

$("#modal-hash").animate({
        "marginLeft": "-=5px",
}, 0);

$("#response-hash").prepend("<i>&nbsp;&nbsp;</i>");
$("#response-hash").append("<div id='tooltip-menu5' class='navtooltip'><img src='img/tik-menu-left.png' align='left' width='17'/>#теги</div>");

$("#response-hash span").remove();

$("#response-part").animate({
        "paddingLeft": "10px",
}, 0);

$("#modal-part").animate({
        "marginLeft": "36px",
}, 0);

$("#response-part").prepend("<i>&nbsp;</i>");
$("#response-part").append("<div id='tooltip-menu6' class='navtooltip'><img src='img/tik-menu-left.png' align='left' width='17'/>заработать!</div>");

$("#response-part span").remove();

$("#response-about").animate({
        "paddingLeft": "-=35px",
}, 0);

$("#modal-about").animate({
        "marginLeft": "-=43px",
}, 0);

$("#response-about").prepend("<i>&nbsp;&nbsp;</i>");
$("#response-about").append("<div id='tooltip-menu7' class='navtooltip'><img src='img/tik-menu-left.png' align='left' width='17'/>о&nbsp;сайте</div>");

$("#response-about span").remove();

$("#response-help").animate({
        "paddingLeft": "-=35px",
}, 0);

$("#modal-help").animate({
        "marginLeft": "-=19px",
}, 0);

$("#response-help").prepend("<i>&nbsp;&nbsp;</i>");
$("#response-help").append("<div id='tooltip-menu8' class='navtooltip'><img src='img/tik-menu-left.png' align='left' width='17'/>помощь</div>");

$("#response-help span").remove();

});



$("header.top-menu").animate({
        "marginLeft": "-=110px",
}, 500 );

$("div#box-right").animate({
        "marginRight": "-=110px",
}, 500 );

$("div#all-section-main").animate({
        "marginLeft": "-=110px",
}, 500, function(){ 

var $container = $('#container_infinity');
$container.masonry();

 });

  });
  
  
$("#menu-users").mouseover(function(){

$(this).toggleClass("menu-users-hover");
$("#menu-users .navtooltip").css("display","inline");
  
  });
  
  $("#menu-users").mouseout(function(){

$(this).removeClass("menu-users-hover");
$("#menu-users .navtooltip").css("display","none");
  
  });
  
 
$("#top-logo").mouseover(function(){

$("#top-logo img.show").css("display","none");
  $("#top-logo img.hide").css("display","inline");
  $("#top-logo .navtooltip").css("display","inline");
  
  });
  
  $("#top-logo").mouseout(function(){

$("#top-logo img.show").css("display","inline");
  $("#top-logo img.hide").css("display","none");
  $("#top-logo .navtooltip").css("display","none");
  
  });
  
  $("#top-logo").click(function(event){

event.preventDefault();

  });
 
  
  
$("#response-cat").mouseover(function(){

$(this).toggleClass("response-cat-hover");
$("#response-cat .navtooltip").css("display","inline");
  
  });
  
  $("#response-cat").mouseout(function(){

$(this).removeClass("response-cat-hover");
$("#response-cat .navtooltip").css("display","none");
  
  });
  
  $("#response-cat").click(function(event){

event.preventDefault();
$("#modal-cat").toggleClass("modal-cat-show");
$("#response-cat .navtooltip").toggleClass("navtooltip-hide");

$("#modal-hash").removeClass("modal-hash-show");
$("#modal-part").removeClass("modal-part-show");
$("#modal-about").removeClass("modal-about-show");
$("#modal-help").removeClass("modal-help-show");
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);

  });
  
 
$("#response-topp").mouseover(function(){

$(this).toggleClass("response-topp-hover");
$("#response-topp .navtooltip").css("display","inline");
  
  });
  
    $("#response-topp").mouseout(function(){

$(this).removeClass("response-topp-hover");
$("#response-topp .navtooltip").css("display","none");
  
  });
  
  $("#response-topp").click(function(event){

event.preventDefault();
$("#modal-hash").toggleClass("modal-hash-show");
$("#response-hash .navtooltip").toggleClass("navtooltip-hide");

$("#modal-cat").removeClass("modal-cat-show");
$("#modal-part").removeClass("modal-part-show");
$("#modal-about").removeClass("modal-about-show");
$("#modal-help").removeClass("modal-help-show");
$("#modal-hash").removeClass("modal-hash-show");
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
  
  });
  
  
  
  
  
  $("#response-new").mouseover(function(){

$(this).toggleClass("response-new-hover");
$("#response-new .navtooltip").css("display","inline");
  
  });
  
    $("#response-new").mouseout(function(){

$(this).removeClass("response-new-hover");
$("#response-new .navtooltip").css("display","none");
  
  });
  
    $("#response-new").click(function(event){

event.preventDefault();
$("#modal-hash").toggleClass("modal-hash-show");
$("#response-hash .navtooltip").toggleClass("navtooltip-hide");

$("#modal-cat").removeClass("modal-cat-show");
$("#modal-part").removeClass("modal-part-show");
$("#modal-about").removeClass("modal-about-show");
$("#modal-help").removeClass("modal-help-show");
$("#modal-hash").removeClass("modal-hash-show");
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
  
  });
  
    $("#response-video").mouseover(function(){

$(this).toggleClass("response-video-hover");
$("#response-video .navtooltip").css("display","inline");
  
  });
  
    $("#response-video").mouseout(function(){

$(this).removeClass("response-video-hover");
$("#response-video .navtooltip").css("display","none");
  
  });
  
    $("#response-video").click(function(event){

event.preventDefault();
$("#modal-hash").toggleClass("modal-hash-show");
$("#response-hash .navtooltip").toggleClass("navtooltip-hide");

$("#modal-cat").removeClass("modal-cat-show");
$("#modal-part").removeClass("modal-part-show");
$("#modal-about").removeClass("modal-about-show");
$("#modal-help").removeClass("modal-help-show");
$("#modal-hash").removeClass("modal-hash-show");
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
  
  });
  
      $("#response-hash").mouseover(function(){

$(this).toggleClass("response-hash-hover");
$("#response-hash .navtooltip").css("display","inline");
  
  });
  
    $("#response-hash").mouseout(function(){

$(this).removeClass("response-hash-hover");
$("#response-hash .navtooltip").css("display","none");

  });
  
    $("#response-hash").click(function(event){

event.preventDefault();
$("#modal-hash").toggleClass("modal-hash-show");
$("#response-hash .navtooltip").toggleClass("navtooltip-hide");

$("#modal-cat").removeClass("modal-cat-show");
$("#modal-part").removeClass("modal-part-show");
$("#modal-about").removeClass("modal-about-show");
$("#modal-help").removeClass("modal-help-show");
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);
  
  });
  

        $("#response-part").mouseover(function(){

$(this).toggleClass("response-part-hover");
$("#response-part .navtooltip").css("display","inline");
  
  });
  
    $("#response-part").mouseout(function(){

$(this).removeClass("response-part-hover");
$("#response-part .navtooltip").css("display","none");
  
  });
  
      $("#response-part").click(function(event){

event.preventDefault();
$("#modal-part").toggleClass("modal-part-show");
$("#response-part .navtooltip").toggleClass("navtooltip-hide");

$("#modal-cat").removeClass("modal-cat-show");
$("#modal-hash").removeClass("modal-hash-show");
$("#modal-about").removeClass("modal-about-show");
$("#modal-help").removeClass("modal-help-show");
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);
  
  });
  
          $("#response-about").mouseover(function(){

$(this).toggleClass("response-about-hover");
$("#response-about .navtooltip").css("display","inline");
  
  });
  
    $("#response-about").mouseout(function(){

$(this).removeClass("response-about-hover");
$("#response-about .navtooltip").css("display","none");
  
  });
  
        $("#response-about").click(function(event){

event.preventDefault();
$("#modal-about").toggleClass("modal-about-show");
$("#response-about .navtooltip").toggleClass("navtooltip-hide");

$("#modal-cat").removeClass("modal-cat-show");
$("#modal-hash").removeClass("modal-hash-show");
$("#modal-part").removeClass("modal-part-show");
$("#modal-help").removeClass("modal-help-show");
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-help .navtooltip").toggleClass("navtooltip-hide", false);
  
  });
  
          $("#response-help").mouseover(function(){

$(this).toggleClass("response-help-hover");
$("#response-help .navtooltip").css("display","inline");
  
  });
  
    $("#response-help").mouseout(function(){

$(this).removeClass("response-help-hover");
$("#response-help .navtooltip").css("display","none");
  
  });
  
          $("#response-help").click(function(event){

event.preventDefault();
$("#modal-help").toggleClass("modal-help-show");
$("#response-help .navtooltip").toggleClass("navtooltip-hide");

$("#modal-cat").removeClass("modal-cat-show");
$("#modal-hash").removeClass("modal-hash-show");
$("#modal-part").removeClass("modal-part-show");
$("#modal-about").removeClass("modal-about-show");
$("#response-cat .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-hash .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-part .navtooltip").toggleClass("navtooltip-hide", false);
$("#response-about .navtooltip").toggleClass("navtooltip-hide", false);
  
  });
  
 
  
});

  
  
  
  
  
  
  
  
  

