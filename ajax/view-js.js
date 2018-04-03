$('div#autors888').delegate('div#author-view-sub888','click',function(){
event.preventDefault();
$('div#author-view-sub888').css('display','none');
$('div#author-view-unsub888').css('display','block');
      });  
$('div#autors888').delegate('div#author-view-unsub888','click',function(){
event.preventDefault();
$('div#author-view-unsub888').css('display','none');
$('div#author-view-sub888').css('display','block');
      });
	  
$('div#myboard-view888').delegate('div#board-view-sub888','click',function(){
event.preventDefault();
$('div#board-view-sub888').css('display','none');
$('div#board-view-unsub888').css('display','block');
      });  
$('div#myboard-view888').delegate('div#board-view-unsub888','click',function(){
event.preventDefault();
$('div#board-view-unsub888').css('display','none');
$('div#board-view-sub888').css('display','block');
      });

  
	  
$('div#main-bar888').delegate('div#autor-bar888','mouseover',function(){
$('img#autor-bar888').toggleClass('view-autor-hover', true);
$('img#autor-bar888').animate({
        'width': '62px',
		'height': '62px'

}, 0);
$('.view-autor .navtooltip').css('display','inline');
}); 
	
$('div#main-bar888').delegate('div#autor-bar888','mouseleave',function(){
$('img#autor-bar888').toggleClass('view-autor-hover', false);
$('img#autor-bar888').animate({
        'width': '70px',
		'height': '70px'

}, 0);
$('.view-autor .navtooltip').css('display','none');
}); 	
	  
	  
	  
fixHeight = $('div.boxed-view').height()+20;
pinViewHeight = 712 + $('div#max-desqus117').height() - 220;
fixSocialHeight = $('div.social-view').height();
offScrollHeight = pinViewHeight-fixSocialHeight;
$('body').mousemove(function(ev){
 scOffset = $(this).offset();
  scBrowserY = (ev.clientY);
  scRelativeY = (ev.pageY - scOffset.top);
  scResy = scRelativeY - scBrowserY;
  absSocialHeight = scResy;
  });

$('div.box-view').animate({
        'height': fixHeight+'px'

}, 0);

 $(window).scroll(function(ev){
 
scrollVerx = $('body').scrollTop();
if (scrollVerx > pinViewHeight) {

$('div.social-view').css('position','absolute');
$('div.social-view').animate({
		'top': pinViewHeight+'px'

}, 0);
}

else {

$('div.social-view').css('position','fixed');
$('div.social-view').animate({
		'top': '60px'

}, 0);
}

$('div#max-desqus117 h2').html('abs: '+absSocialHeight+' left: '+pinViewHeight+' social: '+fixSocialHeight+' scrollTop: '+scrollVerx);
});

$('div#max-send117').delegate('textarea#max-send117','focus',function(){
$('textarea#max-send117').animate({
		'height': '100px'

}, 100);
$("textarea#max-send117").attr('placeholder','Напишите что-нибудь...');
$('div#max-my-send117').css('display','inline');

});

$('div#max-send117').delegate('textarea#max-send117','blur',function(){
$('textarea#max-send117').animate({
		'height': '18px'

}, 100);
$("textarea#max-send117").attr('placeholder','Кликните, чтобы ответить...');
$('div#max-my-send117').css('display','none');
});

$('div.boxed-view').delegate('div.left-view','mouseover',function(){
$('div.left-view').toggleClass('left-view-hover', true);
});

$('div.boxed-view').delegate('div.left-view','mouseleave',function(){
$('div.left-view').toggleClass('left-view-hover', false);
});

$('div.boxed-view').delegate('div.right-view','mouseover',function(){
$('div.right-view').toggleClass('right-view-hover', true);
});

$('div.boxed-view').delegate('div.right-view','mouseleave',function(){
$('div.right-view').toggleClass('right-view-hover', false);
});

$('div.boxed-view').delegate('div.close-view','mouseover',function(){
$('div.close-view').toggleClass('close-view-hover', true);
});

$('div.boxed-view').delegate('div.close-view','mouseleave',function(){
$('div.close-view').toggleClass('close-view-hover', false);
});


$('div.main-left').delegate('div.social-view','mouseover',function(){

$('div.social-view').animate({
        'marginLeft': '-45px'

}, 100);
});

$('div.main-left').delegate('div.social-view','mouseleave',function(){

$('div.social-view').animate({
        'marginLeft': '-20px'

}, 100);
});




$('div.social-view').delegate('div.facebook-view','mouseover',function(){
$('div.facebook-view').toggleClass('facebook-view-hover', true);
$('.facebook-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.facebook-view','mouseleave',function(){
$('div.facebook-view').toggleClass('facebook-view-hover', false);
$('.facebook-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.google-view','mouseover',function(){
$('div.google-view').toggleClass('google-view-hover', true);
$('.google-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.google-view','mouseleave',function(){
$('div.google-view').toggleClass('google-view-hover', false);
$('.google-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.vkontakte-view','mouseover',function(){
$('div.vkontakte-view').toggleClass('vkontakte-view-hover', true);
$('.vkontakte-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.vkontakte-view','mouseleave',function(){
$('div.vkontakte-view').toggleClass('vkontakte-view-hover', false);
$('.vkontakte-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.mail-ru-view','mouseover',function(){
$('div.mail-ru-view').toggleClass('mail-ru-view-hover', true);
$('.mail-ru-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.mail-ru-view','mouseleave',function(){
$('div.mail-ru-view').toggleClass('mail-ru-view-hover', false);
$('.mail-ru-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.odnoklassniki-view','mouseover',function(){
$('div.odnoklassniki-view').toggleClass('odnoklassniki-view-hover', true);
$('.odnoklassniki-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.odnoklassniki-view','mouseleave',function(){
$('div.odnoklassniki-view').toggleClass('odnoklassniki-view-hover', false);
$('.odnoklassniki-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.twitter-view','mouseover',function(){
$('div.twitter-view').toggleClass('twitter-view-hover', true);
$('.twitter-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.twitter-view','mouseleave',function(){
$('div.twitter-view').toggleClass('twitter-view-hover', false);
$('.twitter-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.mail-view','mouseover',function(){
$('div.mail-view').toggleClass('mail-view-hover', true);
$('.mail-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.mail-view','mouseleave',function(){
$('div.mail-view').toggleClass('mail-view-hover', false);
$('.mail-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.reports-view','mouseover',function(){
$('div.reports-view').toggleClass('reports-view-hover', true);
$('.reports-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.reports-view','mouseleave',function(){
$('div.reports-view').toggleClass('reports-view-hover', false);
$('.reports-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.code-view','mouseover',function(){
$('div.code-view').toggleClass('code-view-hover', true);
$('.code-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.code-view','mouseleave',function(){
$('div.code-view').toggleClass('code-view-hover', false);
$('.code-view .navtooltip').css('display','none');
});



$('div.view-bar').delegate('div#repin-bar888','mouseover',function(){
$('div#repin-bar888').toggleClass('view-repin-hover', true);
$('.view-repin .navtooltip').css('display','inline');
});

$('div.view-bar').delegate('div#repin-bar888','mouseleave',function(){
$('div#repin-bar888').toggleClass('view-repin-hover', false);
$('.view-repin .navtooltip').css('display','none');
});

$('div.view-bar').delegate('div#like-bar888','mouseover',function(){
$('div#like-bar888').toggleClass('like-view-hover', true);
$('.like-view .navtooltip').css('display','inline');
});

$('div.view-bar').delegate('div#like-bar888','mouseleave',function(){
$('div#like-bar888').toggleClass('like-view-hover', false);
$('.like-view .navtooltip').css('display','none');
});

$('div.view-bar').delegate('div#unlike-bar888','mouseover',function(){
$('div#unlike-bar888').toggleClass('unlike-view-hover', true);
$('.unlike-view .navtooltip').css('display','inline');
});

$('div.view-bar').delegate('div#unlike-bar888','mouseleave',function(){
$('div#unlike-bar888').toggleClass('unlike-view-hover', false);
$('.unlike-view .navtooltip').css('display','none');
});

$('div.view-bar').delegate('div#report-bar888','mouseover',function(){
$('div#report-bar888').toggleClass('report-view-hover', true);
$('.report-view .navtooltip').css('display','inline');
});

$('div.view-bar').delegate('div#report-bar888','mouseleave',function(){
$('div#report-bar888').toggleClass('report-view-hover', false);
$('.report-view .navtooltip').css('display','none');
});

$('div.view-bar').delegate('div#zoom-bar888','mouseover',function(){
$('div#zoom-bar888').toggleClass('zoom-view-hover', true);
$('.zoom-view .navtooltip').css('display','inline');
});

$('div.view-bar').delegate('div#zoom-bar888','mouseleave',function(){
$('div#zoom-bar888').toggleClass('zoom-view-hover', false);
$('.zoom-view .navtooltip').css('display','none');
});

$('div.view-bar').delegate('div#like-bar888','click',function(){
event.preventDefault();
$('a div#like-bar888').css('display','none');
$('a div#unlike-bar888').css('display','inline-block');
      });

$('div.view-bar').delegate('div#unlike-bar888','click',function(){
event.preventDefault();
$('a div#unlike-bar888').css('display','none');
$('a div#like-bar888').css('display','inline-block');
      });

	  
$('div#load-view').delegate('div#report-bar888','click',function(){
event.preventDefault();

$('div.box-dark').css('display','block');
$('div.boxed-dark').css('display','block');
$('div.social-view').css('display','none');
$('div.boxed-dark').html("<div align='center' id='this-dark888' class='this-dark'><div align='center' id='my-reports888' class='this-my-reports'><div align='center' id='capt-reports888' class='this-capt-reports'><h2>Чем Вам не понравился пост?</h2></div><br><div align='left' id='form-reports888' class='form-reports'><form id='form-reports888' class='form-reports' name='reports' action='reports.php' method='GET'><div class='input-indent'><div class='radioblock'><div class='radio' id='input-report888'>На нём изображены нудисты</div><div class='radio' id='input-report888'>Содержит порнографию</div><div class='radio' id='input-report888'>Есть сцены насилия</div><div class='radio' id='input-report888'>Элементы расизма</div><div class='radio' id='input-report888'>Это спам</div><div class='radio' id='input-report-other888'>Другое</div></div></div><div align='center'  id='text-reports888' class='textarea-reports'><div align='center'  id='text-this888' class='textarea-this'></div><br><input type='button' name='max-reports' id='max-reports' class='max-reports' value='отправить'></div></form></div></div></div>");


 $("div.close-dark").mouseover(function(){
$(this).toggleClass('close-dark-hover', true);
});

 $("div.close-dark").mouseleave(function(){
$(this).toggleClass('close-dark-hover', false);
});

 $('div.close-dark, div.box-dark').click(function(){

$('div.boxed-dark').html("");
$('div.boxed-dark').css('display','none');
$('div.box-dark').css('display','none');
$('div.social-view').css('display','block');
$('div.box-view').toggleClass('fixed', false);
$('div.boxed-view').toggleClass('fixed', false);
$('div.boxed-view').animate({
'marginTop': '15px',

}, 0);



 
});

windowHeight = $(window).height()-20;
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

 
$('div.box-view').toggleClass('fixed', true);
$('div.boxed-view').animate({
'marginTop': '0px',
        'marginTop': '-='+window.resy+'px'

}, 0, function(){ 

$(this).toggleClass('fixed', true);

$('div.this-my-reports').delegate('div#input-report-other888','click',function(){  

$('div.textarea-this').html("<textarea name='send-reports' class='max-send-reports' id='report888-send' placeholder='Укажите причину...'></textarea><br>");
$('div.boxed-dark').delay(100).animate({
        'marginTop': textResRepHeight2+'px'

}, 100);
	    
}); 

$('div.this-my-reports').delegate('div#input-report888','click',function(){
$('div.textarea-this').html("");  
$('div.boxed-dark').delay(100).animate({
        'marginTop': resRepHeight2+'px'

}, 100);
	    
}); 

 });
 
      }); 
	  
$('div#load-view').delegate('div#code888','click',function(){
event.preventDefault();

$('div.box-dark').css('display','block');
$('div.boxed-dark').css('display','block');
$('div.social-view').css('display','none');
$('div.boxed-dark').html("<div align='center' id='this-dark888' class='this-dark'><div align='center' id='my-reports888' class='this-my-reports'><div align='center' id='capt-reports888' class='this-capt-reports'><h2>Разместите пост на своём сайте</h2></div><br><div align='center'  id='text-code888' class='textarea-code'><textarea name='get-code' class='max-get-code' id='code888-get'><Здесь будет код></textarea><br><br><input type='button' name='max-code' id='max-code888' class='max-code' value='ОК'></div></form></div></div></div>");

 $("div.close-dark").mouseover(function(){
$(this).toggleClass('close-dark-hover', true);
});

 $("div.close-dark").mouseleave(function(){
$(this).toggleClass('close-dark-hover', false);
});

 $('div.close-dark, div.box-dark, input#max-code888').click(function(){

$('div.boxed-dark').html("");
$('div.boxed-dark').css('display','none');
$('div.box-dark').css('display','none');
$('div.social-view').css('display','block');
$('div.box-view').toggleClass('fixed', false);
$('div.boxed-view').toggleClass('fixed', false);
$('div.boxed-view').animate({
'marginTop': '15px',

}, 0);

});

windowHeight = $(window).height()-20;
reportsHeight = $("div.boxed-dark").height();
resRepHeight = windowHeight-reportsHeight;
resRepHeight2 = resRepHeight/2;
textResRepHeight2 = resRepHeight2 - 35;
heightDark = $('div.boxed-dark').height()+40;
$('div.boxed-dark').animate({
		'marginTop': resRepHeight2+'px'

}, 0, function(){ 
 
$('div.box-dark').animate({
        'height': windowHeight+'px'

}, 0);

 });

$('div.box-view').toggleClass('fixed', true);
$('div.boxed-view').animate({
'marginTop': '0px',
        'marginTop': '-='+window.resy+'px'

}, 0, function(){ 

$(this).toggleClass('fixed', true);  

 });

});



$('div#load-view').delegate('div#err888','click',function(){
event.preventDefault();

$('div.box-dark').css('display','block');
$('div.boxed-dark').css('display','block');
$('div.social-view').css('display','none');
$('div.boxed-dark').html("<div align='center' id='this-dark888' class='this-dark'><div align='center' id='my-err888' class='this-my-err'><div align='center' id='capt-err888' class='this-capt-err'><h2>Hашли ошибку?</h2></div><br><div align='center'  id='text-err888' class='tex-err'>Если Вы нашли ошибку, выделите её в тексте, а затем нажмите Ctrl+Z+Alt. Благодарим за содействие!<br><br><input type='button' name='max-err' id='max-err888' class='max-err' value='ОК'><br></div></form></div></div></div>");

 $("div.close-dark").mouseover(function(){
$(this).toggleClass('close-dark-hover', true);
});

 $("div.close-dark").mouseleave(function(){
$(this).toggleClass('close-dark-hover', false);
});

 $('div.close-dark, div.box-dark, input#max-err888').click(function(){

$('div.boxed-dark').html("");
$('div.boxed-dark').css('display','none');
$('div.box-dark').css('display','none');
$('div.social-view').css('display','block');
$('div.box-view').toggleClass('fixed', false);
$('div.boxed-view').toggleClass('fixed', false);
$('div.boxed-view').animate({
'marginTop': '15px',

}, 0);

});

windowHeight = $(window).height()-20;
reportsHeight = $("div.boxed-dark").height();
resRepHeight = windowHeight-reportsHeight;
resRepHeight2 = resRepHeight/2;
textResRepHeight2 = resRepHeight2 - 35;
heightDark = $('div.boxed-dark').height()+40;
$('div.boxed-dark').animate({
		'marginTop': resRepHeight2+'px'

}, 0, function(){ 
 
$('div.box-dark').animate({
        'height': windowHeight+'px'

}, 0);

 });



$('div.box-view').toggleClass('fixed', true);
$('div.boxed-view').animate({
'marginTop': '0px',
        'marginTop': '-='+window.resy+'px'

}, 0, function(){ 

$(this).toggleClass('fixed', true);  

 });



});





$('div#load-view').delegate('div#mail888','click',function(){
event.preventDefault();

$('div.box-dark').css('display','block');
$('div.boxed-dark').css('display','block');
$('div.social-view').css('display','none');
$('div.boxed-dark').html("<div align='center' id='this-dark888' class='this-dark'><div align='center' id='my-reports888' class='this-my-mail'><div align='center' id='capt-mail888' class='this-capt-mail'><h2>Отправить пост другу</h2></div><div align='center' class='textarea-mail'><form id='form-mail888' class='form-mail' name='mail' action='mail.php' method='GET'><br><input type='text' name='max-name-mail' id='max-name-mail888' class='max-name-mail' placeholder='Имя'><br><br><input type='text' name='max-email-mail' id='max-email-mail888' class='max-email-mail' placeholder='Email'><br><textarea name='send-mail' class='max-send-mail' id='mail888-send' placeholder='Сообщение...'></textarea><br><br><input type='button' name='max-mail' id='max-mail888' class='max-mail' value='отправить'><br></form></div></div></div>");

 $("div.close-dark").mouseover(function(){
$(this).toggleClass('close-dark-hover', true);
});

 $("div.close-dark").mouseleave(function(){
$(this).toggleClass('close-dark-hover', false);
});

 $('div.close-dark, div.box-dark, input#max-mail888').click(function(){

$('div.boxed-dark').html("");
$('div.boxed-dark').css('display','none');
$('div.box-dark').css('display','none');
$('div.social-view').css('display','block');
$('div.box-view').toggleClass('fixed', false);
$('div.boxed-view').toggleClass('fixed', false);
$('div.boxed-view').animate({
'marginTop': '15px',

}, 0);

});

windowHeight = $(window).height()-20;
reportsHeight = $("div.boxed-dark").height();
resRepHeight = windowHeight-reportsHeight;
resRepHeight2 = resRepHeight/2;
textResRepHeight2 = resRepHeight2 - 35;
heightDark = $('div.boxed-dark').height()+40;
$('div.boxed-dark').animate({
		'marginTop': resRepHeight2+'px'

}, 0, function(){ 
 
$('div.box-dark').animate({
        'height': windowHeight+'px'

}, 0);

 });

$('div.box-view').toggleClass('fixed', true);
$('div.boxed-view').animate({
'marginTop': '0px',
        'marginTop': '-='+window.resy+'px'

}, 0, function(){ 

$(this).toggleClass('fixed', true);  

 });

});