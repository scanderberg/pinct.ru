 

$(document).ready(function(){ 




function pinctInit(){

notif={
   navElem:'#top-messages',//1 иконка
   Tooltip:'#top-messages .navtooltip',//2 тултип
   Hover:'top-messages-hover',//3 иконка при наведении
   
   Nav:'#natif-nav',//4 меню
   NavShow:'natif-nav-show',//5 меню класс показа
   NavHide:'natif-nav-hide',//5 меню класс показа
   TooltipHide:'navtooltip-hide',//6 класс скрытия тултипа
   noTooltip:'#top-account .navtooltip, #top-messages .navtooltip, #plus-user .navtooltip, #top-plus .navtooltip, #top-emal .navtooltip',//7 скрытие всех тултипов
   noMenu:'#plus-user, #top-plus, #top-emal, #top-chat, #top-account',//8
   noClass1:'plus-nav-show',//9 сделать по-одному
   noClass2:'emal-nav-show',//10 сделать по-одному
   noClass3:'account-nav-show',//11 сделать по-одному
   noClass4:'top-plus-nav-show',//12 сделать по-одному
   
}

send={
   navElem:'#top-emal',//1 иконка
   Tooltip:'#top-emal .navtooltip',//2 тултип
   Hover:'top-emal-hover',//3 иконка при наведении
   
   Nav:'#emal-nav',//4 меню
   NavShow:'emal-nav-show',//5 меню класс показа
   NavHide:'emal-nav-hide',//5 меню класс показа
   TooltipHide:'navtooltip-hide',//6 класс скрытия тултипа
   noTooltip:'#top-account .navtooltip, #top-messages .navtooltip, #plus-user .navtooltip, #top-plus .navtooltip, #top-emal .navtooltip',//7 скрытие всех тултипов
   noMenu:'#top-messages, #plus-user, #top-plus, #top-chat, #top-account',//8
   noClass1:'plus-nav-show',//9 сделать по-одному
   noClass2:'natif-nav-show',//10 сделать по-одному
   noClass3:'account-nav-show',//11 сделать по-одному
   noClass4:'top-plus-nav-show',//12 сделать по-одному
   
}

account={
   navElem:'#top-account',//1 иконка
   Tooltip:'#top-account .navtooltip',//2 тултип
   Hover:'top-account-hover',//3 иконка при наведении
   
   Nav:'#account-nav',//4 меню
   NavShow:'account-nav-show',//5 меню класс показа
   TooltipHide:'navtooltip-hide',//6 класс скрытия тултипа
   noTooltip:'#top-account .navtooltip, #top-messages .navtooltip, #plus-user .navtooltip, #top-plus .navtooltip, #top-emal .navtooltip',//7 скрытие всех тултипов
   noMenu:'#top-messages, #plus-user, #top-plus, #top-chat, #top-emal',//8
   noClass1:'plus-nav-show',//9 сделать по-одному
   noClass2:'natif-nav-show',//10 сделать по-одному
   noClass3:'emal-nav-show',//11 сделать по-одному
   noClass4:'top-plus-nav-show',//12 сделать по-одному
   
}

plus={
   navElem:'#plus-user',//1 иконка
   Tooltip:'#plus-user .navtooltip',//2 тултип
   Hover:'plus-user-hover',//3 иконка при наведении
   
   Nav:'#plus-nav',//4 меню
   NavShow:'plus-nav-show',//5 меню класс показа
   TooltipHide:'navtooltip-hide',//6 класс скрытия тултипа
   noTooltip:'#top-account .navtooltip, #top-messages .navtooltip, #plus-user .navtooltip, #top-plus .navtooltip, #top-emal .navtooltip',//7 скрытие всех тултипов
   noMenu:'#top-messages, #top-plus, #top-chat, #top-account, #top-emal',//8
   noClass1:'account-nav-show',//9 сделать по-одному
   noClass2:'natif-nav-show',//10 сделать по-одному
   noClass3:'emal-nav-show',//11 сделать по-одному
   noClass4:'top-plus-nav-show',//12 сделать по-одному
   
}

toppl={
   navElem:'#top-plus',//1 иконка
   Tooltip:'#top-plus .navtooltip',//2 тултип
   Hover:'top-plus-hover',//3 иконка при наведении
   
   Nav:'#top-plus-nav',//4 меню
   NavShow:'top-plus-nav-show',//5 меню класс показа
   TooltipHide:'navtooltip-hide',//6 класс скрытия тултипа
   noTooltip:'#top-account .navtooltip, #top-messages .navtooltip, #plus-user .navtooltip, #top-plus .navtooltip, #top-emal .navtooltip',//7 скрытие всех тултипов
   noMenu:'#plus-nav',//8
   noClass1:'account-nav-show',//9 сделать по-одному
   noClass2:'natif-nav-show',//10 сделать по-одному
   noClass3:'emal-nav-show',//11 сделать по-одному
   noClass4:'plus-nav-show',//12 сделать по-одному
   
}

def={

Posit:'#plus-nav, #account-nav, #emal-nav, #natif-nav, #top-plus-nav'

}

}

pinctInit();

function topAnim(par1,par2,par3,par4){

  $(par1).mouseover(function(){

$(par1).toggleClass(par3);
$(par2).toggleClass(par4);
  
  });
  
  $(par1).mouseout(function(){

$(par1).removeClass(par3);
$(par2).removeClass(par4);
  
  });
  
  }
  
  topAnim(notif.navElem, notif.Nav, notif.Hover, notif.NavShow);
  
  topAnim(account.navElem, account.Nav, account.Hover, account.NavShow);
  
  topAnim(plus.navElem, plus.Nav, plus.Hover, plus.NavShow);
  
  topAnim(toppl.navElem, toppl.Nav, toppl.Hover, toppl.NavShow);
  
 

$("#all-section-main").mouseover(function(){

  $("#natif-nav").toggleClass("plus-nav-show", false);
$("#top-plus-nav").toggleClass("plus-nav-show", false);
$("#account-nav").toggleClass("plus-nav-show", false);
$("#emal-nav").toggleClass("plus-nav-show", false);
$("#plus-nav").toggleClass("plus-nav-show", false);
$("#top-account .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-plus .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-emal .navtooltip").toggleClass("navtooltip-hide", false);
$("#plus-user .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-messages .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-chat .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-chat2 .navtooltip").toggleClass("navtooltip-hide", false);
  
});

  $("#response-nav").mouseover(function(){
  
   $("#natif-nav").toggleClass("plus-nav-show", false);
$("#top-plus-nav").toggleClass("plus-nav-show", false);
$("#account-nav").toggleClass("plus-nav-show", false);
$("#emal-nav").toggleClass("plus-nav-show", false);
$("#plus-nav").toggleClass("plus-nav-show", false);
$("#top-account .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-plus .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-emal .navtooltip").toggleClass("navtooltip-hide", false);
$("#plus-user .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-messages .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-chat .navtooltip").toggleClass("navtooltip-hide", false);
$("#top-chat2 .navtooltip").toggleClass("navtooltip-hide", false);
  
  });
  
  
  $("#top-chat").mouseover(function(){

$(this).toggleClass("top-chat-hover");
$("#top-chat .navtooltip").css("display","inline");
  
  });
  
  $("#top-chat").mouseout(function(){

$(this).removeClass("top-chat-hover");
$("#top-chat .navtooltip").css("display","none");

  });
  
  $("#top-chat").click(function(){

$(this).css("display","none");
$("#top-chat2").css("display","inline");

$("aside#right-litebox").animate({
        "width": "+=280px",
        "opacity": "1"
}, 300, function(){

$("#verx-captions").animate({
        "opacity": "1"
}, 2000 );

});

$("header.top-menu").animate({
        "marginLeft": "-=280px",
}, 500 );

$("div#top-left").animate({
        "marginLeft": "+=280px",
}, 500 );

$("div#all-section-main").animate({
        "marginRight": "+=280px",
}, 500, function(){ 

var $container = $('#container_infinity');
$container.masonry();

 });

$("aside#right-litebox").show(300);

  });
  
  
  
  
  
$("#top-chat2").mouseover(function(){

$(this).toggleClass("top-chat2-hover");
$("#top-chat2 .navtooltip").css("display","inline");
  
  });
  
  $("#top-chat2").mouseout(function(){

$(this).removeClass("top-chat2-hover");
$("#top-chat2 .navtooltip").css("display","none");

  });
  
  $("#top-chat2").click(function(){

$(this).css("display","none");
$("#top-chat").css("display","inline");

$("#verx-captions").animate({
        "opacity": "0"
}, 400, function(){

$("aside#right-litebox").animate({
        "width": "-=280px",
        "opacity": "0"
}, 500 );

$("aside#right-litebox").hide(500);

$("header.top-menu").animate({
        "marginLeft": "+=280px",
}, 500 );

$("div#top-left").animate({
        "marginLeft": "-=280px",
}, 500 );

$("div#all-section-main").animate({
        "marginRight": "-=280px",
}, 500, function(){ 

var $container = $('#container_infinity');
$container.masonry();

 });

});


});

  
  $("#top-account").mouseover(function(){

$("#top-account img.img-nav").css("width","36px").css("border","4px solid #52c1fd");
  
  });

  $("#top-account").mouseout(function(){

$("#top-account img.img-nav").css("width","44px").css("border","none");
  
  });


  

  $('body').mousemove(function(e){

  offset = $(this).offset();
  browserX = (e.clientX);
  browserY = (e.clientY);
  screenX = (e.screenX);
  screenY = (e.screenY);
  relativeX = (e.pageX - offset.left);
  relativeY = (e.pageY - offset.top);
  resy = relativeY - browserY;
  
$('span#myresultsc i').html(browserY);
$('span#myresultdoc i').html(relativeY);

});
  
  
  
  
  });
  
  
  
  
  
  